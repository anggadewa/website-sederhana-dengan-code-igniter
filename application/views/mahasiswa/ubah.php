<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Mahasiswa
				</div>
				<div class="card-body">
					<form method="post" action="">
						<input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
						<div class="form-group">
							<?php //if(validation_errors() ): ?>
							<!-- <div class="alert alert-danger mt-1" role="alert"> -->

							<!-- </div> -->
							<?php //endif; ?>
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama"
								value="<?= $mahasiswa['nama'];?>">
							<small class="from-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="npm">NPM</label>
							<input type="text" class="form-control" id="npm" name="npm"
								value="<?= $mahasiswa['npm']; ?>">
							<small class="from-text text-danger"><?= form_error('npm'); ?></small>
						</div>
						<div class="form-group">
							<label for="kelas">Kelas</label>
							<select class="form-control" id="kelas" name="kelas">
								<!-- <option disabled selected>Pilih Jurusan</option> -->
								<?php  foreach($kelas as $k) :?>
								<?php if($k == $mahasiswa['kelas']) : ?>
								<option value="<?= $k; ?>" selected><?= $k; ?></option>
								<?php else : ?>
								<option value="<?= $k; ?>"><?= $k; ?></option>
								<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<a href="<?= base_url(); ?>mahasiswa" class="btn btn-warning float-left">Kembali</a>
						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
