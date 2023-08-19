<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Product Submission Form">
    <meta name="author" content="thureindev">
    <meta name="keywords" content="product, submission, form">

    <title>Product Submission</title>

    <link rel="stylesheet" href="./public/styles/style.css">
</head>

<body>
    <h1>Submit a New Product</h1>
    <p>Please fill out the form below to submit a new product.</p>

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

// Check form submission
if (isset($_POST['submit'])) {

    // ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- ----------- 
    // ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- ----------- 
    // Commenting the following code block as it is a template placeholder.
    // The connection to the database and actual product creation has been omitted for this demo-only app.
    //
    // *** Since Heroku has removed its ClearDB free tier *** and investing in a paid option is not necessary for this demonstration,
    // the code will simply print a hardcoded success message instead of actually creating a new product.
    //
    // *** Special Note to the team at primal.co.th: ***
    //
    // Thank you for reviewing this code. I hope you find this message informative and that it provides insight into the decision-making process behind this demonstration.
    // Please feel free to reach out with any questions or if further explanation is needed.
    // ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- ----------- 
    // ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- -----------  ---------- ----------- 

    /*
    // For database connection
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "products_db";

    try {
        // Create connection using PDO, a PHP extension to connect to databases, a secure way of interacting with the db
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set error handling to throw exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and bind parameters
        // htmlentitites() sanitizes user input to prevent XSS attacks
        $name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
        $description = htmlentities($_POST['description'], ENT_QUOTES, 'UTF-8');
        // filter_var() sanitizes user input to prevent SQL injection attacks
        $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $stmt = $conn->prepare("INSERT INTO products (name, description, price) VALUES (:name, :description, :price)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);

        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
    */

    // Hardcoded success message
    echo "New product created successfully";
}

?>