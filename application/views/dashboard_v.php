<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <body>
        <section class="section dashboard">
            <div class="container">
                <div class="card">
                    <h3 class="title is-3">Your Name</h3>
                    <h2>Hai, <?php echo $this->session->userdata("email_user"); ?></h2>
                    <a class="button is-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </div>
            </div>
        </section>
    </body>