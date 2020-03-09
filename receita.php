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
    $sql = "SELECT F.NM_FORNECEDOR as nm_fornecedor, RR.DT_RECEBIMENTO as data, to_char(SUM(RR.VL_RECEBIDO),'999g999g990d00') AS vl_rec                          
		FROM FORNECEDOR F INNER JOIN CON_REC CR ON CR.CD_FORNECEDOR=F.CD_FORNECEDOR 
						  INNER JOIN ITCON_REC IR ON IR.CD_CON_REC=CR.CD_CON_REC
						  INNER JOIN RECCON_REC RR ON RR.CD_ITCON_REC=IR.CD_ITCON_REC
		WHERE 
			  RR.DT_RECEBIMENTO>=to_char(to_date('$de','yyyy-mm-dd'),'dd/mm/YYYY')
		  AND RR.DT_RECEBIMENTO<=to_char(to_date('$ate','yyyy-mm-dd'),'dd/mm/yyyy')
          AND RR.VL_RECEBIDO!=0
			   GROUP BY F.NM_FORNECEDOR, RR.DT_RECEBIMENTO";

    $result = odbc_exec($connectO, $sql);

    while (odbc_fetch_row($result)) {

        echo '<tr>
                                                    <td>' . odbc_result($result, "nm_fornecedor") . '</td>
                                                    <td>' . odbc_result($result, "data") . '</td>
                                                    <td>R$ ' . odbc_result($result, "vl_rec") . '</td>
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
  <?php
include("./layout_base/footer.php");
?>