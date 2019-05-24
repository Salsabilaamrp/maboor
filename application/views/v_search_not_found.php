<div class="flight-wrapper">

    <div class="search-flight-title animated fadeIn">
        <!-- get data from get -->
        <h4>
            <span class="glyphicon glyphicon-plane"></span>
            Penerbangan dari 
            <b><?php echo $_GET['rute_from'] ?></b> ke 
            <b><?php echo $_GET['rute_to'] ?></b>
        </h4>


        <p> 
            <b>
                <?php
        // convert date to month day using date function php
                $date = strtotime($_GET['depart_date']);
                echo date("D d M Y", $date);
                ?>
            </b>
        </p>

        <p>
            <b>
                <span><?php echo $_GET['passengers'] ?> Penumpang, </span> 
                <span><?php echo $_GET['flight_class'] ?> Class</span>
            </b>
        </p>

    </div>


    <div class="search-flight animated fadeInUp">
        <div class="search-header">
            <div class="col-lg-3">
                <h6 align="center">Maskapai</h6>
            </div>
            <div class="col-lg-2">
                <h6 align="center">Berangkat</h6>
            </div>
            <div class="col-lg-2">
                <h6 align="center">Tiba</h6>
            </div>
            <div class="col-lg-2">
                <h6 align="center">Durasi</h6>
            </div>
            <div class="col-lg-3">
                <h6 align="center">Harga</h6>
            </div>
        </div>
        <div class="notfound">
            <img align="center" height="10%" width="10%" src="assets/images/guidepost.jpg">
            <h2></h2>
            <h2>Penerbangan tidak tersedia</h2>
            <h4>Ubah pencarian dengan tanggal atau kelas kabin yang berbeda.</h4>
            <a onclick='window.location.href="<?php echo base_url() ?>"' class="choose-btn">Ubah Pencarian</a>
        </div>


    </div>
</div>