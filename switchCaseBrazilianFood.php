<?php
$favoriteFood = "Arroz Carreteiro";
switch ($favoriteFood) {
    case "Arroz Carreteiro":
        echo("Este prato é típico do Rio Grande do Sul!");
        break;
    case "Baião de dois":
        echo("Este prato é típico do nordeste!");
        break;
    case "Feijão Tropeiro":
        echo("Este prato é típico de Minas Gerais!");
        break;
    default:
        echo("Prato de origem desconhecida!");
        break;
}
?>