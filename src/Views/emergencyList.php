<html>
    
    <?php
        require_once("Components/layout.php")
    ?>

  <body>
      <main>
        <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid card shadow mb-4 card-body">
                    <div class="table-responsive">
                     <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="row">Id</th>
                                <th>Nombre</th>
                                <th>Emergencia</th>
                                <th>Clasificación</th>
                                <th>Fecha</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php
                                 foreach ($data["emergency"] as $emergency) {
                                 echo  "
                                 <tr>
                                     <td>{$emergency -> getId()}</td>
                                     <td>{$emergency -> getName()}</td>
                                     <td>{$emergency -> getIssue()}</td>
                                     <td>{$emergency -> getClassification()}</td>
                                     <td>{$emergency -> getDateTime()}</td>
                                 </tr>
                                 ";
                              }
                             ?>
                        </tbody>
                     </table>
                  </div>
              </div>
          </div>
        </div>
        </div>
      </main>  
    </body>


</html>

