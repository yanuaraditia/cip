<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>House of Yanuar Aditia – Junior Front End Web Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:400,500,700&display=swap" rel="stylesheet">
    <?php
    $text= "<link rel=\"stylesheet\" href=\"".base_url('asset/style.css')."\"/>";
    echo $text;
    $text= "<link rel=\"stylesheet\" href=\"".base_url('asset/ss.css')."\"/>";
    echo $text;
    ?>
</head>
<body>
