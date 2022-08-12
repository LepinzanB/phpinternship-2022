<body style="padding-left: 50px"></body>

<?php

$firstName = "Mihaela";
$lastName = "Petricele";
$age = 22;

include ("firstPage.php");

?>

<table style="border: 1px solid black;">
<th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
<tr>
    <td><?php echo $firstName ?></td>
    <td><?php echo $lastName ?></td>
    <td><?php echo  $age ?></td>
</tr>
</table>

<?php

//include ("string.php");
include ("array.php");

?>

