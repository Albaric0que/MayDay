<html>
    

  <body>
      <main>
        <?php
            foreach ($data["emergency"] as $emergency) {
                echo "{$emergency -> getName()}";
                echo "{$emergency -> getIssue()}";
                echo "{$emergency -> getId()}";
                echo "{$emergency -> getClassification()}";
                echo "{$emergency -> getDateTime()}";
            }
        ?>
      </main>  
    </body>


</html>

