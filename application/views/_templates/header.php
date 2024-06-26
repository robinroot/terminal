<!doctype html>
<html lang="en" class="dark-theme">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?= base_url()?>assets/images/logo-icon.jpg" type="image/jpg" />
	<!--plugins-->
	<link href="<?= base_url()?>assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet"/>
	<link href="<?= base_url()?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="<?= base_url()?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?= base_url()?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?= base_url()?>assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?= base_url()?>assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?= base_url()?>assets/css/app.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/dark-theme.css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/css/semi-dark.css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/css/header-colors.css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/css/winbox-modern.css" />
	<link rel="preload" as="script" href="https://rawcdn.githack.com/nextapps-de/winbox/0.2.82/dist/winbox.bundle.min.js">

	<title><?php echo $titles;?></title>
	<style type="text/css">
                    * {background-color: black}
                </style>
</head>

<body onload="info_noti()" style="background-color: black;">
	<!--wrapper-->
	<div class="wrapper">
		<!--start header wrapper-->	
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand gap-3">
						<div class="topbar-logo-header d-none d-lg-flex">
							
							<div class="">
								<h4 class="logo-text">NAKED|FX</h4>
							</div>
						</div>
						<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
						
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
  							<div class="tradingview-widget-container__widget"></div>
  
  							<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
							  {
							  "symbols": [
							    {
							      "description": "GOLD",
							      "proName": "OANDA:XAUUSD"
							    },
							    {
							      "description": "GBPUSD",
							      "proName": "FX:GBPUSD"
							    },
							    {
							      "description": "EURUSD",
							      "proName": "FX:EURUSD"
							    },
							    {
							      "description": "DXY",
							      "proName": "CAPITALCOM:DXY"
							    }
							  ],
							  "showSymbolLogo": true,
							  "isTransparent": true,
							  "displayMode": "regular",
							  "colorTheme": "dark",
							  "locale": "en"
							}
  							</script>
						</div>
						<!-- TradingView Widget END -->
						  
						
					</nav>
				</div>
				<div class="mobile-toggle-menu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"><i class='bx bx-menu'></i></div>
			</header>
			<!--end header -->