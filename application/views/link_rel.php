<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8" />
    <title>
    <?php
    if(isset($title)) {
        echo $title;
    }
    else {
        echo "Paparkir";
    }
    ?>
    </title>
    <meta name="description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta name="image" content="https://yanuar.co/img/thumbnail.png" />
    <meta property="og:site_name" content="House of Yanuar Aditia – Junior Front End Web Developer">
    <meta property="og:title" content="House of Yanuar Aditia" />
    <meta property="og:description" content="Yanuar Aditia is a Front-end web Engineer who likes something that lives on the Internet. Interested and focus on native based Web development with the main program language is PHP, and using CSS, HTML, and Javascript to beautify every work." />
    <meta property="og:image" content="https://yanuar.co/img/512x512.png" />
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#109d59" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="House of Yanuar Aditia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500|Titillium+Web:400,600,700|Material+Icons&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'/asset/style.css';?>" />
</head>