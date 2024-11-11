<?php
include_once 'fileHandler.php';  // Include file handling logic

// Add customer function
function addCustomer($name, $accountNumber, $initialBalance) {
    $customers = loadCustomers();  // Load existing customers
    if (isset($customers[$accountNumber])) {
        echo "Account Number already exists. Please try again.";
        return;
    }

    // Add customer to the array
    $customers[$accountNumber] = [
        'name' => $name,
        'balance' => $initialBalance,
        'transactions' => []
    ];

    saveCustomers($customers);  // Save to the file
    echo "Customer added successfully!";
}

// View a specific customer
function viewCustomer($accountNumber) {
    $customers = loadCustomers();
    if (isset($customers[$accountNumber])) {
        $customer = $customers[$accountNumber];
        echo "Account Number: " . $accountNumber . "<br>";
        echo "Customer Name: " . $customer['name'] . "<br>";
        echo "Balance: " . $customer['balance'] . "<br>";
        echo "Transactions: <pre>" . print_r($customer['transactions'], true) . "</pre>";
    } else {
        echo "Customer not found!";
    }
}

// Search for a customer by name
function searchCustomer($name) {
    $customers = loadCustomers();
    $found = false;

    foreach ($customers as $accountNumber => $customer) {
        if (stripos($customer['name'], $name) !== false) {
            echo "Account Number: $accountNumber, Name: {$customer['name']}, Balance: {$customer['balance']}<br>";
            $found = true;
        }
    }

    if (!$found) {
        echo "No customers found with the name '$name'.";
    }
}

// View all customers and calculate the total balance
function viewAllCustomers() {
    $customers = loadCustomers();
    $totalBalance = 0;

    if (empty($customers)) {
        echo "No customers found.";
        return;
    }

    echo "<h3>All Customers</h3>";
    foreach ($customers as $accountNumber => $customer) {
        echo "Account Number: $accountNumber, Name: {$customer['name']}, Balance: {$customer['balance']}<br>";
        $totalBalance += $customer['balance'];
    }
    echo "Total Balance in the Bank: $totalBalance<br>";
}
function totalamountsinbank() {
    $customers = loadCustomers();
    $totalBalance = 0;

    if (empty($customers)) {
        echo "No customers found.";
        return;
    }

    echo "<h3>total amounts in bank</h3>";
    foreach ($customers as $accountNumber => $customer) {
        echo "Account Number: $accountNumber, Name: {$customer['name']}, Balance: {$customer['balance']}<br>";
        $totalBalance += $customer['balance'];
    }
    echo "Total Balance in the Bank: $totalBalance<br>";
}
?>
