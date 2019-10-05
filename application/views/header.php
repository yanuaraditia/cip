<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Paparkir : Kemudahan parkir dalam genggaman</title>
    <meta name="description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta name="image" content="https://yanuar.co/img/thumbnail.png" />
    <meta property="og:site_name" content="House of Yanuar Aditia – Junior Front End Web Developer">
    <meta property="og:title" content="House of Yanuar Aditia" />
    <meta property="og:description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta property="og:image" content="https://yanuar.co/img/512x512.png" />
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#109d59" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="House of Yanuar Aditia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500|Titillium+Web:400,600,700|Material+Icons&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <section class="section search" id="search">
        <div class="container">
            <div class="field">
                <div class="control">
                    <input class="input is-large" type="text" placeholder="Cari lokasi parkir">
                    <button class="button"><i class="material-icons">search_outline</i></button>
                </div>
            </div>
        </div>
    </section>
    <header class="navbar" id="navigation" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <?php echo anchor('#','<span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>','role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample"');?>
            </div>
            <div id="navbarBasicExample" class="navbar-menu">
                <ul class="navbar-start">
                    <?php
                    $is_active = " is-active";
                    $vec = array('','','');
                    switch($bar) {
                        case 1:
                            $vec[0] = $is_active;
                            break;
                        case 2:
                            $vec[1] = $is_active;
                            break;
                    }
                    ?>
                    <li class="navbar-item<?php echo $vec['0'];?>"><?php echo anchor('mainpage','Cari Lokasi');?></li>
                    <li class="navbar-item<?php echo $vec['1'];?>"><?php echo anchor('riwayat','Riwayat Transaksi');?></li>
                </ul>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <?php
                            if($this->session->userdata('status') == "login") {
                                echo anchor('dashboard',"<img src=\"https://yanuar.co/img/48x48.png\"/><strong>".$this->session->userdata('email_user')."</strong>",'class="button is-primary account"');
                            }
                            else {
                                echo anchor('daftar','<strong>Registrasi</strong>','class="button is-primary"');
                                echo anchor('login','<strong>Masuk</strong>','class="button is-light"');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>