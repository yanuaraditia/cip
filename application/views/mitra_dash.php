<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <div class="card">
                    <?php echo $this->session->userdata('email_mitra');?>
                    <div class="account-btn">
                        <?php
                        echo anchor('Mitra','Ubah Profil','class="button is-primary account"');
                        echo anchor('Mitra/logout','<i class="material-icons">power_settings_new</i>','class="button is-light account"');
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </body>