<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
<body>     
     <main>
        <div class="createCard">
            <h2 class="cardHead">Editar Emergencia</h2>
            <form class="formContainer" action='?action=update&id=<?php echo $data["emergency"]->getId()?>' method="post">
                <div class="leftContainer">
                    <div class="input-group">
                        <span class="spanName">Nombre</span>
                        <input class="inputGroupName" type="text" name="name" required value='<?php echo $data["emergency"]->getName()?>'>
                    </div>
                    <div class="input-group">
                        <span class="spanClassification">Clasificación</span>
                        <input class="inputGroupClassification" area-label="With textarea" type="text" name="classification" required value='<?php echo $data["emergency"]->getClassification()?>'>
                    </div>
                </div>
                <div class="rigthContainer">
                    <div class="input-group">
                        <span class="spanEmergency">Emergencia</span>
                        <input class="inputGroupEmergency" area-label="With textarea" type="text" name="issue" required value='<?php echo $data["emergency"]->getIssue()?>'>
                    </div>
                </div>
                <div class="botones">
                    <input class="btn-lg btn-outline-warning go-add-task float" type="reset" value="Reset">
                    <input class="btn-lg btn-outline-success go-add-task float" type="submit" value="Edit">
                    <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-danger button-cancel">Cancel</button></a>
                    </div>
                </form>
            </div>
    </main>
<?php
        require_once("Components/footer.php")
    ?> 
</body>