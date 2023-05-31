<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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

        .login-panel {
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

        .login-panel h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .login-panel form div {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .login-panel label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .login-panel input {
            width: 100%;
            padding: 10px;
            border-radius: 30px;
            border: 2px solid #0071A6;
        }

        .login-panel button {
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

        .login-panel a {
            color: #0071A6;
            text-decoration: none;
            text-align: right;
            display: block;
            margin-top: 10px;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 20px;
            width: calc(60% - 0px);
            height: 100%;
            object-fit: cover;
            z-index: 0;
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
            .login-panel {
                width: 90%;
            }
        }
        
    </style>
    <?php include 'header.php'; ?>
</head>
<body>
    <div class="container">
        <header>
            <!-- Header contents -->
        </header>

        <div class="content">
            <div class="quote">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="login-panel">
                <h2 style="text-align: center;">Hello<br> Welcome!</h2>
                <form method="POST" action="login.php">
                    <div>
                        <label for="email">Email address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email Address">
                    </div>
                    <div>
                        <label for="pwd">Password:</label>
                        <input type="password" id="pwd" name="password" placeholder="Password">
                    </div>
                    <button type="submit">Login</button>
                    <button type="button" onclick="location.href='Registration.php'">Signup</button> <!-- Add signup button -->
                </form>
                <?php if (!empty($error)) : ?>
                    <div>
                        <p><?php echo $error; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <footer>
            <!-- Footer contents -->
        </footer>
    </div>
    <?php include 'footer.html'; ?>

</body>
</html>
