<style>
    /* General Styles */
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #172169;
        padding: 20px;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .header-title {
        font-size: 22px;
        font-family: 'Poppins', sans-serif;
        color: white;
        font-weight: 600;
        text-align: center;
        margin: 0; /* Menghapus margin default */
    }

    .btn-back img {
        height: 20px;
    }

    .header-spacer {
        width: 20px; /* Memberikan ruang kosong untuk menjaga keseimbangan */
    }

    .card-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        width: 100%; /* Lebar penuh */
        box-sizing: border-box; /* Memastikan padding tidak menambah lebar */
    }
    
    .container-card {
        padding: 15px; /* Padding lebih kecil untuk mobile */
        background-color: transparent;
        border-radius: 10px;
        margin: 10px 0; /* Margin atas dan bawah */
        width: 100%; /* Lebar penuh pada mobile */
        max-width: 460px; /* Maksimum lebar untuk mobile dengan space di sisi kanan dan kiri */
        border: 2px solid #172169;
        box-sizing: border-box; /* Memastikan padding dan border tidak menambah lebar */
    }

    .container-items {
        display: flex;
        flex-direction: row; /* Tetap horizontal pada mobile */
        align-items: flex-start;
        gap: 15px; /* Jarak lebih kecil untuk mobile */
    }

    .img-container img {
        height: 100px; /* Ukuran gambar lebih kecil untuk mobile */
        align-items: center;
    }

    .title {
        font-family: 'Poppins', sans-serif;
        font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        color: #172169;
        font-weight: 600;
        text-align: left; /* Teks rata kiri */
        margin-bottom: 10px; /* Jarak antara judul dan konten */
    }

    .info-container {
        display: flex;
        flex-direction: row; /* Tetap horizontal pada mobile */
        gap: 15px; /* Jarak lebih kecil untuk mobile */
        width: 100%;
    }

    .label-info {
        padding: 8px 12px; /* Padding horizontal ditambah agar titik dua terlihat */
        border-radius: 10px;
        background-color: #172169;
        height: 30px; /* Tinggi lebih kecil untuk mobile */
        align-items: center;
        justify-content: center;
        margin-bottom: 8px; /* Jarak antara label dan konten */
    }
    
    .title-info {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        color: white;
        font-size: 11px; /* Ukuran font diperkecil agar titik dua terlihat */
        white-space: nowrap; /* Mencegah teks wrap */
    }

    .kelengkapan-container, .biayasewa-container {
        display: flex;
        flex-direction: column;
        gap: 8px; /* Jarak antar item lebih kecil */
    }

    .item-check {
        display: flex;
        align-items: center;
        gap: 8px; /* Jarak antara ikon dan teks lebih kecil */
    }
    
    .item {
        font-family: 'Poppins', sans-serif;
        font-size: 12px; /* Ukuran font lebih kecil untuk mobile */
        color: black;
    }

    /* Responsive Styles for Desktop */
    @media (min-width: 768px) {
       .header {
        padding: 20px; /* Padding lebih besar untuk desktop */
        width: 100%;
    }

       .nav {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

     .header-title {
            font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        }


    .btn-back img {
        height: 20px; /* Ukuran ikon lebih besar untuk desktop */
    }

    .container-card {
        padding: 20px; /* Padding lebih besar untuk desktop */
        max-width: 600px; /* Maksimum lebar untuk desktop */
    }

    .img-container img {
        height: 125px; /* Ukuran gambar lebih besar untuk desktop */
        width: 151px;
    }

    .title {
        font-size: 24px; /* Ukuran font lebih besar untuk desktop */
    }

    .label-info {
        height: 40px; /* Tinggi lebih besar untuk desktop */
        padding: 10px 15px; /* Padding horizontal lebih besar untuk desktop */
    }

    .title-info {
        font-size: 14px; /* Ukuran font lebih besar untuk desktop */
    }

    .item {
        font-size: 14px; /* Ukuran font lebih besar untuk desktop */
    }

    .kelengkapan-container, .biayasewa-container {
        gap: 10px; /* Jarak antar item lebih besar */
    }

    .item-check {
        gap: 10px; /* Jarak antara ikon dan teks lebih besar */
    }

      .header-spacer {
        width: 20px; /* Memberikan ruang kosong untuk menjaga keseimbangan */
    }

    }
</style>



<div class="">
    <!-- Header -->
   <div class="header">
        <div class="nav">
            <a href="<?= base_url('Dashboard') ?>" class="btn-back"><img src="assets/img/icon/arrow-back.png" height="20" alt="Back"></a>
            <p class="header-title">Biaya Sewa</p>
            <div class="header-spacer"></div>
        </div>
    </div>
    
    <div class="card-container">
        <div>
              <div class="container-card">
            <div class="container-items">
                <div class="img-container">
                    <img src="/assets/img/icon/honda_beat.png" alt="gambar-motor">
                </div>
                
                <div class="label-list-container">
                    <!-- JUDUL -->
                    <p class="title">Honda Beat</p>
                    <div class="info-container">
                        <!-- Kelengkapan -->
                        <div class="kelengkapan-container">
                            <div class="label-info">
                                <p class="title-info">Kelengkapan :</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Kunci</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">STNK</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Helm</p>
                            </div>
                        </div>
                        
                        <!-- Biaya Sewa -->
                        <div class="biayasewa-container">
                            <div class="label-info">
                                <p class="title-info">Biaya Sewa :</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp30.000/jam</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp150.000/hari</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp600.000/minggu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
          <div class="container-card">
             <div>
                 
             </div>
            <div class="container-items">
                <div class="img-container">
                    <img src="/assets/img/icon/yamaha_mio.png" alt="gambar-motor">
                </div>
                
                <div class="label-list-container">
                    <!-- JUDUL -->
                    <p class="title">Yamaha Mio</p>
                    <div class="info-container">
                        <!-- Kelengkapan -->
                        <div class="kelengkapan-container">
                            <div class="label-info">
                                <p class="title-info">Kelengkapan :</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Kunci</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">STNK</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Helm</p>
                            </div>
                        </div>
                        
                        <!-- Biaya Sewa -->
                        <div class="biayasewa-container">
                            <div class="label-info">
                                <p class="title-info">Biaya Sewa :</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp30.000/jam</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp150.000/hari</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp600.000/minggu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
          <div class="container-card">
            <div class="container-items">
                <div class="img-container">
                    <img src="/assets/img/icon/yamaha_nmx.png" alt="gambar-motor">
                </div>
                
                <div class="label-list-container">
                    <!-- JUDUL -->
                    <p class="title">Yamaha Nmax</p>
                    <div class="info-container">
                        <!-- Kelengkapan -->
                        <div class="kelengkapan-container">
                            <div class="label-info">
                                <p class="title-info">Kelengkapan :</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Kunci</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">STNK</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Helm</p>
                            </div>
                        </div>
                        
                        <!-- Biaya Sewa -->
                        <div class="biayasewa-container">
                            <div class="label-info">
                                <p class="title-info">Biaya Sewa :</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp30.000/jam</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp150.000/hari</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp600.000/minggu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
          
          
            <div class="container-card">
            <div class="container-items">
                <div class="img-container">
                    <img src="/assets/img/icon/honda_scoopi.png" alt="gambar-motor">
                </div>
                
                <div class="label-list-container">
                    <!-- JUDUL -->
                    <p class="title">Honda Scoopy</p>
                    <div class="info-container">
                        <!-- Kelengkapan -->
                        <div class="kelengkapan-container">
                            <div class="label-info">
                                <p class="title-info">Kelengkapan :</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Kunci</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">STNK</p>
                            </div>
                            <div class="item-check"> 
                                <img src="/assets/img/icon/check.png" alt="checklist" height="15">
                                <p class="item">Helm</p>
                            </div>
                        </div>
                        
                        <!-- Biaya Sewa -->
                        <div class="biayasewa-container">
                            <div class="label-info">
                                <p class="title-info">Biaya Sewa :</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp30.000/jam</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp150.000/hari</p>
                            </div>
                            <div class="item-check"> 
                                <p class="item">Rp600.000/minggu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
          
        </div>
    
        
    </div>
</div>