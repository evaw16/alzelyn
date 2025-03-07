<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 20/10/2018
 * Time: 7:24
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    <link rel="stylesheet" href="resources/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <div id="sidebar">
        <div class="sidebar-title">
            <div class="sidebar-avatar-text">Admin</div>
        </div>
        <ul class="sidebar-nav">
            <li class="active"><a href="?controller=home&action=homeAdmin"><i class="fa fa-fw fa-home"></i><span>Home</span></a></li>
            <li><a href="?controller=transaksi&action=showTransaksiAdmin"><i class="fa fa-fw fa-shopping-bag"></i><span>Transaksi</span></a></li>
        </ul>
    </div>
    <div id="main-panel">
        <div id="top-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand text-size-24" href="v_penjual.php"><i class="fa fa-home"></i> Home</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="logout.php">
										<span class="fa-stack">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-power-off fa-stack-1x"></i>
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="content">
            <div class="container-fluid">
                <?php
                foreach ($list as $item) {
                    ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span class="text-size-22"><i class="fa fa-clone space-right-10"></i>Produk Terlaris</span>
                                <p class="break-top-10 text-size-16"><?=$item['nama_produk']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <span class="text-size-22"><i class="fa fa-star-half-o space-right-10"></i>Nama Penjual</span>
                                <p class="break-top-10 text-size-16"><?=$item['nama']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <span class="text-size-22"><i class="fa fa-star-half-o space-right-10"></i>Jumlah yang Terjual</span>
                                <p class="break-top-10 text-size-16"><?=$item['jumlah']?></p>
                            </div>
                        </div>
                    </div>
                </div>



                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
