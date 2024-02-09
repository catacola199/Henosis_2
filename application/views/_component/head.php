<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>HENOSIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta name="author" content="Themesdesign" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url("assets/images/fav.png")?>" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url("assets/css/pe-icon-7-stroke.css")?>">
    <link rel="stylesheet" id="app-css" href="<?= base_url("assets/css/style.css")?>">
    <link rel="stylesheet" id="color-opt" href="<?= base_url("assets/css/colors/default.css")?>">

    
</head>

<body data-bs-target=".navbar" data-bs-offset="110">
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" data-class="light" class="text-white rounded-end mode-btn" onclick="changeMode(event)">
        <i class="mode-dark mx-auto" data-feather="moon"></i>
        <i class="bx-spin mode-light" data-feather="sun"></i>
    </a>

    <?php $this->load->view('_component/header') ?>