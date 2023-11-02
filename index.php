<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title> PEMOGRAMAN 3.COM</title>
    <style>
        body {
            font-family:times, sans-serif;
            background-color: #009900;
            margin: 4;
            padding: 0;
            }

.container {
    text-align: center;
    padding: 30;
    }

header {
    background-color: #00FF99;
    color: WITH;
    padding: 20px
    }

header h1 {
    margin: 5;
    }


.contain {
    display: flex;
    flex-wrap: wrap;
    justifly-content: center;
    gap: 20px;
    padding: 20px;
    }

a {
    text-decoration: none;
}

.btn {
    background-color: #00FF99;
    color: BLACK;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    text-align: center;
    transition: background-color 0.3s;
    }

.btn:hover {
    background-color: #00CC00;
    }

</style>
</head>
<body>
    <div class="container">
    <header>
    <h1>MENUUUUUUUUUUUU</H1>
    </header>
    <div class="contain">
        <a href="tampil_barang.php">
        <button class="btn">BARANG</button>
        </a>

        <a href="tampil_kategori.php">
        <button class="btn">KATEGORI</button>
        </a>

        <a href="tampil_member.php">
        <button class="btn">MEMBER</button>
        </a>

        <a href="tampil_penjualann.php">
        <button class="btn">PENJUALAN</button>
        </a>

        <a href="tampil_transaksi.php">
        <button class="btn">TRANSAKSI</button>
        </a>

        <a href="tampil_user.php">
        <button class="btn">USER</button>
        </a>

        <a href="view_report.php">
        <button class="btn">REPORT</button>
        </a>
</div>
<footer>
    PARARUNTEN
</footer>
</div>
</body>
</html>


