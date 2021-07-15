<?php
$nomeCompleto = array('nome'=>$_GET['nome']." ".$_GET['sobrenome']);
echo json_encode($nomeCompleto);
?>