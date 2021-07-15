<?php 
try{
    session_start();
    if(!isset($_SESSION['nomes'])){
        $_SESSION['nomes'] = [];
    }
    array_push($_SESSION['nomes'], $_POST['nome']);
    var_dump($_SESSION['nomes']);
}catch(Exception $e){
    echo $e;
}

?>