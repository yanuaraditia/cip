<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section class="section session login">
        <div class="container">
            <div class="columns">
                <div class="column is-4-desktop">
                    <form class="form" action="" method="post">
                        <div class="head-session has-text-centered">
                            <?php echo anchor('mainpage','<img src="https://paparkir.com/img/logo-name%402x.png" class="logo">');?>
                            <h1 class="title is-4">Masuk paparkir</h1>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control control has-icons-right">
                                <input class="input" type="e-mail" placeholder=" " id="textdex">
                                <label class="label">Email</label>
                            </div>
                            <p class="help is-danger">This email is invalid</p>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <input class="input" type="e-mail" placeholder="Password">
                                <label class="label">Password</label>
                                <span class="icon is-right"><i class="material-icons">lock_open</i></span>
                            </div>
                            <p class="help is-success">This username is available</p>
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