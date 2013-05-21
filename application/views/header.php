<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

.table{
		padding:4px 2px 2px 2px;
		border-top: 1px solid #D0D0D0;
		border-right: 1px solid #D0D0D0;
		border-left: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

.table td{
		padding:4px 2px 2px 2px;
		border-bottom: 1px solid #D0D0D0;
}
	</style>
	<link href="<?php echo base_url('ext/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
</head>
<body>

<div id="container">