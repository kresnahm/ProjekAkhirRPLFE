<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiksi - Filkom Skripsi</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/menu-button.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/searchbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bukajasa_2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.sidebarBtn').click(function() {
                $('.sidebar').toggleClass('active');
                $('.sidebarBtn').toggleClass('toggle');
                $('.main').toggleClass('active1');
            })
        })
    </script>
    <title></title>
    <style type="text/css">
        h1 {
            position: absolute;
            left: 830px;
            bottom: 250px;
            top: 270px;
            z-index: 2;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- <div class="main"> -->
    <div class="header">
        <form class="search-bar" action="index.html" method="post">
            <li><input class="search-bar" type="text" name="" placeholder="Type to search. . .">
            </li>
        </form>
        <nav>
            <ul>
                <!-- <li><img src="./img/user.png" alt="user"></li> -->
                <li>
                    <div class="dropdown">
                        <a class="dropbtn">
                            <span><img src="<?= base_url('assets/'); ?>img/user.png" alt="user"></span></a>
                        <div class="dropdown-content">
                            <a href="#">Profile</a>
                            <a href="#">Buka jasa rental</a>
                            <a href="#">log out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="content">
            <div class="row">
                <div class="bayar">
                    <form class="form-bayar" action="<?= base_url('home'); ?>" method="post">
                        <p style="font-size : 24px;">Permintaan anda akan segera diproses</p>
                        <p style="font-size : 24px;">Silahkan kembali ke halaman awal</p>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <input type="submit" name="back" value="Back to Home" class="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>