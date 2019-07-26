<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form method="post" action="">
						<div class="form-group">
							<?php //if(validation_errors() ): ?>
							<!-- <div class="alert alert-danger mt-1" role="alert"> -->

							<!-- </div> -->
							<?php //endif; ?>
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama"
								value="<?= set_value('nama'); ?>">
							<small class="from-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="npm">NPM</label>
							<input type="text" class="form-control" id="npm" name="npm"
								value="<?= set_value('npm'); ?>">
							<small class="from-text text-danger"><?= form_error('npm'); ?></small>
						</div>
						<div class="form-group">
							<label for="kelas">Kelas</label>
							<select class="form-control" id="kelas" name="kelas">
								<!-- <option disabled selected>Pilih Jurusan</option> -->
								<option value="4IA18">4IA18</option>
								<option value="4IA19">4IA19</option>
								<option value="4IA20">4IA20</option>
								<option value="4IA21">4IA21</option>
								<option value="4IA22">4IA22</option>
								<option value="4IA23">4IA23</option>
								<option value="4IA24">4IA24</option>
								<option value="4IA25">4IA25</option>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
