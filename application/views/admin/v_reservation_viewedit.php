<form role="form" action="<?php echo base_url() ?>admin/reservation/update" method="POST">
        <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Kode Pemesanan</label>
                <input disabled value="<?php echo $reservation['reservation_code'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Reservation Code">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Pemesanan</label>
                <input disabled value="<?php echo $reservation['reservation_date'] ?>" type="varchar" class="form-control" id="exampleInputEmail1" placeholder="Reservation Date">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pengguna</label>
                <input disabled value="<?php echo $reservation['username'] ?>" type="varchar" class="form-control" id="exampleInputEmail1" placeholder="Users">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rute</label>
                <input disabled value="<?php echo $reservation['rute_from'] ?> - <?php echo $reservation['rute_to'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Rute">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="1">Dibayar</option>
                    <option value="0">Belum Dibayar</option>
                </select>
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bukti Pembayaran</label>
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                <?php if ( $reservation['proof_of_payment'] != 'null' ): ?>
                <img class="proof-of-payment-img" src="<?php echo base_url() ?>assets/proof_of_payment/<?php echo $reservation['proof_of_payment'] ?>" alt="">
                <?php else : ?>
                <p>Belum upload :(</p>                                        
                <?php endif; ?>
            </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>