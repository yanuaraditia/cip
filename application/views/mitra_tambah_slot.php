<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <form class="form card" method="post" action="">
                    <?php
                    echo anchor(base_url()."Mitra",'<i class="material-icons">arrow_back</i>','class="button fab"');
                    echo "<label>Tambah Slot</label>";
                    ?>
                    <div class="buttons account-btn">
                        <?php
                        echo anchor('Mitra/tambah_lantai','<i class="material-icons">add</i> Tambah Lantai','class="button is-primary account"');
                        echo anchor('Mitra/logout','<i class="material-icons">power_settings_new</i>','class="button is-light account"');
                        ?>
                    </div>
                    <hr>
                    <h5 class="title is-5">Slot baru untuk <?php echo $lokasi->nama_lokasi;?></h5>
                    <div class="field">
                        <div class="control has-icon-right">
                            <input class="input" type="text" name="nama" placeholder="Text input">
                            <label class="label">Nama Slot</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <select class="input" name="lantai">
                                <?php
                                $lantai = $this->M_mitra->tampil_lantai($lokasi->kd_lokasi);
                                foreach($lantai->result_array() as $lantai) {
                                    echo "<option value=\"".base64_encode($lantai['kd_lantai'])."\">".$lantai['nama_lantai']."</option>";
                                }
                                ?>
                            </select>
                            <label class="label">Pilih Lantai</label>
                        </div>
                    </div>
                    <div class="field">
                        <button class="button is-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </section>
    </body>