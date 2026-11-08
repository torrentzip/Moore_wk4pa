<?php
require_once __DIR__ . "/database.php";

function get_products() {
    $conn = get_connection();
    $result = $conn->query("SELECT ProductNo, `Name`, `Type` FROM products ORDER BY ProductNo");
    $products = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $products;
}