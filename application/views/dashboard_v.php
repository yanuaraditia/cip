<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <div class="card">
                    <?php
                    foreach($profile->result_array() as $dashboard) {
                    ?>
                    <a class="button fab" href="mainpage"><i class="material-icons">arrow_back</i></a><label>Dashboard : <?php echo $dashboard['nama_user'];?></label>
                    <div class="account-btn">
                        <a class="button is-primary account"><strong><?php echo $this->session->userdata("email_user"); ?></strong></a>
                        <a href="login/logout" class="button is-light"><i class="material-icons">power_settings_new</i></a>
                    </div>
                    <hr>
                    <ul class="list book">
                        <?php
                        $q = $this->db->query("SELECT booking.kd_booking, booking.tgl_booking, slot.nama_slot, lantai.tarif_lantai, lantai.nama_lantai, lokasi.nama_lokasi,lokasi.lttd_lokasi, lokasi.lgtd_lokasi, booking.status FROM booking LEFT JOIN slot ON booking.kd_slot = slot.kd_slot LEFT JOIN lantai ON slot.kd_lantai = lantai.kd_lantai JOIN lokasi ON lantai.kd_lokasi=lokasi.kd_lokasi WHERE id_user = '".$dashboard['id_user']."' and status != 2");
                        $row = $q->row();
                        ?>
                        <?php
                        if(isset($row)) {
                            $status = $row->status;
                            if(isset($status)) {
                                if($status==0) {
                                    echo "<li class=\"list-item yellow\">Menunggu check-in</li>";
                                }
                                elseif($status==1) {
                                    echo "<li class=\"list-item green\">".$row->nama_lokasi."</li>";
                                    $masuk = New DateTime($row->tgl_booking);
                                    $sekarang = New DateTime(date('Y-m-d'));
                                    $total_hari = $masuk->diff($sekarang);
                                    $total_bayar = $row->tarif_lantai*($total_hari->days+1);
                                    echo "<li class=\"list-item price\"><i class=\"material-icons\">payment</i>Rp. ".$total_bayar."</li>";
                                    echo "<li class=\"list-item slot\"><i class=\"material-icons\">dashboard</i>".$row->nama_slot." / ".$row->nama_lantai."</li>";
                                    echo "<li class=\"list-item slot\"><i class=\"material-icons\">drive_eta</i>".$dashboard['nopol_user']." / ".$dashboard['jml_roda_kendaraan']." Roda</li>";
                                }
                                else {
                                }
                            }
                        }
                        else {
                            echo "<li class=\"list-item empty\">Silahkan pilih lokasi parkir terlebih dulu</li>";
                        }
                        ?>
                    </ul>
                    <article class="message is-success">
                        <div class="message-body">
                            Untuk melakukan proses checkout dan checkin silahkan untuk datang ke petugas parkir yang ada dilokasi parkir. Jika nomor polisi dan jenis kendaraan berdasarkan roda sesuai maka anda di ijinkan checkout.
                        </div>
                    </article>
                    <ul class="list history">
                        <?php 
                        $arr = $this->db->query("SELECT * FROM booking WHERE id_user = '".$dashboard['id_user']."' AND status = 2 LIMIT 5");
                        foreach($arr->result_array() as $history) {
                            echo "<li class=\"list-item\"><i class=\"material-icons\">history</i><span>#".$history['kd_booking']."</span><span>".tglIndo($history['tgl_booking'])."</span><span>".$history['kd_slot']."</span></li>";
                        }
                        ?>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </section>
    </body>