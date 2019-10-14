<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <div class="box box-good">
                    <?php
                        foreach($invoice->result_array() as $data) {
                            $kd_transaksi = $data['kd_transaksi'];
                            $tgl_transaksi = $data['tanggal_bayar'];
                            $tgl_booking = $data['tgl_booking'];
                            $order_id = $data['kd_booking'];
                            $akun = $data['id_user'];
                            $nama_user = $data['nama_user'];
                            $notelp = $data['notelp_user'];
                            $bayar = $data['total_bayar'];
                            $nopol = $data['nopol_user'];
                            $email_user = $data['email_user'];
                            $nama_slot = $data['nama_slot'];
                            $nama_lantai = $data['nama_lantai'];
                            $tarif = $data['tarif_lantai'];
                        }
                    ?>
                    <div class="box-header">
                        <div class="columns is-mobile">
                            <div class="column is-6">
                                <div class="shadow large"><img src="https://paparkir.com/img/logo-name@2x.png"/></div>
                            </div>
                            <div class="column is-6">
                                <p class="has-text-right">Tanggal transaksi : <?php echo $tgl_transaksi;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="columns is-mobile">
                            <div class="column is-7">
                                <div class="content">
                                    Dari
                                    <strong><?php echo $lokasi->nama_lokasi;?></strong><br>
                                    <?php
                                    $alamat = explode(',',$lokasi->alamat_lokasi);
                                    $alamat = implode(',<br>',$alamat);
                                    print_r($alamat);
                                    ?><br>
                                    Phone : <?php echo $lokasi->notelp_lokasi;?><br>
                                    E-mail : <?php echo anchor('mailto:'.$this->session->userdata('email_mitra'),$this->session->userdata('email_mitra'));?>
                                </div>
                            </div>
                            <div class="column is-5">
                                <div class="content has-text-right">
                                    <b>Invoice #<?php echo $kd_transaksi;?></b><br>
                                    <br>
                                    <b>Order ID:</b> #<?php echo $order_id;?><br>
                                    <b>Tanggal masuk:</b> <?php echo tglIndo($tgl_booking);?><br>
                                    <b>Akun:</b> <?php echo $akun;?>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-12">
                                <div class="content">
                                    Kepada
                                    <strong><?php echo $nama_user;?></strong><br>
                                    Phone: <?php echo $notelp;?><br>
                                    E-mail: <?php echo anchor('mailto:'.$email_user,$email_user);?>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-12">
                                <div class="table-is-responsive">
                                    <table width="100%" class="table is-inverse">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nomor Polisi</th>
                                        <th>Slot</th>
                                        <th>Total Hari</th>
                                        <th>Tarif Lantai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $nopol;?></td>
                                            <td><?php echo $nama_slot;?> / <?php echo $nama_lantai;?></td>
                                            <td>
                                            <?php
                                                $booking=new DateTime($tgl_booking);
                                                $today=new DateTime($tgl_transaksi);
                                                $diff=$today->diff($booking);
                                                echo $diff->d; echo " Hari";
                                            ?>
                                            </td>
                                            <td>Rp. <?php echo number_format($tarif);?></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-7">
                                <div class="notification is-success">
                                Invoice ini hanya sebagai bukti traksaksi antara mitra paparkir dengan anda.
                                </div>
                            </div>
                            <div class="column is-5">
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                    <b>Jumlah:</b> <p class="is-pulled-right">Rp. <?php echo number_format($bayar);?></p>
                                    </li>
                                    <li class="list-group-item">
                                    <b>Pajak :</b> <p class="is-pulled-right">-</p>
                                    </li>
                                    <li class="list-group-item">
                                    <b>Total:</b> <p class="is-pulled-right"><b>Rp. <?php echo number_format($bayar);?></b></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="box-footer has-text-right">
                        <button class="button is-link" onclick="window.print()"><i class="material-icons">print</i> Cetak</button>
                    </div>
                </div>
            </div>
        </section>
    </body>