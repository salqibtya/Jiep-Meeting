<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url(); ?>assets/images/jiepicon.png' />
        <title><?= APP_NAME ?> &lsaquo; <?php echo $title ?></title>

        <link href="<?php echo base_url(); ?>assets/css/metro.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/metro-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/metro-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/metro-schemes.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/metro.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/docs.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.priceformat.min.js"></script>
    </head>
    <body>
        <div style="background-color: #3C3F41;" class="no-padding" data-role="charm" data-position="left" id="left-charm">
            <ul style="margin-top: 55px;width: 200px;" class="sidebar darcula">
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang') ?>'"><a>
                        <span class="mif-apps icon"></span>
                        <span class="title">semua barang</span>
                        <span class="counter"><?= $jumlah_semua_barang ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/1') ?>'"><a>
                        <span class="mif-power-cord icon"></span>
                        <span class="title">elektronik</span>
                        <span class="counter"><?= $jumlah_elektronik ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/2') ?>'"><a>
                        <span class="mif-tools icon"></span>
                        <span class="title">peralatan</span>
                        <span class="counter"><?= $jumlah_peralatan ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/3') ?>'"><a>
                        <span class="mif-drive-eta icon"></span>
                        <span class="title">kendaraan</span>
                        <span class="counter"><?= $jumlah_kendaraan ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/4') ?>'"><a>
                        <span class="mif-cabinet icon"></span>
                        <span class="title">furniture</span>
                        <span class="counter"><?= $jumlah_furniture ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/5') ?>'"><a>
                        <span class="mif-location-city icon"></span>
                        <span class="title">fixture</span>
                        <span class="counter"><?= $jumlah_fixture ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/6') ?>'"><a>
                        <span class="mif-home icon"></span>
                        <span class="title">household</span>
                        <span class="counter"><?= $jumlah_household ?></span>
                    </a></li>
                <li style="cursor: pointer" onclick="location.href = '<?= base_url('barang/7') ?>'"><a>
                        <span class="mif-more-horiz icon"></span>
                        <span class="title">lainnya</span>
                        <span class="counter"><?= $jumlah_lainnya ?></span>
                    </a></li>
            </ul>
        </div>
        <div class="app-bar" data-role="appbar">
            <a class="app-bar-element" onclick="toggleMetroCharm('#left-charm')">
                <span id="toggle-tiles-dropdown2" class="mif-menu mif-2x"></span>
            </a>

            <div class="app-bar-divider"></div>
            <ul class="app-bar-menu">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li>
                    <a href="" class="dropdown-toggle">Tambah</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="<?= base_url('tambah_barang') ?>">Barang</a></li>
                        <li><a href="<?= base_url('tambah_klasifikasi') ?>">Klasifikasi</a></li>
                        <li><a href="<?= base_url('tambah_turunan_klasifikasi') ?>">Turunan klasifikasi</a></li>
                        <li><a href="<?= base_url('tambah_ruangan') ?>">Ruangan</a></li>
                    </ul>
                </li>
            </ul>

            <div class="app-bar-element place-right">
                <a href="<?=base_url('log/out')?>" class="fg-white"><span class="mif-exit"></span> Keluar</a>
            </div>
        </div>

        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">