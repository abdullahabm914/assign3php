<!DOCTYPE html>
<html>
<head>
    <title>Daily Sales Report</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="text-center mb-4">Savor Foods - Daily Sales Report</h2>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity Sold</th>
            </tr>
        </thead>
        <tbody>

        <?php
            // Associative Array
            $dailySales = [
                "Chicken Pulao" => 450,
                "Zinger Burger" => 200,
                "Fries" => 150
            ];

            // foreach loop
            foreach ($dailySales as $item => $qty) {
                echo "<tr>";
                echo "<td>$item</td>";
                echo "<td>$qty</td>";
                echo "</tr>";
            }
        ?>

        </tbody>
    </table>

</body>
</html>