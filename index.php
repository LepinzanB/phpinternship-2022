<?php
    echo '<table border="1" width="300" cellspacing="0">';
        echo '<tr>';
                echo '<td>Nume</td>';
                echo '<td>Tudor</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Prenume</td>';
            echo '<td>Mihai-Nicusor</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Email</td>';
            echo '<td>mihai.tudor@bitstone.eu/mihaitudor2000@yahoo.com</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Numar telefon</td>';
            echo '<td>0771234597</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>Adresa</td>';
            echo '<td>Str. Dambovitei, Nr. 99</td>';
        echo '</tr>';
    echo '</table>';

    echo nl2br("\n");

    include "strings.php";
    echo nl2br("\n");
    echo nl2br("-------------------------------------------------------------------------------\n");
    echo nl2br("\n");
    include "arrays.php";
?>