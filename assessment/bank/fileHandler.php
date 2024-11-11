<?php
// Load customers from a JSON file
function loadCustomers() {
    $filename = 'customers.json';
    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        return json_decode($jsonData, true);
    }
    return [];
}

// Save customers to the JSON file
function saveCustomers($customers) {
    $filename = 'customers.json';
    $jsonData = json_encode($customers, JSON_PRETTY_PRINT);
    file_put_contents($filename, $jsonData);
}
?>
