<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        addExpense($_POST['date'], $_POST['amount'], $_POST['category']);
        header('Location: index.php');
    }

    if (isset($_POST['update'])) {
        updateExpense($_POST['id'], $_POST['date'], $_POST['amount'], $_POST['category']);
        header('Location: index.php');
    }

    if (isset($_POST['delete'])) {
        deleteExpense($_POST['id']);
        header('Location: index.php');
    }
}
?>
