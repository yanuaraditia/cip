<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<section class="section item-list">
    <div class="container">
        <div class="columns is-multiline">
            <?php
            foreach($list_lokasi->result_array() as $data) {
            ?>
            <div class="column is-12 is-4-desktop">
                <div class="card">
                    <a href="<?php echo base_url('/book?id='.base64_encode($data['kd_lokasi']));?>">
                    <div class="card-content">
                        <h3 class="title"><?php echo $data['nama_lokasi'];?></h3>
                        <h5 class="subtitle is-5"><?php echo $data['alamat_lokasi'];?></h5>
                        <div class="detail">
                            <ul class="menu-list">
                                <?php
                                $slot = $this->db->query("SELECT slot.kd_slot FROM slot JOIN lantai ON slot.kd_lantai = lantai.kd_lantai JOIN lokasi on lantai.kd_lokasi = lokasi.kd_lokasi LEFT JOIN booking ON slot.kd_slot = booking.kd_slot WHERE lokasi.kd_lokasi = ".$data['kd_lokasi']." AND booking.kd_slot IS NULL OR lokasi.kd_lokasi = ".$data['kd_lokasi']." AND booking.kd_slot = 2");
                                $kosong  = $slot->num_rows();                                
                                ?>
                                <li><i class="material-icons">directions_car</i> Slot Tersedia : <?php echo $kosong;?></li>
                                <?php
                                $range = $this->db->query('SELECT min(tarif_lantai) as min, max(tarif_lantai) as max FROM lantai WHERE kd_lokasi='.$data['kd_lokasi']);
                                $range = $range->row_array();
                                ?>
                                <li><i class="material-icons">monetization_on</i> Tarif : Rp. <?php echo number_format($range['min']);?> - Rp <?php echo number_format($range['max']);?></li>
                            </ul>
                        </div>
                    </div>
                    </a>
                    <footer class="card-footer">
                        <span class="card-footer-item">
                            <?php
                            echo anchor(base_url('/book?id='.base64_encode($data['kd_lokasi'])),'Book','class="button is-primary bok is-medium is-fullwidth"');
                            ?>
                        </span>
                        <span class="card-footer-item">
                            <?php
                            if(isset($_COOKIE['latt'])&&isset($_COOKIE['long'])) {
                                $km = getDistance($_COOKIE['latt'],$_COOKIE['long'],$data['lttd_lokasi'],$data['lgtd_lokasi'],'Km');
                                $jarak = "<i class=\"material-icons\"></i>".$km." km";
                                echo anchor('https://maps.google.com/maps?q=-7.7900392,110.3654116',$jarak,'class="button is-light is-medium is-fullwidth"');
                            }
                            else {
                                $jarak = "<i class=\"material-icons\"></i> Arah";
                                echo anchor('https://www.google.com/maps?q='.$data['lttd_lokasi'].','.$data['lgtd_lokasi'],$jarak,'class="button is-light is-medium is-fullwidth"');
                            }
                            ?>
                        </span>
                    </footer>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>