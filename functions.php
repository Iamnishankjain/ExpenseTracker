<?php
include 'db.php';

function addExpense($date, $amount, $category) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO expenses (date, amount, category) VALUES (:date, :amount, :category)");
    $stmt->execute(['date' => $date, 'amount' => $amount, 'category' => $category]);
}

function updateExpense($id, $date, $amount, $category) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE expenses SET date = :date, amount = :amount, category = :category WHERE id = :id");
    $stmt->execute(['id' => $id, 'date' => $date, 'amount' => $amount, 'category' => $category]);
}

function deleteExpense($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM expenses WHERE id = :id");
    $stmt->execute(['id' => $id]);
}

function getExpensesByCategory($category) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM expenses WHERE category = :category");
    $stmt->execute(['category' => $category]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getExpensesByDateRange($startDate, $endDate) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM expenses WHERE date BETWEEN :startDate AND :endDate");
    $stmt->execute(['startDate' => $startDate, 'endDate' => $endDate]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getExpenseByAmount($amount) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM expenses WHERE amount = :amount");
    $stmt->execute(['amount' => $amount]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getTotalExpenditure() {
    global $pdo;
    $stmt = $pdo->query("SELECT SUM(amount) AS total FROM expenses");
    return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
}
?>
