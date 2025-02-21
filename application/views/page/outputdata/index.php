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
        justify-content: center;
        align-items: center;
        align-content: center;
    }
    
    .container-card {
        padding: 10px;
        background-color: #F5F5F5;
        border-radius: 10px;
        margin: 10px;
        width: 50%;
    }

    /* Grid Layout */
    .list-costumer-container {
        display: grid;
        grid-template-columns: 1fr 10px 2fr;
        align-items: center;
        padding: 8px 0; /* Padding diperkecil agar lebih rapat */
        margin: 0; /* Menghapus margin default */
    }
    
    .label-list {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 14px; /* Ukuran font diperkecil */
        color: black;
        text-align: left;
    }

    .separator {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px; /* Ukuran font diperkecil */
        color: black;
        text-align: center;
    }

    .list-costumer {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px; /* Ukuran font diperkecil */
        color: black;
        padding-left: 10px;
    }
    
    /* Footer Add Button */
    .footer-add {
        position: fixed; /* Tombol tetap di layar */
        bottom: 20px; /* Jarak dari bawah */
        right: 20px; /* Pindahkan ke kanan */
        z-index: 1000; /* Memastikan tombol di atas elemen lain */
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .footer-add img {
        height: 50px;
    }
    
    .status-action-container {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .status-container {
        background-color: #FFC700;
        border-radius: 20px;
        width: 180px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40px; /* Menambahkan tinggi untuk memastikan teks berada di tengah */
    }

    .teks-status {
        color: white;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        font-weight: 600;
        font-size: 15px;
        margin: 0; /* Menghapus margin default */
    }

    .action-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 10px;
    }

    /* Responsive Styles for Mobile */
    @media (max-width: 768px) {
        .header-title {
            font-size: 18px; /* Ukuran font lebih kecil untuk mobile */
        }

        .btn-back img {
            height: 16px; /* Ukuran ikon lebih kecil untuk mobile */
        }

        .footer-add img {
            height: 40px; /* Ukuran ikon lebih kecil untuk mobile */
        }

        .nav {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

        .header {
            padding: 5px; /* Padding lebih kecil untuk mobile */
        }

        .container-card {
            width: 90%; /* Lebih lebar untuk mobile */
        }

        .list-costumer-container {
            grid-template-columns: 1fr 10px 2fr; /* Tetap menggunakan grid layout */
            padding: 6px 0; /* Padding lebih kecil untuk mobile */
        }

        .status-container {
            width: 120px; /* Lebar lebih kecil untuk mobile */
        }

        .teks-status {
            font-size: 14px; /* Ukuran font lebih kecil untuk mobile */
        }
    }

    @media (max-width: 480px) {
        .header-title {
            font-size: 16px; /* Ukuran font lebih kecil untuk layar sangat kecil */
        }

        .btn-back img {
            height: 14px; /* Ukuran ikon lebih kecil untuk layar sangat kecil */
        }

        .footer-add img {
            height: 35px; /* Ukuran ikon lebih kecil untuk layar sangat kecil */
        }

        .container-card {
            width: 95%; /* Lebih lebar untuk layar sangat kecil */
        }

        .list-costumer-container {
            grid-template-columns: 1fr 5px 2fr; /* Grid layout lebih kecil untuk layar sangat kecil */
            padding: 4px 0; /* Padding lebih kecil untuk layar sangat kecil */
        }

        .status-container {
            width: 100px; /* Lebar lebih kecil untuk layar sangat kecil */
        }

        .teks-status {
            font-size: 12px; /* Ukuran font lebih kecil untuk layar sangat kecil */
        }
    }
</style>

<div class="">
    <!-- Header -->
    <div class="header">
        <div class="nav">
            <a href="<?= base_url('Dashboard') ?>" class="btn-back"><img src="assets/img/icon/arrow-back.png" height="20" alt="Back"></a>
            <p class="header-title">Output Data Customer</p>
            <div class="header-spacer"></div>
        </div>
    </div>
    
    <div class="card-container">
        <div class="container-card">
            <div class="list-costumer-container">
                <p class="label-list">Nama Lengkap</p>
                <p class="separator">:</p>
                <p class="list-costumer">Nizam Syahputra</p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Nomor Telepon</p>
                <p class="separator">:</p>
                <p class="list-costumer">087646745476</p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Jenis Kendaraan</p>
                <p class="separator">:</p>
                <p class="list-costumer">Honda Vario</p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Paket Sewa</p>
                <p class="separator">:</p>
                <p class="list-costumer">Paket Harian</p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Waktu Ambil</p>
                <p class="separator">:</p>
                <p class="list-costumer">31/01/2026 | 09.00</p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Waktu Kembali</p>
                <p class="separator">:</p>
                <p class="list-costumer">-</p>
            </div>
            
            <div class="list-costumer-container">
                <p class="label-list">Durasi</p>
                <p class="separator">:</p>
                <p class="list-costumer">0 Jam 41 Menit 0 Detik</p>
            </div>

            <div class="list-costumer-container">
                <p class="label-list">Total Biaya</p>
                <p class="separator">:</p>
                <p class="list-costumer">-</p>
            </div>
            
            <div class="status-action-container">
                <div class="status-container">
                    <!--STATUS DISEWA ATAU SELESAI DI SEWA-->
                    <div class="status">
                        <p class="teks-status">Sedang Sewa</p>
                    </div>
                </div>
                
                <div class="action-container">
                    <!--FIND,HAPUS,EDIT-->
                    <a href="<?=base_url('OutputData/output') ?>">
                        <img src="/assets/img/icon/search.png" alt="icon-find" height="25">
                    </a>
                    
                    <a>
                        <img src="/assets/img/icon/delete.png" alt="icon-delete" height="25">
                    </a>
                    
                    <a>
                        <img src="/assets/img/icon/edit.png" alt="icon-edit" height="25">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Add Button -->
    <div class="footer-add">
        <a href="<?= base_url('OutputData/add') ?>">
            <img src="assets/img/icon/icon-add.png" height="50" alt="Add">
        </a>
    </div>
</div>