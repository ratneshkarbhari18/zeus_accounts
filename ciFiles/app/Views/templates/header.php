<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/app.min.css"); ?>">
    <title><?php echo $title; ?> | CSC Accounting</title>
</head>
<body>
    <?php if(isset($_SESSION["logged_in"])): ?>
    <header id="app-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">CSC Accounting</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("settings-page"); ?>">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("logout-exe"); ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php endif; ?>