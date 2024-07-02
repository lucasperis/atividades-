<html>
    <body>
        <?php
            
            encho "<b>seu sistema operacional é: </br" . $_POST["sistema"] . "<br><br>d";

            if(isset($_POST["numeros"]))
             {
                echo "<b>Os numeros de sua preferencia são:</b><BR>">


                foreach($_POST["numero"] as $numero)
                {
                    echo "- " . $numero . "<BR><br>";
                }
            }
            else
            {

                echo "<b>voce não escolheu numero preferido!</b><br><br>";
            }    
            
            echo "<br>seu precessador é: </b>" . $_POST["processador"] . "<BR";

         ?>   
    </body>
</html>