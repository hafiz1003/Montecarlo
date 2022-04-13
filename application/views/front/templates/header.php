<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?= base_url('assets/img/') ?>cart.ico">
	<title><?= $judul ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free/css/brands.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/animate.css/animate.min.css'); ?>">
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
	#loading-hal {
		position: fixed;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		margin: auto;
	}
</style>

<body>

	<div id="loading-hal" class="spinner-border text-warning" role="status">
		<span class="sr-only">Loading...</span>
	</div>

	<script>
		var loading = document.getElementById('loading-hal');

		window.addEventListener('load', function() {
			loading.style.display = "none";
		});
	</script>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fadeInDown animated">
		<div class="container">
			<a class="navbar-brand tada animated" href="<?= base_url(); ?>"><i class="fas fa-fw fa-dolly"></i> <strong class="text-warning font-weight-bold">UTS</strong><span class="font-weight-bold text-danger">PEMROGRAMAN SIMULASI</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>