<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Search Results</h1>
        <?php
        include 'functions.php';

        $results = [];

        if (!empty($_GET['category'])) {
            $results = getExpensesByCategory($_GET['category']);
        } elseif (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
            $results = getExpensesByDateRange($_GET['startDate'], $_GET['endDate']);
        } elseif (!empty($_GET['amount'])) {
            $result = getExpenseByAmount($_GET['amount']);
            $results = $result ? [$result] : [];
        }

        if (empty($results)) {
            echo "<p>No results found.</p>";
        } else {
            foreach ($results as $expense) {
                echo "<div class='result'>";
                echo "Date: " . htmlspecialchars($expense['date']) . "<br>";
                echo "Amount: " . htmlspecialchars($expense['amount']) . "<br>";
                echo "Category: " . htmlspecialchars($expense['category']) . "<br><br>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
