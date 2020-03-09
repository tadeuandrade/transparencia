<!DOCTYPE html>
<?php


if (isset($_POST['de']) and $_POST['ate']) {
    $de = $_POST['de'];
    $ate = $_POST['ate'];
}
include("./layout_base/head.php");

?>


  <section id="services" class="section-bg ">
    <div class="container pt-xl-5"></div>
  </section>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="container">

		 
		</div>



          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive pt-xl-5">

			  <?php

    ?>
                <table class="table table-bordered ">
                  <thead class="thead-dark">
                    <tr>

                      <th>Cargo</th>
                      <th>Salário</th>
                    </tr>
                  </thead>
                  <tbody>

			<?php


$connection_string = 'DRIVER={SQL Server};SERVER=172.16.0.33;DATABASE=totvs'; 


$connection = odbc_connect( $connection_string, 'tadeu.vieira','A94903080*' );  

$sql = "SELECT C.NOME AS CARGO, avg(pf.SALARIO) as SAL FROM PFUNC PF INNER JOIN CARGOS C ON C.CODIGO=PF.CODFUNCAO GROUP BY C.NOME";

    $result = odbc_exec($connection, $sql);

    while (odbc_fetch_row($result)) {
        
        $number= number_format(odbc_result($result, "SAL"), 2, ',', '.');
        
                
      echo '<tr>
                                                    <td>'.odbc_result($result, "CARGO").'</td>
                                                    <td>R$ '.$number.'</td>
                                                    
                                                  </tr>';

    }

?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
<?php
include("./layout_base/footer.php");
?>