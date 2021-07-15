<?php
$nomeCompleto = array('nome'=>$_POST['nome']." ".$_POST['sobrenome']);
echo json_encode($nomeCompleto);
?>