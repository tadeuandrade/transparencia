<?php
include("./layout_base/head.php");
?>

  <!--==========================
    Query
	<?php
$connect = odbc_connect('ac2', 'dbamv', 'jks32lv1*') or die(odbc_errormsg($connect));
$sql = "SELECT
	to_char(COUNT(a.CD_ATENDIMENTO), 'FM999G999G999', 'nls_numeric_characters='',.''') AS atendimentos
	FROM ATENDIME a
		,ORI_ATE o
	WHERE o.CD_ORI_ATE=a.CD_ORI_ATE
	AND o.TP_ORIGEM='A'
	AND a.DT_ATENDIMENTO>=SYSDATE-365
	AND a.DT_ATENDIMENTO<=SYSDATE";

$result = odbc_exec($connect, $sql);

$item = odbc_result($result, 1);

$connect2 = odbc_connect('ac2', 'dbamv', 'jks32lv1*') or die(odbc_errormsg($connect));
$sql = "
SELECT DISTINCT
	to_char(COUNT(ITPED_RX.CD_PED_RX), 'FM999G999G999', 'nls_numeric_characters='',.''')
	FROM
		PED_RX,
		ITPED_RX
	WHERE
		ITPED_RX.CD_PED_RX=PED_RX.CD_PED_RX
	AND ITPED_RX.SN_REALIZADO='S'
	AND PED_RX.DT_PEDIDO>=SYSDATE-365
	AND PED_RX.DT_PEDIDO<=SYSDATE";

$result = odbc_exec($connect, $sql);

$item2 = odbc_result($result, 1);

$connect3 = odbc_connect('ac2', 'dbamv', 'jks32lv1*') or die(odbc_errormsg($connect));
$sql = "SELECT DISTINCT
	to_char(COUNT(ITPED_LAB.CD_PED_LAB), 'FM999G999G999', 'nls_numeric_characters='',.''')
	FROM
		PED_LAB,
		ITPED_LAB
	WHERE
		ITPED_LAB.CD_PED_LAB=PED_LAB.CD_PED_LAB
	AND ITPED_LAB.SN_REALIZADO='S'
	AND PED_LAB.DT_PEDIDO>=SYSDATE-365
	AND PED_LAB.DT_PEDIDO<=SYSDATE";

$result = odbc_exec($connect, $sql);

$item3 = odbc_result($result, 1);

?>

  ============================-->


  <main id="main">



	 <section id="services" class="section-bg">
      <div class="container pt-xl-5">
	  <div class="row pt-xl-5">
	   <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ffffff;"><i class="icofont-hospital" ></i></div>
              <h4 class="title"><a href=".\operacional.php">2</a></h4>
              <p class="text-center">Unidades</p>
            </div>
          </div>


	   <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ffffff;"><i class="icofont-operation-theater" ></i></div>
              <h4 class="title"><a href=".\operacional.php">7</a></h4>
              <p class="text-center">Salas cirúrgicas</p>
            </div>
          </div>


		   <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ffffff;"><i class="icofont-patient-bed" ></i></div>
              <h4 class="title"><a href=".\operacional.php">300</a></h4>
              <p class="text-center">Leitos</p>
            </div>
          </div>



      </div>
	  <div class="row">

    </section>

	<section id="services" class="section-bg">



	<div class="container pt-xl-1">
	<h2>Estatísticas do último ano</h2>
	  <div class="row pt-xl-5">

	    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ffffff;"><i class="icofont-first-aid" ></i></div>
              <h4 class="title"><a href=".\operacional.php"><?php echo $item ?></a></h4>
              <p class="text-center">Consultas</p>
            </div>
          </div>

		  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ffffff;"><i class="icofont-xray" ></i></div>
              <h4 class="title"><a href=".\operacional.php"><?php echo $item2 ?></a></h4>
              <p class="text-center">Exames de imagens</p>
            </div>
          </div>

		    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ffffff;"><i class="icofont-laboratory" ></i></div>
              <h4 class="title"><a href=".\operacional.php"><?php echo $item3 ?></a></h4>
              <p class="text-center">Exames Laboratoriais</p>
            </div>
          </div>



      </div>
	  <div class="row">



	</section>


  </main>

   
<?php
include("./layout_base/footer.php");
?>
