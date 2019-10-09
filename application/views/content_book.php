<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<section class="section item-list booking-section">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h3 class="title">
                <?php 
                    foreach($detail_lokasi->result_array() as $detail) :
                        $nama_lokasi = $detail['nama_lokasi'];
                        $alamat_lokasi = $detail['alamat_lokasi'];
                        $lttd_lokasi = $detail['lttd_lokasi'];
                        $lgtd_lokasi = $detail['lgtd_lokasi'];
                    endforeach;
                    echo $nama_lokasi;
                    if(isset($_COOKIE['latt'])&&isset($_COOKIE['long'])) {
                        $km = getDistance($_COOKIE['latt'],$_COOKIE['long'],$lttd_lokasi,$lgtd_lokasi,'Km');
                        $jarak = "<i class=\"material-icons\"></i>".$km." km";
                        echo anchor('https://maps.google.com/maps?q=-7.7900392,110.3654116',$jarak,'class="button is-primary bok is-light" target="_blank"');
                    }
                    else {
                        $jarak = "<i class=\"material-icons\"></i> Arah";
                        echo anchor('https://www.google.com/maps?q='.$lttd_lokasi.','.$lgtd_lokasi,$jarak,'class="button is-primary bok is-light" target="_blank"');
                    }
                ?>
                </h3>
                <h5 class="subtitle is-5"><?php echo $alamat_lokasi;?></h5>
                <div class="lantai">
                    <ul class="list">
                        <?php
                        foreach($list_lantai->result_array() as $data) {
                        ?>
                        <li class="list-item">
                            <h5><?php echo $data['nama_lantai'];?> (<small>Rp. <?php echo number_format($data['tarif_lantai']);?></small>)</h5>
                            <ul class="list-slot">
                                <?php
                                $dat = $this->db->query('SELECT * FROM slot WHERE kd_lantai = '.$data['kd_lantai']);
                                foreach($dat->result_array() as $slot) {
                                    echo "<li>".anchor('book/confirm?kd='.$slot['kd_slot'],$slot['nama_slot'])."</li>";
                                }
                                ?>
                            </ul>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).title = <?php echo $nama_lokasi;?>;
</script>