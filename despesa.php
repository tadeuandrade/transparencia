<!DOCTYPE html>
<?php

include("./layout_base/head.php");

if (isset($_POST['de']) and $_POST['ate']) {
    $de = $_POST['de'];
    $ate = $_POST['ate'];
}

?>

  <section id="services" class="section-bg ">
    <div class="container pt-xl-5"></div>
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="container">

		 <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
			<div class="form-group">
			  <label for="date">De:</label>
			  <input type="date" class="form-control" id="de" placeholder="Enter email" name="de" required>
			</div>
			<div class="form-group">
			  <label for="date">Até :</label>
			  <input type="date" class="form-control" id="ate" placeholder="Enter password" name="ate" required>
			</div>

			<button type="submit" class="btn btn-default" value="pesquisar">Pesquisar</button>
		  </form>
		</div>



          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive pt-xl-5">

			  <?php
if (count($_POST) > 0) // Se existir o array post, pq ele não retorna undefined index.
{
    ?>
                <table class="table table-bordered ">
                  <thead class="thead-dark">
                    <tr>

                      <th>Fornecedor</th>
                      <th>Data</th>
					  <th>Valor</th>
                    </tr>
                  </thead>
                  <tbody>

			<?php
$connectO = odbc_connect('ac2', 'dbamv', 'jks32lv1*') or die(odbc_errormsg($connectO));
    $sql = "SELECT

													f.nm_fornecedor
													,To_Char(To_Date(ip.dt_quitacao, 'dd/mm/yyyy'), 'dd/mm/yyyy') AS data
                                                    ,to_char(SUM(cp.vl_moeda),'999g999g990d00') AS vl_moeda

													FROM CON_PAG cp
														,FORNECEDOR f
														,ITCON_PAG ip
														,PAGCON_PAG pp
														WHERE
															f.CD_FORNECEDOR=cp.CD_FORNECEDOR
														AND ip.CD_CON_PAG=cp.CD_CON_PAG
														AND pp.CD_ITCON_PAG=ip.CD_ITCON_PAG
														AND ip.dt_quitacao>=to_char(to_date('$de','yyyy-mm-dd'),'dd/mm/YYYY')
														AND ip.dt_quitacao<=to_char(to_date('$ate', 'yyyy-mm-dd'),'dd/mm/yyyy')
														GROUP BY f.CD_FORNECEDOR ,f.nm_fornecedor,ip.dt_quitacao
														order by data";

    $result = odbc_exec($connectO, $sql);

    while (odbc_fetch_row($result)) {

        echo '<tr>
                                                    <td>' . odbc_result($result, "nm_fornecedor") . '</td>
                                                    <td>' . odbc_result($result, "data") . '</td>
                                                    <td>R$ ' . odbc_result($result, "vl_moeda") . '</td>
                                                  </tr>';

    }
} else {

    echo '<div class="alert alert-primary" role="alert">
  Selecione um periodo
</div>';

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
 </section>

  <?php

include("./layout_base/footer.php");

?>