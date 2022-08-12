<?php
include ("title.php");
echo nl2br("Hello World!\n\n");

$firstName = "Gabriela";
$lastName = "Torzsa";
$age = 21;
$gender = "Female";
?>
<body style="margin-left: 30px"></body>
<table>
    <th>First name</th>
    <th>Last name</th>
    <th>Age</th>
    <th>Gender</th>
    <tr>
        <td><?php echo $firstName?></td>
        <td><?php echo $lastName?></td>
        <td><?php echo $age?></td>
        <td><?php echo $gender?></td>
    </tr>
</table>

<?php
echo nl2br("\n\n");
//include ("strings.php");
include ("phpDay2.php");
?>