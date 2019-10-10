<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="section session login">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop">
                    <form class="form" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                        <div class="head-session has-text-centered">
                            <?php echo anchor('MainPage','<img src="https://paparkir.com/img/logo-name%402x.png" class="logo">');?>
                            <h1 class="title is-4">Masuk paparkir</h1>
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
                                <label class="label">Email</label>
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
                        <div class="field has-text-centered">
                            <span>Belum punya akun?? <?php echo anchor('daftar','Daftar');?></span>
                        </div>
                    </div>
                </form>                    
            </div>
        </div>
    </section>