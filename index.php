<?php
include "ex4.php";
include "strings.php";
include "day2exercises.php";
echo "Hello World";
$firstvar = 45;
$secondvar = "hei";
?>
<html>
    <head>

    </head>
    <body>
        <table>
            <tr>
                <th>First variable</th>
                <th>Second variable</th>
            </tr>
            <tr>
                <td><?php echo $firstvar ?></td>
                <td><?php echo $secondvar?></td>
            </tr>
        </table>
        <br>
        <br>
        <div>
            <?php echoExercises(); ?>
            <?php echoExercises2(); ?>
        </div>
    </body>
</html>