<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSRU API</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	#body {
		margin: 0 15px 0 15px;
	}
	p.footer {
		text-align: right;
		font-size: 12px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		font-weight:bold;
	}
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.fa-heart {
		color: #f44336;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>MAJOR</h1>
	<div id="body">
		<p>Getting major by faculty ID by passing faculty ID after / (You can find faculty ID <a href="<?php echo base_url(); ?>faculty">here</a>)</p>
		<code><a href="<?php echo base_url(); ?>major/faculty/2" target="_blank"><?php echo base_url(); ?>major/faculty/2</a></code>
	</div>
	<p class="footer">Made with <i class="fa fa-heart"></i> by Mongkon Srisin</p>
</div>
</body>
</html>