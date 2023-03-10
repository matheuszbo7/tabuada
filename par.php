  <h1>Números Pares de 0 a 500</h1>
    <?php
     for ($par=0; $par<=500; $par++){
        if (($par % 2 == 1) and ($par < 500)){
            continue;

        }elseif ($par <=500){
            echo $par . " - ";
        }else{
            break;
        }
        }
    ?>