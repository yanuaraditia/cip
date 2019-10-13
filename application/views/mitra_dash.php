<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <div class="card">
                    <a href="http://localhost/cip/MainPage" class="button fab"><i class="material-icons">arrow_back</i></a>
                    <?php echo $this->session->userdata('email_mitra');?>
                    <label>Dashboard : Yanuar Aditia</label>
                    <div class="account-btn">
                        <?php
                        echo anchor('Mitra','Ubah Profil','class="button is-primary account"');
                        echo anchor('Mitra/logout','<i class="material-icons">power_settings_new</i>','class="button is-light account"');
                        ?>
                    </div>
                    <hr>
                    <ul class="list history">
                        <?php
                        foreach($history->result_array() as $riwayat) {
                            echo '<li class="list-item"><i class="material-icons">history</i><span>'.$riwayat['kd_transaksi'].'</span></li>';
                        }
                        ?>
                        <li class="list-item"><i class="material-icons">history</i><span>#3423456</span><span>02 Agustus 2019</span><span>2</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>