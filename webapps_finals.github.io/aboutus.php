<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #94bdc6;
            margin: 0;
            padding: 0;
        }

        .header {
            background: transparent;
            text-align: center;
            font-size: 30px;
            letter-spacing: 20px;
        }

        header h1 {
            color: white;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .images {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: 50%;
        }

        .images img {
            margin: 5%;
            max-width: 80%;
            height: auto;
            border: none;
            outline: none;
            box-shadow: 0 0 0 5px skyblue, 0 0 0 10px white;
            border-radius: 10px;
        }

        .text {
            padding: 5%;
            font-size: 35px;
            flex-basis: 50%;
        }

        .text p {
            margin: 0;
        }

        .circle {
            width: 250px;
            height: 250px;
            background-color: #6d949d;
            border-radius: 50%;
            position: absolute;
            z-index: -1;
        }

        .circle1 {
            top: 100px;
            left: 50px;
        }
  
        .circle2 {
            top: -100px;
            right: -75px;
            width: 500px;
            height: 500px;
        }
  
        .circle3 {
            bottom: -50px;
            left: -50px;
            width: 300px;
            height: 300px;
        }

        @media (max-width: 850px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .text {
                font-size: 21px;
            }
        }
    </style>
</head>
<?php include 'header.php'; ?>
<body>
<header class="header">
    <h1>ABOUT US</h1>
</header>

<div class="container">
    <div class="images">
        <img src="images/AbUs1.png">
        <img src="images/AbUs2.jpg">
    </div>
    <div class="text">
        <p>Established in 1968 at Makati by Dr. Gloria Mayor, eventually passed down to the current attending dentist Dr.
            Odette Marcelo-Mayor, The establishment currently has four employees including the attending dentist. <br>
            <br>Mayor Dental Clinic is a trusted service that comes with the approval of people of all ages due to the
            establishment’s lengthy operating history, the establishment provides reliable services in general dentistry
            and orthodontics that help keep the smiles of people shining and complete.</p>
    </div>
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
</div>
<?php include 'footer.html'; ?>

</body>
</html>
