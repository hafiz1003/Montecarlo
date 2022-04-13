	<!-- Content -->

	<div class="container">
		<div class="row mt-3 fadeInUp animated">
			<div class="col-md-8 mb-3">
				<div class="card border-dark">
					<div class="card-header bg-dark text-light text-center font-weight-bold"><i class="fas fa-fw fa-calculator"></i> APLIKASI PREDIKSI PENJUALAN DENGAN MONTE CARLO</div>
					<div class="card-body">
						<form action="<?= base_url('hitung'); ?>" method="post" class="">
							<div class="row justify-content-center">
								<div class="col-md-5 ml-2">
									<div class="card border-dark">
										<div class="card-header bg-dark text-white text-center">
											<i class="fas fa-fw fa-hand-holding-usd"></i> Data Permintaan
										</div>
										<div class="card-body">
											<div class="form-group">
												<input type="text" name="per1" placeholder="permintaan 1" class="form-control">
												<?= form_error('per1', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per2" placeholder="permintaan 2" class="form-control">
												<?= form_error('per2', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per3" placeholder="permintaan 3" class="form-control">
												<?= form_error('per3', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per4" placeholder="permintaan 4" class="form-control">
												<?= form_error('per4', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per5" placeholder="permintaan 5" class="form-control">
												<?= form_error('per5', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per6" placeholder="permintaan 6" class="form-control">
												<?= form_error('per6', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per7" placeholder="permintaan 7" class="form-control">
												<?= form_error('per7', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per8" placeholder="permintaan 8" class="form-control">
												<?= form_error('per8', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per9" placeholder="permintaan 9" class="form-control">
												<?= form_error('per9', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="per10" placeholder="permintaan 10" class="form-control">
												<?= form_error('per10', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
									</div>

								</div>
								<div class="col-md-5 ml-2">
									<div class="card border-dark">
										<div class="card-header bg-dark text-white text-center">
											<i class="fas fa-fw fa-shopping-basket"></i> Data Frekuensi
										</div>
										<div class="card-body">
											<div class="form-group">
												<input type="text" name="fr1" placeholder="Frekuensi 1" class="form-control">
												<?= form_error('fr1', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr2" placeholder="Frekuensi 2" class="form-control">
												<?= form_error('fr2', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr3" placeholder="Frekuensi 3" class="form-control">
												<?= form_error('fr3', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr4" placeholder="Frekuensi 4" class="form-control">
												<?= form_error('fr4', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr5" placeholder="Frekuensi 5" class="form-control">
												<?= form_error('fr5', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr6" placeholder="Frekuensi 6" class="form-control">
												<?= form_error('fr6', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr7" placeholder="Frekuensi 7" class="form-control">
												<?= form_error('fr7', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr8" placeholder="Frekuensi 8" class="form-control">
												<?= form_error('fr8', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr9" placeholder="Frekuensi 9" class="form-control">
												<?= form_error('fr9', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="text" name="fr10" placeholder="Frekuensi 10" class="form-control">
												<?= form_error('fr10', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row justify-content-center mt-3">
								<div class="col-md-6">
									<button type="submit" class="btn btn-dark btn-lg mt-2 btn-block"><i class="fas fa-fw fa-calculator"></i> HITUNG</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card border-dark">
					<div class="card-header bg-dark text-white text-center font-weight-bold"><i class="fas fa-fw fa-user-cog"></i> USER GUIDE</div>
					<div class="card-body">
						<div class="alert alert-danger" role="alert">
							<h4 class="alert-heading">PENTING !!!</h4>
							<p>Aplikasi ini hanya dapat digunakan untuk memprediksi penjualan dengan jumlah hari selama 10 hari atau bulan selama 10 bulan</p>
							<hr>
							<h5>Input / Masukan :</h5>
							<p class="mb-0">Data Permintaan merupakan data permintaan produk</p>
							<p class="mb-0">Data Frekuensi merupakan banyaknya permintaan produk</p>
						</div>
					</div>
				</div>
				<div class="card border-dark mt-3">
					<div class="card-header bg-dark text-center text-white font-weight-bold"><i class="fas fa-fw fa-user"></i> AUTHOR</div>
					<div class="card-body">
						<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" data-interval="5000">
									<img src="<?= base_url('assets/img/hafiz1.jpg'); ?>" class="d-block w-100" alt="..." width="">
								</div>
								<div class="carousel-item" data-interval="2000">
									<img src="<?= base_url('assets/img/hafiz2.jpg'); ?>" class="d-block w-100" alt="...">
								</div>
								<div class="carousel-item">
									<img src="<?= base_url('assets/img/hafiz3.jpg'); ?>" class="d-block w-100" alt="...">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<p class="mt-1">
							My name is <span class="badge badge-primary">Naufal Al Hafizh.A
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>