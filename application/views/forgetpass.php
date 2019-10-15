<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="section session login">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop">
                    <form class="form" action="<?php
                    if($this->session->userdata('temp_user')) {
                        echo base_url('login/proses_reset');
                    }
                    else {
                        echo base_url('login/lupasandi');
                    }
                    ?>" method="post">
                        <div class="head-session has-text-centered">
                            <?php echo anchor('MainPage','<img src="https://paparkir.com/img/logo-name%402x.png" class="logo">');?>
                            <h1 class="title is-4">Lupa Sandi</h1>
                            <?php
                            if(isset($error)) {
                                echo "<p class=\"help is-danger\">$error</p>";
                            }
                            ?>
                        </div>
                        <hr>
						<?php
                        if ($this->session->flashdata('info')) {
                        ?>
                            <article class="message is-<?= $this->session->flashdata('class') ?>">
                                <div class="message-body">
                                    <?= $this->session->flashdata('info') ?>
                                </div>
                            </article>
						<?php }
                        else {
                        ?>
                            <article class="message is-info">
                                <div class="message-body">
                                    Silahkan jawab pertanyaan berikut untuk melakukan reset password
                                </div>
                            </article>
                        <?php }?>
                        <?php
                        if($this->session->flashdata('class')=='success') {
                        ?>
                            <div class="field">
                                <div class="control has-icons-right">
                                    <input class="input" type="password" name="password" placeholder="Pisahkan dengan strip (-)" id="textdex" required>
                                    <label class="label">Password Baru</label>
                                    <span class="icon is-right"><i class="material-icons">lock</i></span>
                                </div>
                            </div>
                            <div class="field">
                                <button type="submit" class="button is-primary is-medium is-fullwidth">Reset</button>
                            </div>
                        <?php }
                        else {
                        ?>
                            <div class="field">
                                <div class="control has-icons-right">
                                    <input class="input" type="email" name="email" placeholder="seseorang@contoh.com" id="textdex" required>
                                    <label class="label">Email anda?</label>
                                    <span class="icon is-right"><i class="material-icons">mail_outline</i></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-right">
                                    <input class="input" type="text" name="nopol" placeholder="Pisahkan dengan strip (-)" id="textdex" required>
                                    <label class="label">Nomor polisi anda??</label>
                                    <span class="icon is-right"><i class="material-icons">verified_user</i></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-right">
                                    <input class="input" type="text" name="notelp" placeholder="Gunakan penulisan +62" id="textdex" required>
                                    <label class="label">Nomor Telepon</label>
                                    <span class="icon is-right"><i class="material-icons">local_phone</i></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icons-right">
                                    <select class="input" type="text" name="jenis_kendaraan" required>
                                        <option value=4>Roda Empat</option>
                                        <option value=6>Roda Enam</option>
                                        <option value=8>Lebih dari 6</option>
                                    </select>
                                    <span class="icon is-right"><i class="material-icons">drive_eta</i></span>
                                    <label class="label">Jenis Kendaraan</label>
                                </div>
                            </div>
                            <div class="field">
                                <button type="submit" class="button is-primary is-medium is-fullwidth">Minta Reset</button>
                            </div>
                        <?php }?>
                        <div class="field has-text-centered">
                            <span>Belum punya akun?? <?php echo anchor('daftar','Daftar');?></span>
                        </div>
                    </div>
                </form>                    
            </div>
        </div>
    </section>