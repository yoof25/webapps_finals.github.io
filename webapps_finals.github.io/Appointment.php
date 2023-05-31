<!DOCTYPE html>
<html>
<head>
    <title>Appointment Form</title>
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
            justify-content: flex-end;
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

        .appointment-panel {
            background-color: #94BDC6;
            color: #0071A6;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 30%;
            max-width: 400px;
            margin-left: auto;
            margin-right: 20px;
        }

        .appointment-panel h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .appointment-panel form div {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .appointment-panel label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .appointment-panel input[type="text"],
        .appointment-panel input[type="email"],
        .appointment-panel input[type="date"],
        .appointment-panel input[type="tel"] {
            width: 100%;
            padding: 10px;
            border-radius: 30px;
            border: 2px solid #0071A6;
        }

        .appointment-panel button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #0071A6;
            color: white;
            cursor: pointer;
            width: 60%;
            margin: 0 auto; /* Center the button horizontally */
            margin-top: 20px;
            margin-left: 40px;
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
            .appointment-panel {
                width: 90%;
            }
        }
    </style>
</head>
<?php include 'header.php'; ?>
<body>
    <div class="container">
        <div class="content">

            <div class="appointment-panel">
                <h2 style="text-align: center;">Make an Appointment</h2>
                <form method="POST" action="appointment.php">
                    <div>
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
                    </div>
                    <div>
                        <label for="mobile">Mobile Number:</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
                    </div>
                    <div>
                        <label for="email">Email address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div>
                        <label for="appointment-date">Appointment Date:</label>
                        <input type="date" id="appointment-date" name="appointment-date" required>
                    </div>
                    <div>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter Address" required>
                    </div>
                    <button type="submit">Submit</button>
                </form>
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
                    } else {
                    }

                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve the form data
                        $name = $_POST["name"];
                        $mobile = $_POST["mobile"];
                        $email = $_POST["email"];
                        $appointmentDate = $_POST["appointment-date"];
                        $address = $_POST["address"];

                        // Insert the data into the table
                        $sql = "INSERT INTO appointments (name, mobile, email, appointment_date, address)
                                VALUES ('$name', '$mobile', '$email', '$appointmentDate', '$address')";
                        if ($conn->query($sql) === TRUE) {
                            echo '<script>alert("SUCCESSFUL PARE, SEE YOU!");</script>';
                        } else {
                            echo '<script>alert("Error inserting data: ' . $conn->error . '");</script>';
                        }

                    }
                ?>

            </div>
        </div>
    </div>
</body>
<?php include 'footer.html'; ?>

</html>
