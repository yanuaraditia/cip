<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <form class="form card" method="post" action="">
                    <?php
                    echo anchor(base_url()."Mitra",'<i class="material-icons">arrow_back</i>','class="button fab"');
                    echo "<label>Tambah Lantai</label>";
                    ?>
                    <div class="buttons account-btn">
                        <?php
                        echo anchor('Mitra/tambah_slot','<i class="material-icons">add</i> Tambah Slot','class="button is-primary account"');
                        echo anchor('Mitra/logout','<i class="material-icons">power_settings_new</i>','class="button is-light account"');
                        ?>
                    </div>
                    <hr>
                    <h5 class="title is-5">Slot baru untuk <?php echo $lokasi->nama_lokasi;?></h5>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="text" name="nama" placeholder="Text input" requred>
                            <label class="label">Nama Lantai</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="number" name="number" placeholder="Text input" requred>
                            <label class="label">Tarif lantai</label>
                        </div>
                    </div>
                    <div class="field">
                        <button class="button is-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </section>
    </body>