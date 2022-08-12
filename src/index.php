
<?php
    require_once "./htmlSetup.php";
    $name = "Ionut";
    $data = "some data";
?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $name ?> </td>
                <td> <?php echo $data ?> </td>
            </tr>
        </tbody>
    </table>
<?php
    //include_once "./strings.php";
    include_once "./arrays.php";
?>
