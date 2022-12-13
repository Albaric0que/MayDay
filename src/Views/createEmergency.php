<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>

<body>
    <main >
        <div class="createCard">
        <h2 class="cardHead">Nueva Emergencia</h2>
            <form class="formContainer" action='?action=store' method="post">
                <div class="leftContainer">
                    <div class="input-group"  >
                        <span class="spanName">Nombre</span>
                        <input  class="inputGroupName" type="text" name="name" required placeholder="Escribe aquí el nombre">
                    </div>
                    <div class="input-group">
                        <span class="spanClassification">Clasificación</span>
                        <textarea class="inputGroupClassification" area-label="With textarea" type="text" name="classification" required placeholder="Escribe aquí la clasificación"></textarea>
                    </div>
                </div>
                <div class="rigthContainer">
                    <div class="input-group">
                        <span class="spanEmergency">Emergencia</span>
                        <textarea class="inputGroupEmergency" area-label="With textarea" type="text" name="issue" required placeholder="Descripción de la emergencia"></textarea>
                        <div class="buttons">
                            <input class="buttonCreate"type="image" value="Crear" src='./public/img/save.png' width="50%">
                            <a href="./index.php"><button type="button" class="buttonCancel"><img src='./public/img/cancel.png' alt="Botón de cancelar" width=75%></button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php
        require_once("Components/footer.php")
    ?> 
</body>