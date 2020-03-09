<!DOCTYPE html>
<?php


if (isset($_POST['de']) and $_POST['ate']) {
    $de = $_POST['de'];
    $ate = $_POST['ate'];
}

include("./layout_base/head.php");

if(isset($_GET['valida'])){
    $v = $_GET['valida'];    
}else{
    $v = 0;
}


?>

  <section id="services" class="section-bg ">
    <div class="container pt-xl-5"></div>
  </section>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="container">

        <form  method="post" action="recebe_upload.php" enctype="multipart/form-data" >
            <div class="form-group">
			  <label for="date">Nome:</label>
			  <input type="text" class="form-control" id="nome" placeholder="Nome do arquivo" name="nome" required>
			</div>
			<div class="form-group">
			  <label for="date">Descrição:</label>
			  <input type="text" class="form-control" id="descricao" placeholder="Descrição breve do arquivo" name="descricao" required>
			</div>
			<div class="form-group">
			  <label for="date">Arquivo:</label>
			  <input type="file"  id="arquivo" name="arquivo" required>
			</div>

            <div class="form-group">            
			<button type="submit" class="btn btn-primary" value="pesquisar">Enviar</button>
			</div>
		  </form>
            
            <?php
                if($v==1){
                    echo '<div class="alert alert-primary" role="alert">Ato salvo com sucesso</div>';
                    $v=0;
                    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=cadastroatos.php'>";
                }
            
            
            ?>
            
		</div>


 <?php

include("./layout_base/footer.php");

?>