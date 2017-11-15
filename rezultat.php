<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
    echo('Pozdrav, '. $_POST['prezime'].' '.$_POST['ime'].' imate ');
    //print_r($_POST);
    if($_POST['G']>=18)
    {
        echo('<span style="color: green">'.$_POST['G'].'godina'.'</span>');
        echo(' za SEKS SPERMNI ');
    }
    else
    {
        echo('<span style="color: red">'.$_POST['G'].'godina'.'</span>');
        echo(' GLUPO NERAZUMNO DIJETE!');
    }
?>
</body>

</html>