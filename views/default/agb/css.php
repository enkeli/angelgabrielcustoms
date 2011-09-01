<?php
	$imgurl = elgg_get_site_url() . '/mod/angelgabrielcustoms/images';
	
?>

.agb-social li {
	float: left;
	margin: 20px;
	
}

.agb-social span {
	position: absolute;
	background: #000;
	padding: 10px;
	
	text-align: center;
	vertical-align: center;
	color: #fff;
	font-weight: bold;
	
	border-radius: 10px;
	
	display: none;
}

.agb-social li:hover span {
	display: block;
}

.agb-name img {
	position: absolute;
	width: 50px;
	margin: 10px 0 0 15px;
	z-index: 100;
	border-radius: 5px;
	box-shadow: 2px 2px 1px black;
}

.agb-name span {
	position: absolute;
	width: 600px;
	height: 70px;
	margin: 5px 0 0 370px;
	z-index: 100;
	
	color: white;
}

.agb-site {
	background: rgba(0,0,0, .5);
	position: absolute;
	margin-top: 15px;
	width: 300px;
	padding: 10px;
	border-radius: 5px;
	border: 1px solid white;
	
	text-align: right;
	font-weight: bold;
	font-size: 20px;
	color: white;
	
	z-index: 50;
	
}

.agb-site:hover {
	text-decoration: none;
}

body {
	background: #002131 url( <?php echo $imgurl; ?>/bg.png) repeat-y;
	overflow: hidden;
}