<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathmetical Table's in Table format</title>
</head>
<body>
    <table border=1px solid black  cellspacing=0 bgcolor=skyblue>
        <?php
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            for($j=1;$j<=10;$j++){
                echo "<td>";
                echo "<b>";
                echo "$i x $j=";
                echo $i*$j;
                echo " ";
                echo "</td>";
            }
            echo "<br>";
            echo "</tr>";
        }
        ?>
        </table>
</body>
</html>