
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <form class="card" method="post" action="">
                    <?php
                    foreach($profile->result_array() as $profile) {
                        echo anchor('dashboard','<i class="material-icons">arrow_back</i>','class="button fab"');
                    ?>
                    <label>Ubah Profil</label>
                    <div class="buttons account-btn">
                        <?php
                        echo anchor('login/logout','<i class="material-icons">power_settings_new</i>', 'class="button is-light"');
                        ?>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="text" value="<?php echo $profile['id_user'];?>" disabled>
                            <label class="label">ID Pengguna</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="text" value="<?php echo $profile['nopol_user'];?>" disabled>
                            <label class="label">Nomor Kendaraan</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="email" value="<?php echo $profile['email_user'];?>" disabled>
                            <label class="label">Email</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="text" name="nama" placeholder="Nama lengkap anda" value="<?php echo $profile['nama_user'];?>">
                            <label class="label">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="password" name="password" placeholder="Text input">
                            <label class="label">Password Baru</label>
                        </div>
                    </div>
                    <div class="field">
                        <button class="button is-primary">Tambahkan</button>
                    </div>
                    <?php } ?>
                    <article class="message is-warning">
                        <div class="message-body">
                            Mohon maaf ubahan detail kendaraan dan email belum tersedia untuk versi sistem sekarang. Jika anda tidak ingin merubah password lama, harap isikan password dengan password lama anda.
                        </div>
                    </article>
                </form>
            </div>
        </section>
    </body>