<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Expenditure</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Total Expenditure</h1>
        <?php
        include 'functions.php';

        try {
            $total = getTotalExpenditure();
            if ($total === null) {
                throw new Exception("Unable to retrieve total expenditure.");
            }
            echo "<p>Total Expenditure: " . number_format($total, 2) . "</p>";
        } catch (Exception $e) {
            echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
        ?>
    </div>
</body>
</html>
