<!doctype html>
<html lang="en" data-theme-mode="green">

<head>
    <meta charset="utf-8">
    <title>Sistem Pengurusan dan Pemantauan Tanaman Kenaf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    <!-- <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .accg {
            background: url('assets/images/bgg7.png') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-top-left {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }

        .logo-top-right {
            display: flex;
            justify-content: flex-end;
            /* Ubah ikut keperluan */
            align-items: center;
        }


        .logo-top-right {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1000;
        }

        .text-left-bawah-logo h1,
        .text-left-bawah-logo-satu h5 {
            color: #fff;
            text-align: left;
            margin-left: 5%;
        }

        .text-left-bawah-logo h1 {
            font-size: 40px;
            margin-top: 120px;
            font-weight: bold;
        }

        .text-left-bawah-logo-satu h5 {
            font-size: 20px;
            margin-top: 10px;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 5px;
            height: calc(2.5em + 0.75rem + 2px);
            padding: 0.75rem 1rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .logo-top-left {
            position: relative;
        }

        .animated-text {
            font-size: 18px;
            font-weight: bold;
            animation: slideIn 3s forwards;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style> -->
</head>

<body>
    <div class="logo-top-left">
        <a href="">
            <img src="assets/images/logo-white.png" alt="Sistem Pengurusan dan Pemantauan Tanaman Kenaf" height="60">
        </a>
        <div class="text-left-bawah-logo">

            <h1>
                <div class="animated-text">
                    SELAMAT DATANG KE LOG MASUK SEBAGAI STAF
                </div>
                <span>SISTEM PENGURUSAN DAN</span><br>
                <span>PEMANTAUAN TANAMAN KENAF</span>
            </h1>
        </div>
        <div class="text-left-bawah-logo-satu">
            <h5>
                <span>Sistem ini bertujuan daftar penanam,</span><br>
                <span>pemantauan tanaman dan pemberian insentif</span>
                <br><br>
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LOG MASUK</button>
            </h5>
        </div>
    </div>
    <div class="logo-top-right">
        <a href="">
            <img src="assets/images/headlktn.png" alt="Logo LKTN" height="30" class="responsive-img">
        </a>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content form-container">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">LOG MASUK SISTEM SPPTK(STAF LKTN)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="loginproses.php" method="post" onSubmit="return validateForm()">
                        <div class="mb-3">
                            <label class="form-label" for="username">USERNAME</label>
                            <input type="text" class="form-control" name="uname" id="uname" placeholder="Masukkan username...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="userpassword">KATALALUAN</label>
                            <input type="password" class="form-control" id="passw" name="passw" placeholder="Masukkan katalaluan...">
                        </div>
                        <p>Log masuk sebagai penanam. Sila tekan <a href="loginPenanam.php">link ini</a>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button name="submit" id="submit" value="submit" class="btn btn-primary waves-effect waves-light">LOG MASUK</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="accg"></div>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>