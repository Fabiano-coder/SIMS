<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_name = $_POST['student_name'];
    $class = $_POST['class'];
    $amount_paid = $_POST['amount_paid'];
    $payment_date = $_POST['payment_date'];

    $sql = "INSERT INTO fees (student_name, class, amount_paid, payment_date) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$student_name, $class, $amount_paid, $payment_date])) {
        echo "Fee record saved successfully!";
    } else {
        echo "Error saving fee record.";
    }
}
?>
