<div class="row justify-content-center mt-3">
	<div class="col-md-11">
		<div class="card">
			<div class="card-header bg-dark text-white text-center font-weight-bold"><i class="fas fa-fw fa-poll"></i> HASIL PREDIKSI PENJUALAN DENGAN METODE MONTE CARLO <button class="btn btn-sm btn-primary float-left" onclick="goBack()"><i class="fas fa-fw fa-arrow-circle-left"></i> Kembali</button></div>
			<script>
				function goBack(){
					window.history.back();
				}
			</script>
			<div class="card-body">
				<div class="alert alert-danger">
					<strong>Perhatian!!!</strong> Bandingkan <strong>Angka Acak</strong> dengan <strong>Interval</strong> ,kemudian jika sudah ditemukan. maka lihat <strong>Data Permintaan</strong> dan sesuaikan dengan Data Interval yang sudah <strong>Ditemukan</strong> tadi. Selanjutnya <strong>Jumlah Semua Data Permintaan</strong> yang sudah ditemukan tadi kemudian di bagi dengan <strong>Jumlah Permintaan Terbanyak.</strong>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-2">
						<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Permintaan</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per1'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per2'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per3'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per4'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per5'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per6'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per7'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per8'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per9'); ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Permintaan1" name="pd1" value="<?= $this->input->post('per10'); ?>" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Probabilitas Distribusi</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pr1; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 2" name="pd2" value="<?= $pr2; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 3" name="pd3" value="<?= $pr3; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 4" name="pd4" value="<?= $pr4; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 5" name="pd5" value="<?= $pr5 ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 6" name="pd6" value="<?= $pr6 ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 6" name="pd6" value="<?= $pr7 ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 6" name="pd6" value="<?= $pr8 ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 6" name="pd6" value="<?= $pr9 ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 6" name="pd6" value="<?= $pr10 ?>" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Probabilitas Kumulatif</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk1; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk2; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk3; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk4; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk5; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk6; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk7; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk8; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk9; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Probabilitas 1" name="pd1" value="<?= $pk10; ?>" disabled>
						</div>
					</div>
					<div class="col-md-2">
						<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Interval</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="0 - <?= number_format($pk1, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk1+0.01,2,'','.') .' - '. number_format($pk2, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk2+0.01,2,'','.') .' - '. number_format($pk3, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk3+0.01,2,'','.') .' - '. number_format($pk4, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk4+0.01,2,'','.') .' - '. number_format($pk5, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk5+0.01,2,'','.') .' - '. number_format($pk6, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk6+0.01,2,'','.') .' - '. number_format($pk7, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk7+0.01,2,'','.') .' - '. number_format($pk8, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk8+0.01,2,'','.') .' - '. number_format($pk9, 2, '','.' );?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Interval 1" name="pd1" value="<?= number_format($pk9+0.01,2,'','.') .' - '. number_format($pk10, 2, '','.' );?>" disabled>
						</div>
					</div>
					<div class="col-md-2">
						<div class="alert alert-success tada animated mt-2"><i class="fas fa-fw fa-info-circle"></i> Angka Acak</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak1; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak2; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak3; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak4; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak5; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak6; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak7; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak8; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak9; ?>" disabled>
						</div>
						<div class="form-group">
							<input class="form-control" id="disabledInput" type="text" placeholder="Angak Acak 1" name="pd1" value="<?= $acak10; ?>" disabled>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>