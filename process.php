<!DOCTYPE html>

<html>
<head>
    <title>A Web Page</title>
    <meta charset="utf-8">
</head>
<body>

<?php

echo "Фамилия имя отчество : " . $_POST["FName"] . "<br/>";
echo " Год рождения : ". $_POST["FDate"]. "<br/>";
echo "<br/>";
?>

<?php
$aDoor = $_POST['formDoor'];
if(empty($aDoor))
{
    echo("Вы ничего не выбрали.");
}
else
{
    $N = count($aDoor);
    echo("Знание языков  $N : ");
    for($i=0; $i < $N; $i++)
    {
        echo($aDoor[$i] . " ");
    }
}
?>
<?php
echo "<br/>";
echo "Резюме: " . $_POST["Message"];
echo "<br/>";
?>
<body>
</html>