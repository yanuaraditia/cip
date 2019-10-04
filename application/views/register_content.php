<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
    <section class="section session login">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop">
                    <form class="form" action="" method="post">
                        <div class="head-session has-text-centered">
                            <a href="MainPage"><img src="https://paparkir.com/img/logo-name%402x.png" class="logo"></a>
                            <h1 class="title is-4">Registrasi</h1>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control control has-icons-right">
                                <input class="input" type="e-mail" placeholder="Contoh Eko Sudarsono">
                                <span class="icon is-right"><i class="material-icons">perm_identity</i></span>
                                <label class="label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control control has-icons-right">
                                <input class="input" type="e-mail" placeholder="namaanda@email.com">
                                <span class="icon is-right"><i class="material-icons">mail_outline</i></span>
                                <label class="label">Email</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="e-mail" placeholder="Gunakan kata sandi rumit">
                                <span class="icon is-right"><i class="material-icons">lock_open</i></span>
                                <label class="label">Password</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="tel" placeholder="Gunakan awalan +62">
                                <span class="icon is-right"><i class="material-icons">local_phone</i></span>
                                <label class="label">Nomor Telepon</label>
                            </div>
                        </div>
                            <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span>Saya menyetujui <a href="#">syarat dan ketentuan</a></span>
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