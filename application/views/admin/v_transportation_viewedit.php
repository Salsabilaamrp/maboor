<form role="form" action="<?php echo base_url() ?>admin/transportation/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $transportation['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Kode</label>
			<input name="code" value="<?php echo $transportation['code'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Kode">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Deskripsi</label>
			<input name="description" value="<?php echo $transportation['description'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Total Kursi</label>
			<input name="totalseat" value="<?php echo $transportation['seat_qty'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Total Kursi">
		</div>

	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
