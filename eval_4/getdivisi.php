<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost', 'root', '');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "tsa_web");
    $sql = "SELECT * FROM divisi WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
        <tr>
            <th>ID</th>
            <th>Divisi</th>
            <th>Keterangan</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row ['id'] . "</td>";
            echo "<td>" . $row ['divisi'] . "</td>";
            echo "<td>" . $row ['keterangan'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
    ?>
</body>

</html>