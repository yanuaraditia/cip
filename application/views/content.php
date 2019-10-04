<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
// Function latt
function getDistance($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi') 
{ 
	$theta = $longitude1 - $longitude2; 
	$distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)))  + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta))); 
	$distance = acos($distance); 
	$distance = rad2deg($distance); 
	$distance = $distance * 60 * 1.1515; 
	switch($unit) 
	{ 
		case 'Mi': break; 
		case 'Km' : $distance = $distance * 1.609344;
	} 
	return (round($distance,2)); 
}
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
                                <li><i class="material-icons">directions_car</i> Kosong : 20</li>
                                <?php
                                $range = $this->db->query('SELECT min(tarif_lantai) as min, max(tarif_lantai) as max FROM lantai WHERE kd_lokasi='.$data['kd_lokasi']);
                                $range = $range->row_array();
                                ?>
                                <li><i class="material-icons">monetization_on</i> Tarif : Rp. <?php echo $range['min'];?> - Rp <?php echo $range['max'];?></li>
                            </ul>
                        </div>
                    </div>
                    </a>
                    <footer class="card-footer">
                        <span class="card-footer-item">
                            <a href="" class="button is-primary bok is-medium is-fullwidth">
                                Book
                            </a>
                        </span>
                        <span class="card-footer-item">
                            <?php
                            if(isset($_COOKIE['latt'])&&isset($_COOKIE['long'])) {
                                $km = getDistance($_COOKIE['latt'],$_COOKIE['long'],$data['lttd_lokasi'],$data['lgtd_lokasi'],'Km');
                                $jarak = "<i class=\"material-icons\"></i>".$km."Km";
                                echo anchor('https://maps.google.com/maps?q=-7.7900392,110.3654116',$jarak,'class="button is-light is-medium is-fullwidth"');
                            }
                            else {
                                $jarak = "<i class=\"material-icons\"></i> Arah";
                                echo anchor('#',$jarak,'class="button is-light is-medium is-fullwidth"');
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