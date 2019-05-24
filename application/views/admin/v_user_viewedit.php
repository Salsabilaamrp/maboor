<form role="form" action="<?php echo base_url() ?>admin/user/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input name="username" value="<?php echo $user['username'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Nama Lengkap</label>
			<input name="fullname" value="<?php echo $user['fullname'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Password Baru</label>
			<small>*tidak bisa mengubah password sebelumnya</small>
			<input name="password" value="" class="form-control" id="exampleInputEmail1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Level</label>
			<select name="level" class="form-control" id="">
				<option value="2">Admin</option>
				<option value="1">User</option>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
