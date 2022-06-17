<!doctype html>
<html>

<head>
    <title>404 Page Not Found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <style>
        body {
            width: 99%;
            height: 100%;
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(14, 174, 87, 1) 0%, rgba(12, 116, 117, 1) 90%);
            color: white;
            font-family: sans-serif;
        }

        div {
            position: absolute;
            width: 400px;
            height: 300px;
            z-index: 15;
            top: 45%;
            left: 50%;
            margin: -100px 0 0 -200px;
            text-align: center;
        }

        h1,
        h2 {
            text-align: center;
        }

        h1 {
            font-size: 60px;
            margin-bottom: 10px;
            border-bottom: 1px solid white;
            padding-bottom: 10px;
            font-family: 'DM Serif Display', serif;
            margin-top: 10px;
        }

        h2 {
            margin-bottom: 20px;
        }

        a {
            margin-top: 10px;
            text-decoration: none;
            padding: 10px 25px;
            background-color: ghostwhite;
            color: black;
            margin-top: 20px;
        }

        i {
            font-size: larger;
        }
    </style>
</head>

<body>
    <div>
        <i class="fa-regular fa-face-frown fa-8x"></i>
        <h1>Error 403</h1>
        <h2>Halaman Gagal Dimuat</h2>
        <h3>Anda tidak memiliki hak untuk mengakses halaman ini, silahkan mengakses halaman dengan Login terlebih dahulu</h3>
        <a href='<?= base_url(); ?>'>Kembali</a>
    </div>
</body>
<script src="https://kit.fontawesome.com/03fd47a180.js" crossorigin="anonymous"></script>

</html>