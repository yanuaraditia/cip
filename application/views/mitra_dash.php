<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard mitra">
            <div class="container">
                <div class="card">
                    <?php
                    echo anchor(base_url()."Mitra",'<i class="material-icons">home</i>','class="button fab"');
                    echo "<label>".$lokasi->nama_lokasi."</label>";
                    ?>
                    <div class="buttons account-btn">
                        <?php
                        echo anchor('Mitra/tambah_slot','<i class="material-icons">add</i> Tambah Slot','class="button is-primary account"');
                        echo anchor('logout','<i class="material-icons">power_settings_new</i>','class="button is-light account"');
                        ?>
                    </div>
                    <hr>
                    <h5 class="title is-5">Kendaraan di Parkiran</h5>
                    <ul class="list order-list">
                        <?php
                        $cekantrian = $antrian->num_rows();
                        if($cekantrian >= 1) {
                            foreach($antrian->result_array() as $kerjaan) {
                                if($kerjaan['status'] == 0){
                                    echo '<li class="list-item wait">
                                    <span class="button fab"><i class="material-icons">directions_car</i></span>
                                    <span class="nopol">'.$kerjaan['nopol_user'].' ('.$kerjaan['jml_roda_kendaraan'].' Roda)</span>
                                    <span>'.$kerjaan['nama_lantai'].' - '.$kerjaan['nama_slot'].'</span>
                                    <span>Menunggu check-in</span>
                                    <div class="tag buttons">
                                        <button onclick="window.location=\''.base_url().'Mitra/kelola?act=checkin&id='.base64_encode($kerjaan['kd_booking']).'\'" class="button is-primary"><i class="material-icons">check</i></button></span>
                                        <button
                                        onclick="konfirmasi'.$kerjaan['kd_booking'].'()" class="button is-light"><i class="material-icons">close</i></button></span>
                                    </div>
                                    <script>
                                    function konfirmasi'.$kerjaan['kd_booking'].'(){
                                        var tanya = confirm("Apakah anda yakin akan membatalkan checkin kendaraan ini ini ??");
                                        if(tanya === true) {
                                            window.location=\''.base_url().'Mitra/kelola?act=cancel&id='.base64_encode($kerjaan['kd_booking']).'\'
                                        }
                                    }
                                    </script>
                                    </li>';
                                }
                                else {
                                    echo '<li class="list-item on-park" onclick="window.location=\''.base_url().'Mitra/kelola?act=bayar&id='.base64_encode($kerjaan['kd_booking']).'\'">
                                    <span class="button fab"><i class="material-icons">check</i></span>
                                    <span class="nopol">'.$kerjaan['nopol_user'].' ('.$kerjaan['jml_roda_kendaraan'].' Roda)</span>
                                    <span>'.$kerjaan['nama_lantai'].' - '.$kerjaan['nama_slot'].'</span>
                                    <span>Sejak : '.tglIndo($kerjaan['tgl_booking']).'</span>
                                    <span class="tag is-success is-medium">Sejak : '.tglIndo($kerjaan['tgl_booking']).'</span>
                                    </li>';
                                }
                            }
                        }
                        else {
                            echo "Antrian kosong";
                        }
                        ?>
                    </ul>
                    <hr>
                    <h5 class="title is-5">Riwayat</h5>
                    <ul class="list history">
                        <?php
                        $cekhistory = $history->num_rows();
                        if($cekhistory >= 1) {
                            foreach($history->result_array() as $riwayat) {
                                echo '<li class="list-item" onclick="window.location=\''.base_url().'Mitra/invoice?id='.base64_encode($riwayat['kd_booking']).'\'">
                                <i class="material-icons">history</i>
                                <span>#'.$riwayat['kd_transaksi'].'</span>
                                <span>Book : #'.$riwayat['kd_booking'].'</span>
                                <span><i class="material-icons">person_outline</i>'.$riwayat['id_user'].'</span>
                                <span><i class="material-icons">input</i>'.tglIndo($riwayat['tgl_booking']).'</span>
                                <span><i class="material-icons">payment</i>'.tglIndo($riwayat['tanggal_bayar']).'</span>
                                <span><i class="material-icons">attach_money</i>Rp. '.number_format($riwayat['total_bayar']).'</span></li>';
                            }
                        }
                        else {
                            echo "<li class=\"list-item\">Belum ada riwayat transaksi</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </section>
    </body>