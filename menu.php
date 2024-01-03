<?php


// condicionamento para carregar o menu de forma correta.

$urlcompleta = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if( $urlcompleta == "localhost:3030/" or $urlcompleta == "localhost:3030/index.php"){
     
    // echo '<p>vc está no index</p>';

}else {
    echo $urlcompleta;
};


?>