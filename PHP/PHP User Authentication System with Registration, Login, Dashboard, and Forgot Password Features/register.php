<?php
include "db.php"; // ডাটাবেস সংযোগ

$success_message = ""; // সফল মেসেজ স্টোর করার জন্য

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $dob = $_POST["dob"];
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // SQL Query
    $sql = "INSERT INTO users (name, dob, email, password) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $dob, $email, $password);

    if ($stmt->execute()) {
        $success_message = "✔ Account created successfully!";
    } else {
        $success_message = "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - My System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .link-section {
            margin-top: 15px;
        }

        .link-section a {
            color: #007BFF;
            text-decoration: none;
        }

        .link-section a:hover {
            text-decoration: underline;
        }

        .message {
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Account</h2>
    
    <?php if ($success_message): ?>
        <p class="message <?= strpos($success_message, '✔') !== false ? 'success' : 'error' ?>">
            <?= $success_message ?>
        </p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="date" name="dob" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>
    <div class="link-section">
        <a href="index.php">Already have an account? Login</a>
    </div>
</div>

</body>
</html>
