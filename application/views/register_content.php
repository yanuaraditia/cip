<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
    <section class="section session login">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop">
                    <form class="form" action="daftar/proses_daftar" method="post">
                        <div class="head-session has-text-centered">
                            <?php echo anchor('mainpage','<img src="https://paparkir.com/img/logo-name%402x.png" class="logo">');?>
                            <h1 class="title is-4">Registrasi</h1>
                            <?php
                            if(isset($error)) {
                                echo "<p class=\"help is-danger\">$error</p>";
                            }
                            ?>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control control has-icons-right">
                                <input class="input" type="text" name="nama" placeholder="Contoh Eko Sudarsono" required>
                                <span class="icon is-right"><i class="material-icons">perm_identity</i></span>
                                <label class="label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control control has-icons-right">
                                <input class="input" type="email" name="email" placeholder="namaanda@email.com" required>
                                <span class="icon is-right"><i class="material-icons">mail_outline</i></span>
                                <label class="label">Email</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="password" name="password" placeholder="Gunakan kata sandi rumit" required>
                                <span class="icon is-right"><i class="material-icons">lock_open</i></span>
                                <label class="label">Password</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="tel" name="notelp" placeholder="Gunakan awalan 0 ex 0287" required>
                                <span class="icon is-right"><i class="material-icons">local_phone</i></span>
                                <label class="label">Nomor Telepon</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="text" name="nopol" placeholder="Contoh : AA-3576-AD" required>
                                <span class="icon is-right"><i class="material-icons">local_phone</i></span>
                                <label class="label">Nomor Polisi</label>
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
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span>Saya menyetujui <a href="privacy">kebijakan privasi</a></span>
                                </label>
                            </div>
                            </div>

                            <div class="field">
                                <button class="button is-primary is-medium is-fullwidth">Daftar</button>
                            </div>
                            <div class="field has-text-centered">
                                <span>Sudah punya akun? <a href="login">Masuk</a></span>
                            </div>
                        </div>
                    </form>                    
            </div>
        </div>
    </section>