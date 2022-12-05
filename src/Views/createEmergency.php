<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>

<body>
<main class="card" style="width: 80%; height:27rem; display:flex; justify-content:center; ">
    <h2 class="text-center" style="margin-bottom: 3rem; margin-top: 1rem;">Nueva Emergencia</h2>
    <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>
        <form class="justify-content-center " action='?action=store' method="post">
            <div class="input-group" style=" margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                <span class="input-group-text">Nombre</span>
                <input class="form-control" type="text" name="name" required placeholder="Escribe aquí el nombre">
            </div>
            <div class="input-group" style="width: 90%; margin-left: 5%;">
                <span class="input-group-text">Emergencia</span>
                <textarea class="form-control" area-label="With textarea" type="text" name="issue" required placeholder="Descripción de la emergencia"></textarea>
            </div>
            <div class="input-group" style="width: 90%; margin-left: 5%;">
                <span class="input-group-text">Clasificación</span>
                <textarea class="form-control" area-label="With textarea" type="text" name="classification" required placeholder="Escribe aquí la clasificación"></textarea>
            </div>
            <div class="botones " style="margin-bottom: 2rem;">
                <input class="btn-lg btn-outline-success go-add-task float" type="submit" value="Crear">
                <input class="btn-lg btn-outline-warning go-add-task float" type="reset" value="Reset">
            </div>
        </form>
    </main>

    <?php
        require_once("Components/footer.php")
    ?> 
</body>