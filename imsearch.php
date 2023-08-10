<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html lang="es" dir="ltr">
	<head>
		<title>Buscar - SGC</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="eperez" />
		<meta name="generator" content="Incomedia WebSite X5 Evolution 10.0.2.24 - www.websitex5.com" />
		<meta name="viewport" content="width=993" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?24"></script>
		<script type="text/javascript" src="res/x5engine.js?24"></script>
		<script type="text/javascript">
			x5engine.boot.push(function () { x5engine.utils.imPreloadImages(['menu/index_h.png','menu/iso-9001_h.png','menu/bpm_h.png','menu/agenda_h.png','menu/sgc_site_h.png','menu/sub.png','menu/sub_h.png','menu/sub_f.png','menu/sub_f_h.png','menu/sub_l.png','menu/sub_l_h.png','menu/sub_m.png','menu/sub_m_h.png','res/imLoad.gif','res/imClose.png']); });
		</script>
		
		<script type="text/javascript">x5engine.boot.push('x5engine.imSearch.Load()')</script>
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Buscar - SGC</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
			<a id="imGoToMenu"></a><p class="imHidden">Menu Principal:</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Inicio</span>
							</span>
						</a>
					</li><li id="imMnMnNode3">
						<a href="iso-9001.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>ISO 9001</span>
							</span>
						</a>
					</li><li id="imMnMnNode4">
						<a href="bpm.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>BPM</span>
							</span>
						</a>
					</li><li id="imMnMnNode5">
						<a href="agenda.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Agenda</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Resultados de búsqueda</h2><?php
$search = new imSearch();
$search->search(@$_GET['search'], @$_GET['page']);
?>				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a> | <a href="#imGoToMenu" title="Lea este sitio de nuevo">Regreso al menu principal</a></span>
		
	</body>
</html>
