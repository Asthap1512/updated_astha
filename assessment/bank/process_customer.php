<?php
include_once 'banker.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['accountNumber']) && isset($_POST['balance'])) {
        // Add customer
        $name = $_POST['name'];
        $accountNumber = $_POST['accountNumber'];
        $balance = floatval($_POST['balance']);
        addCustomer($name, $accountNumber, $balance);
    } elseif (isset($_GET['action']) && $_GET['action'] == 'view') {
        $accountNumber = $_POST['accountNumber'];
        viewCustomer($accountNumber);
    } elseif (isset($_GET['action']) && $_GET['action'] == 'search') {
        $name = $_POST['name'];
        searchCustomer($name);
     }elseif (isset($_GET['action']) && $_GET['action'] == 'total') {
            $total = $_POST['total'];
            totalamountsinbank($total);
    } else {
        echo "Invalid data!";
    }
}
?>
