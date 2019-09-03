<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
    mdc.ripple.MDCRipple.attachTo(document.querySelector('.foo-button'));
    const listEl = document.querySelector('.mdc-drawer .mdc-list');
    const mainContentEl = document.querySelector('.main-content');

    listEl.addEventListener('click', (event) => {
    drawer.open = false;
    });

    document.body.addEventListener('MDCDrawer:closed', () => {
    mainContentEl.querySelector('input, button').focus();
    });
    </script>
</body>