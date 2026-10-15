<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: form.html");
    exit;
}

$conn = new mysqli("localhost", "root", "", "craftycorner");
if ($conn->connect_error) {
    die("Database error");
}

$name    = trim($_POST["name"] ?? "");
$phone   = trim($_POST["phone"] ?? "");
$address = trim($_POST["address"] ?? "");
$product = trim($_POST["product"] ?? "");

if (!preg_match('/^[0-9]{10}$/', $phone) || $name === "" || $address === "" || $product === "") {
    die("Please fill all fields correctly.");
}
$stmt = $conn->prepare("INSERT INTO orders (name, phone, address, product) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $address, $product);

if ($stmt->execute()) {
    echo "Order received! Thank you, " . htmlspecialchars($name) . ".";
} else {
    echo "Something went wrong.";
}
$stmt->close();
$conn->close();