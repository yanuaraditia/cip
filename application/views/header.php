<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>House of Yanuar Aditia – Junior Front End Web Developer</title>
    <meta name="description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta name="image" content="https://yanuar.co/img/thumbnail.png" />
    <meta property="og:site_name" content="House of Yanuar Aditia – Junior Front End Web Developer">
    <meta property="og:title" content="House of Yanuar Aditia" />
    <meta property="og:description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta property="og:image" content="https://yanuar.co/img/512x512.png" />
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="https://yanuar.co/img/thumbnail.png" />
    <meta name="twitter:site" content="@yanuar_aditia" />
    <meta name="twitter:creator" content="@yanuar_aditia" />
    <meta name="twitter:creator" content="@yanuar_aditia" />
    <meta name="twitter:title" content="House of Yanuar Aditia" />
    <meta name="twitter:description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta name="theme-color" content="#109d59" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="House of Yanuar Aditia – Junior Front End Web Developer">
    <meta name="apple-mobile-web-app-status-bar-style" content="#109d59">
    <meta name="apple-mobile-web-app-title" content="House of Yanuar Aditia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="https://yanuar.co/img/48x48.png" />
    <link rel="manifest" href="https://yanuar.co/manifest.webmanifest" />
    <link rel="alternate" href="https://yanuar.co/" hreflang="en-US">
    <link rel="canonical" href="https://yanuar.co/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:400,500,700&display=swap" rel="stylesheet">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <?php
    $text= "<link rel=\"stylesheet\" href=\"".base_url('asset/style.css')."\"/>";
    echo $text;
    $text= "<link rel=\"stylesheet\" href=\"".base_url('asset/ss.css')."\"/>";
    echo $text;
    ?>
</head>
<body>
    <section class="section search">
        <div class="container">
            <div class="field">
                <div class="control">
                    <input class="input is-large" type="text" placeholder="Cari lokasi parkir">
                </div>
            </div>
        </div>
    </section>
    <header class="navbar" id="navigation" role="navigation" aria-label="main navigation">
        <div class="container">
            <ul class="navbar-start">
                <li class="navbar-item is-active"><a href="#">Cari Parkir</a></li>
                <li class="navbar-item"><a href="#">Riwayat</a></li>
                <li class="navbar-item"><a href="#">Transaksi Berhasil</a></li>
            </ul>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="<?php echo base_url('/register');?>">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="<?php echo base_url('/login');?>">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>