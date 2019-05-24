<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">
		<div class="col-lg-12 animated fadeInUp">
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-list-alt"></span>
						Pesanan Saya
					</h4>
					<div class="booking-line"></div>
				</div>
				<table class="table table-bordered table-reservation">
					<thead>
					  <tr>
						<th>No</th>
						<th>Kode Pemesanan</th>
						<th>Tanggal Pemesanan</th>
						<th>Rute</th>
						<th>Status</th>
						<th>Tindakan</th>
					  </tr>
					</thead>
					<tbody>
					<?php $i = 0 ?>
					<?php foreach ( $reservation as $value ): ?>
					<?php $i++ ?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value['reservation_code'] ?></td>
							<td><?php echo date('D d M Y, G:i:s', strtotime($value['reservation_date'])) ?></td>
							<td class="reservation-route">Dari <span><?php echo $value['rute_from'] ?> ke <span><?php echo $value['rute_to'] ?></span></span></td>
							<td>

								<?php 
								if($value['proof_of_payment'] == 0){
									echo "<span class='status-paid'>Dibayar</span>";
								}
								else{
									echo "<span class='status-unpaid'>Belum Dibayar</span>";
								}
								
								?>

							</td>
							<td>
								<a class="status-check" href="<?php echo base_url() ?>reservation/status?reservation_code=<?php echo $value['reservation_code'] ?>">Cek</a>
							</td>
						</tr>	
					<?php endforeach; ?>
					</tbody>
				  </table>
			</div>
		</div>

	</div>
</div>
</div>
