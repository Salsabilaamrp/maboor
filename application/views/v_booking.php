<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">

		<div class="col-lg-7 animated fadeInLeft">

			<form action="<?php echo base_url() ?>booking/insert_customer" method="POST">
				<input name="key" value="<?php echo $_GET['key'] ?>" type="hidden">
				<?php for ($i = 1; $i <= $data['passengers']; $i++) : ?>

					<div class="customer-data">
						<div class="booking-title">
							<h4>
								<span class="glyphicon glyphicon-user"></span> Detail Penumpang
								<?php echo $i ?>
							</h4>
							<div class="booking-line"></div>
						</div>
						<label for="">Nama</label>
						<input class="form-control" type="text" name="name[]" required>
						<br>
						<label for="">Alamat</label>
						<textarea style="height: 60px;" class="form-control" name="address[]" id="" cols="30" rows="10" required></textarea>
						<br>
						<div class="row">
							<div class="col-lg-6">
								<label for="">No. Hp</label>
								<input class="form-control" type="number" name="phone[]" required>
							</div>
							<div class="col-lg-6">
								<label for="">Email</label>
								<input class="form-control" type="email" name="email[]" required>
							</div>
						</div>
						<br>
						<label for="">Jenis Kelamin</label>
						<select class="form-control" name="gender[]" id="" required>
							<option value="l">Laki-laki</option>
							<option value="p">Perempuan</option>
						</select>
					</div>
				<?php endfor; ?>
			</div>




			<div class="col-lg-5 animated fadeInRight">
				<div class="flight-booking-1">
					<div class="booking-title">
						<h4>
							<span> <img width="5%" height="5%" src="assets/images/pesawat.jpg"></span> Detail Penerbangan</h4>
							<div class="booking-line"></div>
						</div>
						<table class="flight-table">
							<tr>
								<td>Maskapai</td>
								<td> : </td>
								<td>
									<?php echo $data_rute['code'] ?>
								</td>
							</tr>
							<tr>
								<td>Berangkat</td>
								<td> : </td>
								<td>
									<?php 
									echo date('G:i:s, D d M Y', strtotime($data_rute['depart']));
									?>
								</td>
							</tr>
							<tr>
								<td>Tiba</td>
								<td> : </td>
								<td>
									<?php 
									echo date('G:i:s, D d M Y', strtotime($data_rute['arrive']));
									?>
								</td>
							</tr>
							<tr>
								<td>Duration</td>
								<td> : </td>
								<td>
									<!-- duration -->
									<?php
                    $datetime1 = new DateTime($data_rute['depart']); //convert to datetime
                    $datetime2 = new DateTime($data_rute['arrive']); //convert to datetime
                    $interval = $datetime1->diff($datetime2); //get interval from two datetime
                    echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
                    //materikita.com
                    ?>

                </td>
            </tr>
            <tr>
            	<td>Kelas</td>
            	<td> : </td>
            	<td>
            		<?php echo $data_rute['class'] ?>
            	</td>
            </tr>
        </table>
    </div>

    <div class="flight-booking-2">
    	<div class="booking-title">
    		<h4>
    			<span class="glyphicon glyphicon-pencil"></span> Detail Pembayaran</h4>
    			<div class="booking-line"></div>
    		</div>
    		<table class="summary-table">
    			<tr>
    				<td>Harga Tiket</td>
    				<td> : </td>
    				<td>
    					<?php 
    					echo "Rp." . strrev(implode('.', str_split(strrev(strval($data_rute['price'])), 3)));
    					?>
    				</td>
    			</tr>
    			<tr>
    				<td>Total Penumpang</td>
    				<td> : </td>
    				<td>
    					<?php echo $data['passengers'] ?>
    				</td>
    			</tr>
    			<tr class="price-you-pay">
    				<td>Total Pembayaran</td>
    				<td> : </td>
    				<td>
    					<?php 
    					echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['passengers']*$data_rute['price'])), 3)));
    					?>
    				</td>
    			</tr>
    		</table>
    	</div>


    </div>
</div>

<div class="booking-continue animated fadeInUp">
	<button type="submit" name="submit" class="choose-btn">Lanjutkan</button>
</div>

</form>

</div>
<!-- ###### -->
</div>
