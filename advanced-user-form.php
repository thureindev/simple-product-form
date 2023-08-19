<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Submission</title>
</head>

<body>
    <h1>Submit a New Product</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "products_db";

    // Create connection using PDO (recommended for better error handling)
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Validate and sanitize input data

        //  //  Normally use FILTER_SANITIZE_STRING as it removes all HTML tags from a string, and removes or encodes special characters.
        //  //  But it is deprecated in PHP 5.3.0 since I'm using PHP 8, I use htmlentities() instead.
        $name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
        $description = htmlentities($_POST['description'], ENT_QUOTES, 'UTF-8');

        $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        // Prepare an SQL statement
        $stmt = $conn->prepare("INSERT INTO products (name, description, price) VALUES (:name, :description, :price)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);

        // Execute the prepared statement
        $stmt->execute();

        echo "New product created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
}
?>