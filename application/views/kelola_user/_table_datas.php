<div class="col-md-12">
		<table class="table table-striped table-bordered" id="users">
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
							<button class="btn btn-danger" data-action="<?= base_url('/users/delete/'.$u->id) ?>" data-delete type="button" ><i class="fas fa-trash"></i></a>
							<?php endif;?>
							
					
						
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>