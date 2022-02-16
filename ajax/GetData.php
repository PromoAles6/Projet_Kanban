<?php

if(isset($_POST['list']))
{
    $list = $_POST['list'];

    $conx = mysqli_connect("localhost", "root", "", "kanban");

    $sql = "INSERT INTO `list`(`id`, `name`, `sort`, `board_id`) VALUES ('$id','$name','$sort','$board_id')";
    $result = mysqli_query($conx, $sql);

    if ($result == true) 
    {
        echo "<h3>Inséré into ze BDD !!</h3>";
    }
    else
    {
        echo "<h3>Looser !</h3>";
    }
}

$vague = "ajax";
$radeau = "nous";

function trempette($vague, $radeau) {
    if($vague > $vague) {
        return false;
        echo 'you are dead, looser !';
    } else {
        echo 'tu gères les requêtes ajax, pgm';
    }
}