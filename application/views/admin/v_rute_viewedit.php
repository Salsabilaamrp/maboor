<form role="form" action="<?php echo base_url() ?>admin/rute/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $rute['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Berangkat</label>
			<input name="depart" value="<?php echo $rute['depart'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="Berangkat">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Tiba</label>
			<input name="arrive" value="<?php echo $rute['arrive'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="Tiba">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Dari</label>
			<input name="rutefrom" value="<?php echo $rute['rute_from'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Dari">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Ke</label>
			<input name="ruteto" value="<?php echo $rute['rute_to'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Ke">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Harga</label>
			<input name="price" value="<?php echo $rute['price'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Harga">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Kelas Kabin</label>
			<select name="class" class="form-control" name="" id="">
				<option value="Economy">Ekonomi</option>
				<option value="Business">Bisnis</option>
				<option value="First">First</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Transportasi</label>
			<select name="transportation" class="form-control" name="" id="">
				<?php foreach ( $transportation as $value ): ?>
				<option value="<?php echo $value['id'] ?>">
					<?php echo $value['code'] ?>
				</option>
				<?php endforeach; ?>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
<script>
$( function() {
	$(".datepicker").datetimepicker({format : "YYYY-MM-DD HH:mm:ss"});
  } );
</script>