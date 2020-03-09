 <?php

include("./layout_base/head.php");

?>


  <section id="services" class="section-bg ">
    <div class="container pt-xl-5"></div>
  </section>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive pt-xl-5">
                <table class="table table-bordered ">
                  <thead class="thead-dark">
                    <tr>
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>Data</th>
					  <th>Documento</th>
                    </tr>
                  </thead>
                  <tbody>

                
                  <?php
                  $connect = odbc_connect('test','root','') or die(odbc_errormsg($connect));
    
                  $sql = "SELECT * FROM documentos WHERE 1";
                  $result = odbc_exec($connect , $sql);

                  while (odbc_fetch_row($result)) {

                    //$convert = date_create(odbc_result($result, "data"));
                    $convert=DateTime::createFromFormat('Y-m-d', odbc_result($result, "data"));
                    $date = $convert->format('d/m/Y'); //date_format($convert, 'd/m/y');   
                    
                    
              
                      echo '<tr>
                                                                  <td>' . odbc_result($result, "nome") . '</td>
                                                                  <td>' . odbc_result($result, "descricao") . '</td>
                                                                  <td>' .$date. '</td>
                                                                  <td><div class="icon" align="center"><a href="./pdf/'.odbc_result($result, "caminho").'"><ion-icon name="document"></ion-icon></a></div></td>
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