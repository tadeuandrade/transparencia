<?php

if(isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['assunto']) and isset($_POST['mensagem']) and isset($_POST['url'])){
    $nomeu = $_POST['nome'];
    $emailu = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $url = $_POST['url'];
    
}

       // require_once('../modelo/ContratoDAO.php');
      //  require_once('../modelo/Contrato.php');

        $email    = 'tadeu.vieira@mariopenna.org.br';
        $nome      = 'Portal Transparencia';        

      
            require_once('PHPMailer/class.phpmailer.php');        


            $Email = new PHPMailer();
			$Email->SetLanguage("br");
			$Email->IsSMTP(); // Habilita o SMTP
			$Email->SMTPAuth = true; //Ativa e-mail autenticado
			$Email->Host = '172.16.0.7'; // Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
			$Email->Port = '587'; // Porta de envio
			$Email->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
			$Email->Username = 'alerta.mail@mariopenna.org.br'; //e-mail que será autenticado
			$Email->Password = '@l3rtafmp*'; // senha do email
			// ativa o envio de e-mails em HTML, se false, desativa.
			$Email->IsHTML(true);
			// email do remetente da mensagem
			$Email->From = 'alerta.mail@mariopenna.org.br';
			// nome do remetente do email
			$Email->FromName = utf8_decode($email);
			// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
			$Email->AddReplyTo($email,$nome);
			
            //$Email->AddAddress("$email_usuario"); // para quem será enviada a mensagem
			
            //$Email->AddAddress("gabriel.vicente@mariopenna.org.br");
			$Email->AddAddress("tadeuandradesv@gmail.com"); // para quem será enviada a mensagem
            $Email->AddAddress("mauricio.schvartzman@mariopenna.org.br");
			// informando no email, o assunto da mensagem
			$Email->Subject = "(PORTAL TRANSPARÊNCIA MENSAGEM) Assunto:".$assunto;

                             // Define o texto da mensagem (aceita HTML)
			                 $Email->Body .= "<br /><br />			                 
			                 Prezado(a),<br /><br />
                             Segue mensagem:<br /><br />
                             Nome: ".$nomeu."<br />
                             Email: ".$emailu."<br />
                             Mensagem:".$mensagem."<br />
                             ";	
							 	// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
			if(!$Email->Send()){
				echo "<p>A mensagem não foi enviada. </p>";
				echo "Erro: " . $Email->ErrorInfo;
			}else{
				 echo "<p>A mensagem foi enviada. </p>";
                echo "<meta HTTP-EQUIV='refresh' CONTENT='3;".$url."'>";
                //header('Location:'.$url);
				//echo "<script>location.href='sucesso.html'</script>";
			}

		//$nome     = utf8_decode (strip_tags(trim($_POST['nomeremetente'])));

		//$ddd = utf8_decode (strip_tags(trim($_POST['ddd'])));
		//$telefone = utf8_decode (strip_tags(trim($_POST['telefone'])));
		//$assunto = utf8_decode (strip_tags(trim($_POST['assunto'])));
		//$mensagem = utf8_decode (strip_tags(trim($_POST['mensagem'])));






?>
