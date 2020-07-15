<div class="container">
<div class="row">
	<div class="col-md-3">
		<a class="btn btn-primary" href="<?= base_url('user/tambah') ?>">Add User</a>
	</div>
</div>
</div><hr>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Username</th>
				<th>Nama</th>
				<th>Level</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php foreach($user as $u): ?>
				<tr>
					<td><?= $u->username ?></td>
					<td><?= $u->nama ?></td>
					<td><?= userLevel($u->level) ?></td>
					<td>
						
							<a class="btn btn-warning" href="<?= base_url('user/ubah?id=').$u->id ?>"><i class="fas fa-edit"></i></a> 
							<?php if($u->id != AuthData()->id):?>
							<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#user-<?= $u->id ?>"><i class="fas fa-trash"></i></a>
							<?php endif;?>
							
					
						
					</td>
				</tr>
				<?php if($u->id != AuthData()->id):?>
				<div class="modal fade" id="user-<?= $u->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title">Apakah anda ingin menghapus data ini?</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body" align="center">
							        <form action="<?= base_url('user/delete') ?>" method="POST">
									<input type="hidden" name="id" value="<?= $u->id ?>">
									<button class="btn btn-danger" type="submit">OK</button> 

									<button class="btn btn-success" data-dismiss="modal" type="button">Batal</button>
										</form>
							      </div>
							      
							    </div>
							  </div>
							</div>
							<?php endif;?>
			<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
</div>