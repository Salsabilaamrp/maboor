<section class="content-header">
	<h1>Reservasi</h1>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/admin/dashboard">
				<i class="fa fa-dashboard"></i> Reservasi</a>
		</li>
		<li class="active">View</li>
	</ol>
</section>

<section class="content"> 
	<div class="row">
		<div class="col-xs-12">
			<!-- /.box -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th align="center">No</th>
								<th align="center">Kode Pemesanan</th>
								<th align="center">Tanggal Pemesanan</th>
								<th align="center">Pengguna</th>
								<th align="center">Rute</th>
								<th align="center">Status</th>
								<th align="center">Bukti Pembayaran</th>
								<th align="center">Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
							<?php foreach ($reservation as $value) : ?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $value['reservation_code'] ?></td>
								<td><?php echo $value['reservation_date'] ?></td>
								<td class="reservation-action"><?php echo $value['username'] ?></td>
								<td class="reservation-action"><?php echo $value['rute_from'] ?> - <?php echo $value['rute_to'] ?></td>
								<td>
									<?php 
									if($value['status'] == 1){
										echo "Dibayar";
									}
									elseif($value['status'] == 0){
										echo "Belum Dibayar";
									}
									?>
								</td>
								<td>
									<?php 
									if($value['proof_of_payment'] != null){
										echo 'diapload';
									}
									else{
										echo 'belum diapload';
									}
									?>
								</td>
								<td>
									<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">Lihat|Edit</button>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/reservation/delete/<?php echo $value['id']?>">Hapus</a>
								</td>
							</tr>
							<?php $i++ ?>
							<?php endforeach; ?>
						</tbody>
						<!-- <tfoot>
              <tr>
              </tr>
              </tfoot> -->
					</table>

					<!-- modal-edit -->
					<div class="modal fade" id="modal-viewedit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Lihat | Edit Reservasi</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<div id="viewedit"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
