<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chess Board</title>
</head>
<body>
    <h3>Chess Board</h3>
    <?php
        echo '<table width=270px border=1px cellspacing=0px cellpadding=0px>';
        for($row=1; $row<=8; $row++) {
            echo "<tr>";
            for($col=1; $col<=8; $col++){
               $board = $col+$row;
               if($board%2 == 0){
                   echo "<td height=30px width=30px bgcolor=black></td>";
               }else {
                   echo "<td height=30px width=30px bgcolor=white></td>";
                }
            }
        }
        '</table>';
    ?>
</body>
</html>