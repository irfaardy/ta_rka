<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="<?= $url ?>">
				<!-- initial object (null or not) -->
        <?php $data_user = userFields($user); ?>
				
				<!-- set user ID -->
				<input type="hidden" name="id" value="<?php echo $data_user->id ?>">

				<!-- include the list fields -->
        <?php $this->view("kelola_user/_form", ['user' => $data_user, 'daftar_jurusan' => $daftar_jurusan]) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
			</form>
		</div>

	</div>
</div>
