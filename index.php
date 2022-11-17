<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$conn = mysqli_connect('localhost', 'biblioteka', 123456789, 'biblioteka');
if (!$conn) {
    die("Próba połączenia z bazą danych zakończyła sie niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
?>
<h1>Lista tabel w bazie danych <i><?= $database ?></i></h1>
<?php
$query = 'SHOW TABLES;';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Tabela</tr></th>';
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<tr><td>' . $row['Tables_in_biblioteka'] . '</td></tr>';
    }
    echo '</table>';
}
else
{
    echo 'brak danych';
}
?>


</body>
</html>
