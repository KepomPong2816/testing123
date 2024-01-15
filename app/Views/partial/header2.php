<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>
        <?= esc($title) ?>
    </title>
    <style>
        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
        }

        .down {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
        }

        .below {
            padding-top: 100vh;
        }

        .landing-container {
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            box-sizing: border-box;
            height: 100vh;
        }

        .form-container {
            flex: 1;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.9);
            /* Latar belakang transparan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .plan li {
            list-style: none; /* Remove default list styles */
            position: relative;
            padding-left: 0px; /* Adjust padding as needed */
            padding-right: 30px;
            color: black; /* Set the text color for the text inside li */
        }

        /* Set the marker color to white */
        .plan li::before {
            content: '\2022'; /* Unicode character for a bullet point */
            color: white; /* Set the marker color to white */
            position: absolute;
            left: 0;
        }

        .landing-container h1,
        .landing-container button {
            position: relative;
            z-index: 3;
        }

        #background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            z-index: 1;
        }

        #down {
            margin-top: 100%;
            padding-bottom: 25%;
        }

        .plan-title h1 {
            display: flex;
            padding-top: 50px;
            justify-content: center;
            margin: 0 auto;
            color: black;
        }

        .plans-container {
            display: flex;
            flex-wrap: wrap;
            /* Menambahkan wrap agar plan dapat turun ke baris berikutnya jika tidak cukup ruang */
            justify-content: center;
            /* Menengahkan plan secara horizontal */
            align-items: stretch;
            max-width: 1000px;
            background-color: #fff;
            padding: 20px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .plan {
            flex: 1;
            border: 2px solid #3498db;
            border-radius: 10px;
            /* Menambahkan radius yang lebih besar */
            padding: 20px;
            /* Menambahkan padding yang lebih besar */
            margin: 10px;
            /* Memberikan margin untuk ruang di sekitar setiap plan */
            text-align: center;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .plan h2 {
            color: #3498db;
        }

        .plan p {
            color: #555;
        }

        .buy-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="p-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3" style="background-color: white;">
        <a href="/"><img src="<?= base_url('assets/image/logo.png') ?>" alt="" srcset=""
                class="d-flex align-items-center">
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">Calendar</a>
            </li>
            <li><a href="/event" class="mx-5 nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">My
                    Competition</a></li>
            <li><a href="/late" class="nav-link px-2 link-dark fw-bold" style="font-size: 24px !important;">News</a>
            </li>
        </ul>
        <div class="text-end">
            <?php
            if (isset($nama)) {
                echo '<li class="mx-5 nav-link px-2 link-dark fw-bold" style="font-size: 24px !important; ">';
                echo '<a href="/logout">';
                echo '<p style="margin-bottom: 0px; color: #dc3545;">Hi  ' . $nama . '</p>';
                // echo "<img src=" . base_url("img/expert/mentor0.png") . ">";
                echo '</a>';
                echo '</li>';
            } else {
                echo '<a href="/login"><button type="button" class="btn btn-primary fw-bold">SIGN IN</button></a>';
            }
            ?>
        </div>
    </header>