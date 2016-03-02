<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/jqueryui/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/jqueryui/jquery-ui.structure.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/jqueryui/jquery-ui.theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/jqueryui/external/jquery/jquery.js"></script>
        <script src="<?php echo base_url()?>assets/jqueryui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/index.js"></script>

    </head>
    <body>

        <!-- Título de la página -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">GitTeam</a>
            </div>
            <?php
            echo'<div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="' . base_url() . '">Inicio</a></li></ul>
                </div>';
            ?>
        </nav>