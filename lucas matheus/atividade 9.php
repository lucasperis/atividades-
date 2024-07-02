<html>
    <body>
        <?php
            $nome = 'fulano';

            switch($nome) {
                case 'fulano':
                    echo ' E ai fulano';
                    break;

                    case 'sicrano':
                        echo 'e ai Sicrano!';
                    break;

                    case 'Beltrano';
                            echo 'E ai Beltrano!';
                    break;

                    default:
                        echo 'Qual é o seu nome?';
                    break;

        }

    ?>    
    </body>
</html>