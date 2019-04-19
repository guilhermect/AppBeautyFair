<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>App BeautyFair</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('public/painel/img/favicon.ico'); ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/bootstrap.min.css'); ?>">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/font-awesome.min.css'); ?>">

    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/owl.theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/owl.transitions.css') ?>">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/meanmenu/meanmenu.min.css'); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/animate.css') ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/normalize.css') ?> ">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/scrollbar/jquery.mCustomScrollbar.min.css') ?>">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/jvectormap/jquery-jvectormap-2.0.3.css') ?>">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/notika-custom-icon.css') ?>">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/wave/waves.min.css') ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/main.css') ?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/style.css'); ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/responsive.css') ?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url('public/painel/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('public/painel/css/jquery.dataTables.min.css') ?>">
     <!-- Sweet Alert JS
		============================================ -->
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        
        <!--<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>-->
        <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-functions.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.8.5/firebase.js"></script>

        <script>

            //BASE PATH
            //const base_path='http://localhost/appbeautyfair/';
            const base_path='http://dkmahomologar.ga/appbeautyfair/';

            // Initialize Firebase
            
            var config = {
              apiKey: "AIzaSyANHQUh5_murAHkZGsxKEqd4qPMAoLKSPU",
              authDomain: "beauty-fair-214318.firebaseapp.com",
              databaseURL: "https://beauty-fair-214318.firebaseio.com",
              projectId: "beauty-fair-214318",
              storageBucket: "beauty-fair-214318.appspot.com",
              messagingSenderId: "283508537411"
                
            };
            firebase.initializeApp(config);
            const db = firebase.firestore();
            db.settings({ timestampsInSnapshots: true });

            const storage = firebase.storage();

            
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
         
         @media (min-width: 1281px) {
          .header-top-menu .nav.notika-top-nav li .search-dd {
              left: -871px;
              width: 884px;
          }
          .header-top-menu .nav.notika-top-nav li .search-dd .search-input{
            margin:10px;
          }
         }

         th {
            text-align: center;
          }
        
          

          .mean-container .mean-nav {
              margin-bottom: 10px !important;
          }
        
        </style> 
</head>

<body>
