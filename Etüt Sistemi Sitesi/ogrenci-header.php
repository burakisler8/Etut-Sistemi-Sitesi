<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Etüt Sistemi</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/global/plugins.dark.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

</head>

<style type="text/css">
    @media (min-width: 992px) {
        .header-fixed.toolbar-fixed .wrapper {
            padding-top: 55px !important;
        }
    }

    @media (max-width: 991.98px) {
        .header-fixed.toolbar-fixed .wrapper {
            padding-top: 65px !important;
        }
    }


    .table thead tr th {
        font-weight: 900;
        border-bottom: 1px solid gray;
    }

    .table tr th, .table tr td {
        vertical-align: middle;
    }

    .just-print {
        display: none !important;
    }

    @media print {
        .no-print, .no-print * {
            display: none !important;
        }


        .justprint {
            display: flex !important;
        }

        body {
            margin: 0;
            box-shadow: none;
            opacity: 1;
        }

        a, b, h1, h2, h3, table, tr, td, th {
            opacity: 1;
        }

        .table {
            font-size: 12px !important;
        }

        .table th, .table tr {
            padding: 3px !important;
        }

        html, body {
            height: 100% !important;
            padding-top: 0 !important;
            margin-top: 0 !important;
            page-break-before: always;
            position: relative;
            overflow: hidden;
            background: #ffe !important;
        }

        body {
            margin: 0px;
        }

        body {
            margin-top: 0px !important;
        }
    }


</style>

<body id="kt_body"
      class="dark-mode header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

<div class="d-flex flex-column flex-root">

    <div class="page d-flex flex-row flex-column-fluid">

        <div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_mobile_toggle">

            <?php include 'ogrenci-menu.php'; ?>
        </div>


        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <div id="kt_header" style="" class="header align-items-stretch">
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                             id="kt_aside_mobile_toggle">
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                              fill="black"></path>
										<path opacity="0.3"
                                              d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                              fill="black"></path>
									</svg>
								</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.php" class="d-lg-none">
                            Tedarik Radarı
                        </a>
                    </div>
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                 data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                                 data-kt-drawer-overlay="true"
                                 data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                 data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                                 data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                 data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <div id="kt_content_container" class="container-fluid">