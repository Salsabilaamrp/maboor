<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">
		<div class="col-lg-12 animated fadeIn">
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-modal-window"></span>
						Pemesanan
					</h4>
					<div class="booking-line"></div>
					<h3 class="booking-code">Kode Reservasi <span><?php echo $_GET['reservation_code'] ?></span></h3>
				</div>
			</div>
		</div>
		<div class="col-lg-7 animated fadeInLeft">
			<?php $i=1 ?>
			<?php foreach ( $customer as $value ): ?>
				<div class="customer-data">
					<div class="booking-title">
						<h4>
							<span class="glyphicon glyphicon-user"></span>
							Penumpang
							<?php echo $i ?>
						</h4>
						<div class="booking-line"></div>
					</div>
					<table class="table-customer">
						<tr>
							<td class="h">Nama</td>
							<td>:</td>
							<td class="c">
								<?php echo $value['name'] ?>
							</td>
						</tr>
						<tr>
							<td class="h">Alamat</td>
							<td>:</td>
							<td class="c">
								<?php echo $value['address'] ?>
							</td>
						</tr>
						<tr>
							<td class="h">No. Hp</td>
							<td>:</td>
							<td class="c">
								<?php echo $value['phone'] ?>
							</td>
						</tr>
						<tr>
							<td class="h">Email</td>
							<td>:</td>
							<td class="c">
								<?php echo $value['email'] ?>
							</td>
						</tr>
						<tr>
							<td class="h">Jenis Kelamin</td>
							<td>:</td>
							<td class="c">
								<?php if ($value['gender']=='p') {
									echo "Perempuan";
								} else{
									echo "Laki-laki"; 
								}?>
								
							</td>
						</tr>
						<tr class="s">
							<td class="h">Kursi</td>
							<td>:</td>
							<td class="c">
								<?php echo $value['seat'] ?>
							</td>
						</tr>
					</table>
				</div>
				<?php $i++ ?>
			<?php endforeach; ?>

			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<h4><span class="glyphicon glyphicon-plane"></span> Detail Penerbangan</h4>
						<div class="booking-line"></div>
					</div>
					<table class="table-customer">
						<tr>
							<td>Maskapai</td>
							<td> : </td>
							<td class="c">
								<?php echo $rute['code'] ?>
							</td>
						</tr>
						<tr>
							<td>Berangkat</td>
							<td> : </td>
							<td class="c">
								<?php 
								echo date('G:i:s, D d M Y', strtotime($rute['depart']));
								?>
							</td>
						</tr>
						<tr>
							<td>Tiba</td>
							<td> : </td>
							<td class="c">
								<?php 
								echo date('G:i:s, D d M Y', strtotime($rute['arrive']));
								?>
							</td>
						</tr>
						<tr>
							<td>Durasi</td>
							<td> : </td>
							<td class="c">
								<?php
            $datetime1 = new DateTime($rute['depart']); //convert to datetime
            $datetime2 = new DateTime($rute['arrive']); //convert to datetime
            $interval = $datetime1->diff($datetime2); //get interval from two datetime
            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
            ?>
        </td>
    </tr>
    <tr>
    	<td>Kelas Kabin</td>
    	<td> : </td>
    	<td class="c">
    		<?php echo $rute['class'] ?>
    	</td>
    </tr>
</table>
</div>
</div>


<div class="col-lg-5 animated fadeInRight">
<div class="flight-booking-1">
	<div class="booking-title">
		<h4>
			<span class="glyphicon glyphicon-pencil"></span> Detail Pembayaran</h4>
			<div class="booking-line"></div>
		</div>

		<?php if ( $rute['proof_of_payment'] == 0 ): ?>
			<h3 class="status-unpaid">BELUM DIBAYAR</h3>
			<?php else: ?>
				<h3 class="status-paid">TELAH DIBAYAR</h3>
			<?php endif; ?>

			<table class="summary-table table-customer">
				<tr>
					<td>Harga Tiket</td>
					<td> : </td>
					<td class="c">
						<?php 
						echo "Rp " . strrev(implode('.', str_split(strrev(strval($rute['price'])), 3)));
						?>
					</td>
				</tr>
				<tr>
					<td>Total Penumpang</td>
					<td> : </td>
					<td class="c">
						<?php echo count($customer) ?>
					</td>
				</tr>
				<tr class="price-you-pay">
					<td>Total Pembayaran</td>
					<td> : </td>
					<td class="c">
						<?php 
						echo "Rp " . strrev(implode('.', str_split(strrev(strval(count($customer)*$rute['price'])), 3)));
						?>
					</td>
				</tr>
			</table>
			<?php if ( $rute['status'] == 0 ): ?>
				<div class="booking-unpaid">
					<p>Pesanan Anda berhasil, untuk menyelesaikan pembayaran, transferkan total pembayaran ke : </p>
					<table class="table-payment">
						<tr>
							<td>Mandiri</td>
							<td>:</td>
							<td>9000039348769</td>
						</tr>
						<tr>
							<td>BCA</td>
							<td>:</td>
							<td>0461893421</td>
						</tr>
						<tr>
							<td>BRI</td>
							<td>:</td>
							<td>56756760067</td>
						</tr>
					</table>
				</div>
				<div class="booking-paid">
					<!-- <div class="booking-line"></div> -->
					<?php if ( $proof_of_payment !== null ): ?>
						<img height="100%" width="100%" class="proof-of-payment-img" src="<?php echo base_url() ?>assets/proof_of_payment/<?php echo $proof_of_payment ?>" alt="image">
						<p>menunggu verifikasi data..</p>
					<?php endif; ?>
					<?php if ( $proof_of_payment == null ): ?>
						<p>Upload bukti pembayaran</p>
						<form action="<?php echo base_url() ?>reservation/proof_of_payment" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="reservation_code" value="<?php echo $_GET['reservation_code'] ?>">
							<input class="form-control" name="image" type="file">
							<button class="choose-btn">Upload</button>
						</form>
					<?php endif; ?>
				</div>

				<?php else: ?>
					<div class="booking-paid">
						<p>Pembayaran Berhasil</p>
					</div>
				<?php endif; ?>				
			</div>
		</div>
	</div>
</div>
</div>
