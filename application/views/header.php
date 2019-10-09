<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>
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
                                echo anchor('dashboard',"<strong>".$this->session->userdata('email_user')."</strong>",'class="button is-primary account"');
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