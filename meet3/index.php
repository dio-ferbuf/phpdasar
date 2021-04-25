<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 3</title>
    <style>
        .table {
            border-collapse: collapse;
            border: 2px solid black;
        }

        .table td {
            border-right: 2px solid black;
            border-spacing: 0;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <table border="1" class="table">
        <?php for ($r = 0; $r <= 4; $r++) { ?>
            <tr>
                <?php for ($c = 0; $c <= 7; $c++) { ?>
                    <td><?php echo "$r, $c" ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>