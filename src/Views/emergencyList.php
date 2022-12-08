<html>
    
    <?php
        require_once("Components/layout.php")
    ?>

    <body>

    <?php
        require_once("Components/header.php")
    ?>   
        <main>
            <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="tableHeaderBox">
                        <tr>Emergencias
                            <a href="?action=create"><button class="buttonNew" type="button"><img src='./public/img/nuevo.png'></button></a>
                        </tr>
                    </div>
                    <div class="container-fluid card shadow mb-4 card-body tableBody">
                        <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="10">
                            <thead>
                                <tr class="headCells">
                                    <th scope="row">ID</th>
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
                                    <tr class='dataCells'>
                                        <td>{$emergency -> getId()}</td>
                                        <td>{$emergency -> getName()}</td>
                                        <td>{$emergency -> getIssue()}</td>
                                        <td>{$emergency -> getClassification()}</td>
                                        <td>{$emergency -> getDateTime()}</td>
                                        <td>
                                            <a href='?action=edit&id={$emergency->getId()}'><img src='./public/img/editar.png'></a>
                                        </td>
                                        <td>
                                            <a href='?action=delete&id={$emergency->getId()}'><img src='./public/img/bin.png'></a>
                                        </td>
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
        <?php
        require_once("Components/footer.php")
        ?> 
    </body>


</html>

