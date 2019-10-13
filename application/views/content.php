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
                                $slot_kosong = $this->M_lokasi->cek_slot_kosong($data['kd_lokasi']);
                                $kosong  = $slot_kosong->num_rows();
                                ?>
                                <li><i class="material-icons">directions_car</i> Slot Tersedia : <?php echo $kosong;?></li>
                                <?php
                                $tarif = $this->M_lokasi->cek_tarif($data['kd_lokasi']);
                                $range = $tarif->row_array();
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
                                $jarak = "<i class=\"material-icons\">near_me</i>".$km." km";
                                echo anchor('https://maps.google.com/maps?q='.$data['lttd_lokasi'].','.$data['lgtd_lokasi'],$jarak,'class="button is-light is-medium is-fullwidth"');
                            }
                            else {
                                $jarak = "<i class=\"material-icons\">near_me</i> Arah";
                                echo anchor('https://www.google.com/maps?q='.$data['lttd_lokasi'].','.$data['lgtd_lokasi'],$jarak,'class="button is-light is-medium is-fullwidth"');
                            }
                            ?>
                        </span>
                    </footer>
                </div>
            </div>
            <?php }?>
        </div>
        <asside class="paging">
            <nav class="pagination is-rounded is-medium" role="navigation" aria-label="pagination">
            <ul class="pagination-list">
                <?php
                for($i=1;$i<=$jml_lokasi;$i++)
                    if ($i != $this->input->get('page')){
                        echo "<li>".anchor("?page=$i",$i,'class="pagination-link" aria-label="Page 1" aria-current="page"')."</li>";
                }
                else{ 
                    echo "<li>".anchor("?page=$i",$i,'class="pagination-link is-current" aria-label="Page 1" aria-current="page"')."</li>";
                }
                ?>
            </ul>
            </nav>
        </asside>
    </div>
</section>