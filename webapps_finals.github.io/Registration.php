<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: radial-gradient(circle at 0% 0%, #17415d, #91cfd4);
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .content {
            display: flex;
            flex-direction: row;
            justify-content: center; /* Center the content horizontally */
            align-items: center;
            flex-grow: 1;
            width: 100%;
        }

        .quote {
            position: absolute;
            left: 5%;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5em;
            text-align: center;
            width: 90%;
        }

        .registration-panel {
            background-color: #94BDC6;
            color: #0071A6;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 30%;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto; /* Center the panel horizontally */
        }

        .registration-panel h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .registration-panel form div {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .registration-panel label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .registration-panel input {
            width: 100%;
            padding: 10px;
            border-radius: 30px;
            border: 2px solid #0071A6;
        }

        .registration-panel button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #0071A6;
            color: white;
            cursor: pointer;
            width: 60%;
            margin: 0 auto; /* Center the button horizontally */
            margin-top: 20px;
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .quote {
                font-size: 1.2em;
                width: 100%;
                left: 0;
                padding: 0 20px;
            }
        }

        @media (max-width: 480px) {
            .registration-panel {
                width: 90%;
            }
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert the data into the table
    $sql = "INSERT INTO login_info (firstname, lastname, email, username, password)
            VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    // Display success message using JavaScript popup
    echo '<script>alert("Registration successful");</script>';
} else {
    // Display error message using JavaScript popup
    echo '<script>alert("Error: ' . $conn->error . '");</script>';
}
}
?> 
<?php include 'header.php'; ?>

<div class="container">
    <header>
        <!-- Header contents -->
    </header>

    <div class="content">
        <div class="registration-panel">
            <h2>Create an Account</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Enter Your First Name">
                </div>
                <div>
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Enter Your Last Name">
                </div>
                <div>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email Address">
                </div>
                <div>
                    <label for="username">Nickname:</label>
                    <input type="text" id="username" name="username" placeholder="Enter Your Username">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div>
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <footer>
        <!-- Footer contents -->
    </footer>
</div>
<?php include 'footer.html'; ?>

</body>
</html>
