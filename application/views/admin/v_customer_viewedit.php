
<form role="form" action="<?php echo base_url() ?>admin/customer/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $customer['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Nama</label>
			<input name="name" value="<?php echo $customer['name'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Alamat</label>
			<input name="address" value="<?php echo $customer['address'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Address">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">No. Hp</label>
			<input name="phone" value="<?php echo $customer['phone'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Phone">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input name="email" value="<?php echo $customer['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Jenis Kelamin</label>
			<select name="gender" class="form-control" name="" id="">
				<option value="l">Laki-laki</option>
				<option value="p">Perempuan</option>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
