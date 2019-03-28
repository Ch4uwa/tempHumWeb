<?php
include("connect.php");
if (isset($_POST['temp1']) && isset($_POST["hum1"]) && isset($_POST['name'])) {

    $link = Connection();
    $temp1 = $_POST['temp1'];
    $hum1 = $_POST['hum1'];
    $name = $_POST['name'];

    $query = "INSERT INTO $name (`temperature`, `humidity`, `name`) VALUES ('" . $temp1 . "','" . $hum1 . "','" . $name . "')";

    mysqli_query($link, $query);
    mysqli_close($link);
    header("Location: index.php");
}
?>