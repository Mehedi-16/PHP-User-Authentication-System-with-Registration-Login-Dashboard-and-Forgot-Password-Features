<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
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
        .dashboard {
            width: 100%;
            max-width: 600px;
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
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        ul li {
            margin: 10px 0;
        }
        ul li a {
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
        }
        ul li a:hover {
            text-decoration: underline;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #FF5733;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .logout-btn:hover {
            background-color: #ff3d00;
        }
        .db-section {
            margin-top: 20px;
            padding: 15px;
            background-color: #eef;
            border-radius: 5px;
            text-align: left;
        }
        .query-box {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .run-query-btn {
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .run-query-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2>Welcome, <?php echo $_SESSION["user"]; ?>!</h2>
    
    <div class="db-section">
        <h3>Oracle Database</h3>
        <ul>
            <li><a href="oracle/create_db.php">Create Database</a></li>
            <li><a href="oracle/view_tables.php">View Tables</a></li>
            <li><a href="oracle/backup.php">Backup Database</a></li>
        </ul>
        <textarea class="query-box" placeholder="Run SQL Query"></textarea>
        <button class="run-query-btn">Run Query</button>
    </div>
    
    <div class="db-section">
        <h3>MySQL Database</h3>
        <ul>
            <li><a href="mysql/create_db.php">Create Database</a></li>
            <li><a href="mysql/view_tables.php">View Tables</a></li>
            <li><a href="mysql/backup.php">Backup Database</a></li>
        </ul>
        <textarea class="query-box" placeholder="Run SQL Query"></textarea>
        <button class="run-query-btn">Run Query</button>
    </div>
    
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

</body>
</html>
