<?php require_once __DIR__ . "/../controller/product_controller.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Week4 PA - Torren Moore</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
        th { background-color: #87CEFA; }
        tr.light { background-color: #f2f2f2; }
        tr.dark { background-color: #d3d3d3; }
    </style>
</head>

<body>
    <h1>Current Products:</h1>

    <table>
        <tr>
            <th>Product #</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
        <?php foreach ($products as $i => $product) { ?>
            <tr class="<?php echo ($i % 2 === 0) ? "light" : "dark"; ?>">
                <td><?php echo (int)$product["ProductNo"]; ?></td>
                <td><?php echo htmlspecialchars($product["Name"]); ?></td>
                <td><?php echo htmlspecialchars($product["Type"]); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>