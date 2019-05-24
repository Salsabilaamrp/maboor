<div class="flight-wrapper">

	<div class="search-flight-title animated fadeIn">
		<!-- get data from get -->
		<h3>Tinjau Pesanan Anda</h3>
		<h4>
			<span><img width="3%" height="3%" src="assets/images/pesawat.jpg"></span>
			Penerbangan dari
			<b>
				<?php echo $_GET['rute_from'] ?>
			</b> ke
			<b>
				<?php echo $_GET['rute_to'] ?>
			</b>
		</h4>


		<p>
			<!-- <b> -->
				<?php
        // convert date to month day using date function php
				$date = strtotime($_GET['depart_date']);
				echo date("D d M Y", $date);
				?>
			<!-- </b> -->
		</p>

		<p>
			<b>
				<span>
					<?php echo $_GET['passengers'] ?> Penumpang, </span>
					<span>
						<?php echo $_GET['flight_class'] ?> Class</span>
					</b>
				</p>

			</div>
			<!-- ###### -->
			<div class="flight-booking-info row">
				<div class="col-lg-7 animated fadeInLeft">
					<div class="flight-booking-1">
						<div class="booking-title">
							<h4><span><img width="5%" height="5%" src="assets/images/pesawat.jpg"></span> Detail Penerbangan</h4>
							<div class="booking-line"></div>
						</div>
						<table class="flight-table">
							<tr>
								<td>Maskapai</td>
								<td> : </td>
								<td>
									<?php echo $data['data_rute']['code'] ?>
								</td>
							</tr>
							<tr>
								<td>Berangkat</td>
								<td> : </td>
								<td>
									<?php 
									echo date('G:i:s, D d M Y', strtotime($data['data_rute']['depart']));
									?>
								</td>
							</tr>
							<tr>
								<td>Tiba</td>
								<td> : </td>
								<td>
									<?php 
									echo date('G:i:s, D d M Y', strtotime($data['data_rute']['arrive']));
									?>
								</td>
							</tr>
							<tr>
								<td>Durasi</td>
								<td> : </td>
								<td>
									<!-- duration -->
									<?php
            $datetime1 = new DateTime($data['data_rute']['depart']); //convert to datetime
            $datetime2 = new DateTime($data['data_rute']['arrive']); //convert to datetime
            $interval = $datetime1->diff($datetime2); //get interval from two datetime
            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
            ?>

        </td>
    </tr>
    <tr>
    	<td>Kelas Kabin</td>
    	<td> : </td>
    	<td>
    		<?php echo $data['data_rute']['class'] ?>
    	</td>
    </tr>
</table>
</div>
</div>
<div class="col-lg-5 animated fadeInRight">
	<div class="flight-booking-2">
		<div class="booking-title">
			<h4><span class="glyphicon glyphicon-pencil"></span> Detail Pembayaran</h4>
			<div class="booking-line"></div>
		</div>
		<table class="summary-table">
			<tr>
				<td>Harga Tiket</td>
				<td> : </td>
				<td>
					<?php 
					echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['data_rute']['price'])), 3)));
					?>
				</td>
			</tr>
			<tr>
				<td>Total Penumpang</td>
				<td> : </td>
				<td>
					<?php echo $_GET['passengers'] ?>
				</td>
			</tr>
			<tr class="price-you-pay">
				<td>Total Pembayaran</td>
				<td> : </td>
				<td>
					<?php 
					echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['total_payment'])), 3)));
					?>
				</td>
			</tr>
		</table>
	</div>

</div>
</div>
<!-- ###### -->
<form action="<?php echo base_url() ?>prebooking/makebooking" method="POST">
	<input name="rute_id" value="<?php echo $_GET['rute_id'] ?>" type="hidden">
	<input name="passengers" value="<?php echo $_GET['passengers'] ?>" type="hidden">
	<input name="current_url" id="current_url" type="hidden" value=''>
	<div class='btn-continue animated fadeInUp'>
		<button class="choose-btn">Lanjutkan</button>
	</div>
</form>
</div>
