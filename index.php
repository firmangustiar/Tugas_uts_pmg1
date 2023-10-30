<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: #333333;
        }

        .contain {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }

        .contain a {
            text-decoration: none;
        }

        .contain div {
            padding: 15px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }

        .barang {
            background-color: #ff5733;
            /* Warna Merah */
            color: #ffffff;
        }

        .kategori {
            background-color: #ffcc00;
            /* Warna Kuning */
            color: #333333;
        }

        .member {
            background-color: #33cc33;
            /* Warna Hijau */
            color: #ffffff;
        }

        .penjualan {
            background-color: pink;
            /* Warna Hijau */
            color: #ffffff;
        }

        .transaksi {
            background-color: #3399ff;
            /* Warna Biru */
            color: #ffffff;
        }

        .user {
            background-color: #9933ff;
            /* Warna Ungu */
            color: #ffffff;
        }

        .view_report {
            background-color: gray;
            /* Warna Ungu */
            color: #ffffff;
        }

        footer {
            text-align: center;
            color: #333333;
        }

        footer {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>MENU PEMOGRAMAN 1</h1>
        </header>
        <div class="contain">

            <a href="tampil_member.php">
                <div class="member">MEMBER</div>
            </a>

            <a href="tampil_penjualan.php">
                <div class="penjualan">PENJUALAN</div>
            </a>

            <a href="tampil_transaksi.php">
                <div class="transaksi">TRANSAKSI</div>
            </a>

            <a href="tampil_kategori.php">
                <div class="kategori">KATEGORI</div>
            </a>

            <a href="tampil_barang.php">
                <div class="barang">BARANG</div>
            </a>

            <a href="tampil_user.php">
                <div class="user">USER</div>
            </a>

            <a href="view_report.php">
                <div class="view_report">VIEW REPORT</div>
            </a>
        </div>
        <footer>
            Created by Firman Gustiar
        </footer>
    </div>
</body>

</html>