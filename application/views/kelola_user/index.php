<div class="container">
<div class="row">
	<div class="col-md-3">
		<a class="btn btn-primary" href="<?= base_url('user/tambah') ?>">Add User</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Username</th>
				<th>Nama</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php foreach($user as $u): ?>
				<tr>
					<td><?= $u->username ?></td>
					<td><?= $u->nama ?></td>
					<td><a class="btn btn-warning" href="#">Ubah</a> <a class="btn btn-primary" href="#">Hapus</a></td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
</div>