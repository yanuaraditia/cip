<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <div class="card">
                    <h5 class="title is-5">Tambah Lokasi</h5>
                    <form method="post" action="Admin/tambah_lokasi">
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="text" name="nama" placeholder="Text input">
                                <label class="label">Nama Lokasi</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="text" name="latitude" placeholder="Text input">
                                <label class="label">Latitude</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="text" name="longitude" placeholder="Text input">
                                <label class="label">Longitude</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="text" name="alamat" placeholder="Text input">
                                <label class="label">Alamat</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="tel" name="notelp" placeholder="Text input">
                                <label class="label">Nomor Telepon</label>
                            </div>
                        </div>
                        <div class="field">
                            <button type="submit" name="tambahlok" class="button is-primary">Tambahkan</button>
                        </div>
                    </form>
                    <hr>
                    <h5 class="title is-5">Tambah Mitra</h5>
                    <form method="post" action="Admin/tambah_mitra">
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="text" name="nama" placeholder="Text input">
                                <label class="label">Nama Mitra</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="email" name="email" placeholder="Text input">
                                <label class="label">Email Mitra</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icon-right">
                                <input class="input" type="password" name="password" placeholder="Text input">
                                <label class="label">Password</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-icons-right">
                                <select class="input" name="lokasi" required>
                                    <?php
                                    foreach($lokasi->result_array() as $tambah){
                                        echo "<option value='".$tambah['kd_lokasi']."'>".$tambah['kd_lokasi']." / ".$tambah['nama_lokasi']."</option>";
                                    }
                                    ?>
                                </select>
                                <span class="icon is-right"><i class="material-icons">drive_eta</i></span>
                                <label class="label">Jenis Kendaraan</label>
                            </div>
                        </div>
                        <div class="field">
                            <button type="submit" class="button is-primary">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>