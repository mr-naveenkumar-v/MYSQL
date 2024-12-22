<?php
// Initialize session
session_start();

// Hardcoded credentials for demonstration (replace with a database check in a real application)
$valid_username = "user";
$valid_password = "pass";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Successful login
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #694;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            margin: 0 auto;
            width: 300px;
            font-size: 35px;
        }
        label {
            display: block;
            padding: 10px;
        }
        input {
            width: 100%;
            font-size: 30px;
        }
        button {
            width: 100%;
            background-color: skyblue;
            color: black;
            padding: 10px;
            font-size: 30px;
            margin-top: 10px;
        }
        button:hover {
            background-color: red;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
