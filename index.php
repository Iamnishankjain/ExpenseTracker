<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Expense Tracker</h1>
        
        <!-- Add Expense Form -->
        <form action="process.php" method="POST">
            <h2>Add Expense</h2>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>
            <input type="submit" name="add" value="Add Expense">
        </form>

        <!-- Search Forms and Results -->
        <form action="search.php" method="GET">
            <h2>Search by Category</h2>
            <label for="searchCategory">Category:</label>
            <input type="text" id="searchCategory" name="category">
            <input type="submit" value="Search">
        </form>
        
        <form action="search.php" method="GET">
            <h2>Search by Date Range</h2>
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate">
            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate">
            <input type="submit" value="Search">
        </form>

        <form action="search.php" method="GET">
            <h2>Search by Amount</h2>
            <label for="searchAmount">Amount:</label>
            <input type="number" id="searchAmount" name="amount">
            <input type="submit" value="Search">
        </form>

        <form action="process.php" method="POST">
            <h2>Delete Expense</h2>
            <label for="deleteId">Expense ID:</label>
            <input type="number" id="deleteId" name="id">
            <input type="submit" name="delete" value="Delete Expense">
        </form>

        <form action="process.php" method="POST">
            <h2>Update Expense</h2>
            <label for="updateId">Expense ID:</label>
            <input type="number" id="updateId" name="id">
            <label for="updateDate">New Date:</label>
            <input type="date" id="updateDate" name="date">
            <label for="updateAmount">New Amount:</label>
            <input type="number" id="updateAmount" name="amount">
            <label for="updateCategory">New Category:</label>
            <input type="text" id="updateCategory" name="category">
            <input type="submit" name="update" value="Update Expense">
        </form>

        <!-- View Total Expenditure -->
        <form action="total_expenditure.php" method="GET">
            <h2>Total Expenditure</h2>
            <input type="submit" value="View Total Expenditure">
        </form>
    </div>
</body>
</html>
