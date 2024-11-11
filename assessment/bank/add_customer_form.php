<h3>Add a New Customer</h3>
<form method="POST" action="process_customer.php">
    <label for="name">Customer Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="accountNumber">Account Number:</label><br>
    <input type="text" id="accountNumber" name="accountNumber" required><br><br>

    <label for="balance">Initial Balance:</label><br>
    <input type="number" id="balance" name="balance" min="0" required><br><br>

    <input type="submit" value="Add Customer">
</form>
    