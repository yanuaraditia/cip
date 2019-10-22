<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>House of Yanuar Aditia – Junior Front End Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500|Titillium+Web:400,600,700|Material+Icons&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'/asset/style.css';?>" />
</head>
<body>
    <section class="section session login">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop">
                    <form class="form" action="<?php echo base_url('Mitra_login/aksi_login'); ?>" method="post">
                        <div class="head-session has-text-centered">
                            <?php echo anchor('MainPage','<img src="https://paparkir.com/img/logo-name%402x.png" class="logo">');?>
                            <h1 class="title is-4">Masuk mitra</h1>
                            <?php
                            if(isset($error)) {
                                echo "<p class=\"help is-danger\">$error</p>";
                            }
                            ?>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="email" name="email" placeholder="seseorang@contoh.com" id="textdex" required>
                                <label class="label">Email Mitra</label>
                                <span class="icon is-right"><i class="material-icons">mail_outline</i></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="password" name="password" placeholder="Password" required>
                                <label class="label">Password</label>
                                <span class="icon is-right"><i class="material-icons">lock_open</i></span>
                            </div>
                        </div>
                        <div class="field">
                                <button class="button is-primary is-medium is-fullwidth">Masuk</button>
                        </div>
                    </div>
                </form>                    
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>