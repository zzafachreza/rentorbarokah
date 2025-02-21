<style>
    /* General Styles */
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #172169;
        padding: 15px;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .header-title {
        font-size: 18px; /* Ukuran font diperkecil */
        font-family: 'Poppins', sans-serif;
        color: white;
        font-weight: 600;
        text-align: center;
        margin: 0;
    }

    .btn-back img {
        height: 18px; /* Ukuran ikon diperkecil */
    }

    .header-spacer {
        width: 15px; /* Jarak spacer diperkecil */
    }

    .daftar-costumer-container {
        padding: 15px; /* Padding diperkecil */
        margin-top: 15px;
    }

    .listdaftar-costumer {
        padding: 15px; /* Padding diperkecil */
        list-style: none;
        background: #f8f8f8;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Grid Layout */
    .list-costumer-container {
        display: grid;
        grid-template-columns: 1fr 10px 2fr;
        align-items: center;
        padding: 10px 0; /* Padding diperkecil */
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

    .list-kelengkapansewa-pertama {
        padding: 15px; /* Padding diperkecil */
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .list-detail {
        font-family: 'Poppins', sans-serif;
        font-size: 14px; /* Ukuran font diperkecil */
        font-weight: 400;
        color: black;
        margin: 8px; /* Margin diperkecil */
    }

    .dot {
        margin: 8px; /* Margin diperkecil */
    }

    .checklist {
        margin: 8px; /* Margin diperkecil */
    }

    .btn-selesai-container {
        padding: 30px; /* Padding diperkecil */
        display:flex;
        justify-content:center;
        align-items:center;
        
    }

    .btn-action-container {
        padding: 30px; /* Padding diperkecil */
        display: flex;
        justify-content: space-around;
        margin: 15px; /* Margin diperkecil */
    }

    .btn-selesai, .btn-edit, .btn-hapus {
        padding: 10px;
        color: white;
        border-radius: 30px;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        font-size: 14px; /* Ukuran font diperkecil */
        height: 50px; /* Tinggi tombol diperkecil */
        width: 70%; /* Lebar tombol disesuaikan */
        margin:20px;
    }

    .btn-selesai {
        background-color: #172169;
    }

    .btn-edit {
        background-color: #FFC700;
    }

    .btn-hapus {
        background-color: #B9B9B9;
    }

    /* Responsive Styles for Mobile */
    @media (max-width: 768px) {
        .header-title {
            font-size: 16px; /* Ukuran font lebih kecil */
        }

        .daftar-costumer-container {
            padding: 10px; /* Padding lebih kecil */
        }

        .listdaftar-costumer {
            padding: 10px; /* Padding lebih kecil */
        }

        .list-costumer-container {
            grid-template-columns: 1fr 5px 2fr; /* Grid lebih kompak */
            padding: 8px 0; /* Padding lebih kecil */
        }

        .label-list, .separator, .list-costumer {
            font-size: 12px; /* Ukuran font lebih kecil */
        }

        .list-kelengkapansewa-pertama {
            padding: 10px; /* Padding lebih kecil */
        }

        .list-detail, .dot, .checklist {
            margin: 5px; /* Margin lebih kecil */
        }

        .btn-selesai-container, .btn-action-container {
            padding: 20px; /* Padding lebih kecil */
        }
        
        .btn-action-container {
            margin-bottom:100px;
        }

        .btn-selesai, .btn-edit, .btn-hapus {
            font-size: 12px; /* Ukuran font lebih kecil */
            height: 35px; /* Tinggi tombol lebih kecil */
            width: 48%; /* Lebar tombol disesuaikan */
        }
    }
</style>

<div class="">
    <div class="header">
        <div class="nav">
            <a href="<?= base_url('OutputData') ?>" class="btn-back"><img src="/assets/img/icon/arrow-back.png" height="20" alt="Back"></a>
            <p class="header-title">Output Data Customer</p>
            <div class="header-spacer"></div>
        </div>
    </div>

    <div class="main-container">
        <div class="daftar-costumer-container">
            <p style="font-family:'Poppins',sans-serif; font-size:20px; font-weight:600; text-align:center; color: #172169;">Daftar Customer</p>

            <div class="daftar-costumer">
                <ul class="listdaftar-costumer">
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
                        <p class="label-list">Waktu Ambil Motor</p>
                        <p class="separator">:</p>
                        <p class="list-costumer">31/01/2026 | 09.00</p>
                    </div>

                    <div class="list-costumer-container">
                        <p class="label-list">Waktu Kembali Motor</p>
                        <p class="separator">:</p>
                        <p class="list-costumer">-</p>
                    </div>

                    <div class="list-costumer-container">
                        <p class="label-list">Total Biaya</p>
                        <p class="separator">:</p>
                        <p class="list-costumer">-</p>
                    </div>
                </ul>
            </div>
        </div>

        <div class="daftar-costumer-container">
            <p style="font-family:'Poppins',sans-serif; font-size:20px; font-weight:600; text-align:center; color: #172169;">Detail Sewa</p>

            <div class="daftar-costumer">
                <div class="list-detail-container">
                    <ul class="listdaftar-costumer">
                        <p class="label-list">Kelengkapan Sewa</p>
                        <div class="list-kelengkapansewa-pertama">
                            <p class="dot">•</p>
                            <p class='list-detail'>Kunci</p>
                            <img class="checklist" src="/assets/img/icon/check.png" height="12">
                        </div>

                        <div class="list-kelengkapansewa-pertama">
                            <p class="dot">•</p>
                            <p class='list-detail'>STNK</p>
                            <img class="checklist" src="/assets/img/icon/check.png" height="12">
                        </div>

                        <div style="margin-bottom:30px;" class="list-kelengkapansewa-pertama">
                            <p class="dot">•</p>
                            <p class='list-detail'>Helm</p>
                            <img class="checklist" src="/assets/img/icon/check.png" height="12">
                        </div>

                        <div class="list-costumer-container">
                            <p class="label-list">Jenis Jaminan</p>
                            <p class="separator">:</p>
                            <p class="list-costumer">KTP</p>
                        </div>

                        <div>
                            <div class="list-costumer-container">
                                <p class="label-list">Foto saat Sewa</p>
                                <p class="separator">:</p>
                                <p class="list-costumer"></p>
                            </div>
                            <img src="/mnt/data/image.png" onerror="this.onerror=null; this.src='/assets/img/icon/no-img.jpg';" alt="Foto Sewa" width="150">
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="btn-selesai-container">
            <button class='btn-selesai form-control'>Selesai Sewa</button>
        </div>

        <div class="btn-action-container">
            <button class='btn-edit form-control'>Edit</button>
            <button class='btn-hapus form-control'>Hapus</button>
        </div>
    </div>
</div>