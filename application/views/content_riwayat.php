<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<section class="section item-list history">
    <div class="container">
        <div class="card">
            <div class="card-content">
                <h3 class="title">Riwayat Transaksi</h3>
                <ul class="list">
                    <?php
                    $row = $riwayat->row();
                    if(isset($row)) {
                        foreach($riwayat->result_array() as $data) {
                    ?>
                        <li class="list-item">
                            <span>#<?php echo $data['kd_transaksi'];?></span>
                            <span>Rp. <?php echo $data['total_bayar'];?></span>
                            <span><?php echo tglIndo($data['tanggal_bayar']);?></span>
                        </li>
                    <?php
                        }
                    }
                    else {
                        echo "<h3 class=\"title is-3\">Belum ada transaksi</h3>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>