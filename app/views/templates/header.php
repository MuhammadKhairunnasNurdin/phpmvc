<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $data['judul'] ?></title>
	<link rel="stylesheet" href="<?php echo BASEURL; ?> /css/bootstrap.css">
</head>

<body class="bg-dark">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-secondary">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo BASEURL; ?>">PHP MVC</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
		        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>">Home</a>
				<a class="nav-link" href="<?php echo BASEURL; ?> /mahasiswa">Mahasiswa</a>
				<a class="nav-link" href="<?php echo BASEURL; ?> /about">About</a>
			</div>
		</div>
	</div>
</nav>