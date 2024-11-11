<?php
include_once 'banker.php';  // Including banker functions

// Display Banker menu in HTML
function displayMenu() {
    echo "<h1>Bank Management System</h1>";
    echo "<h3>Banker Menu</h3>";
    echo "<ul>";
    echo "<li><a href='index.php?action=add_customer'>Add Customer</a></li>";
    echo "<li><a href='index.php?action=view_customer'>View Customer</a></li>";
    echo "<li><a href='index.php?action=search_customer'>Search Customer</a></li>";
    echo "<li><a href='index.php?action=view_all_customers'>View All Customers</a></li>";
    echo "<li><a href='index.php?action=total_amounts_in_bank'>total amounts in bank</a></li>";
    echo "</ul>";
}

// Handle menu actions
$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action) {
    switch ($action) {
        case 'add_customer':
            include 'add_customer_form.php';  // Include the form for adding a customer
            break;
        case 'view_customer':
            include 'view_customer_form.php';  // Include the form to view a customer by account number
            break;
        case 'search_customer':
            include 'search_customer_form.php';  // Include the form to search customer by name
            break;
        case 'view_all_customers':
            viewAllCustomers();  // Call the function from banker.php
            break;
            case 'total_amounts_in_bank':
                totalamountsinbank();  // Call the function from banker.php
                break;
        default:
            echo "Invalid action!";
    }
} else {
    displayMenu();  // Display the menu if no action is specified
}
?>
