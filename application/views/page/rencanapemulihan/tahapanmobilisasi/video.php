<style>
.header-container {
    padding: 10px;
    background-color: #AD6163;
    width: 100%;
    position: fixed;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.content-header {
    padding: 10px;
    text-align: center;
    color: white;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

.content-header h3 {
    font-size: 50px;
}

.content-header a, img {
    width: auto;
    height: 30px;
}

.main-container {
    padding: 10px;
    margin-top: 10%;
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    color: black;
}

.vid-container {
    padding: 10px;
}

.vid {
    display: flex;
    justify-content: center;
    align-items: center;
}

iframe {
    width: 560px;
    height: 315px;
    border-radius: 10px;
}

.deksripsi {
    padding: 30px;
}

.deksripsi p {
    text-align: justify;
    font-size: 20px;
    color: #AD6163;
}

.deksripsi h3 {
    color: #760507;
    font-weight: 600;
}

/* Media query untuk tampilan mobile dengan lebar maksimal 480px */
@media only screen and (max-width: 480px) {
    .content-header h3 {
        font-size: 24px; /* Ukuran header lebih kecil di mobile */
    }

    .main-container {
        margin-top: 25%; /* Margin lebih besar untuk menghindari header yang tetap */
    }

    .vid iframe {
        width: 350px; /* Sesuaikan lebar video agar memenuhi lebar layar */
        height: 206px; /* Sesuaikan tinggi video secara proporsional */
    }

    .deksripsi {
        padding: 20px; /* Padding lebih kecil di mobile */
    }

    .deksripsi p {
        font-size: 16px; /* Ukuran teks lebih kecil di mobile */
    }

    .deksripsi h3 {
        font-size: 26px;
    }
}
</style>
<?php
$id_pemulihan = $this->uri->segment(3);
$r = $this->db->query("SELECT * FROM data_pemulihan WHERE id_pemulihan='$id_pemulihan'")->row_object();

?>
<!-- header -->
<div class="header-container">
    <div class="content-header">
          <a href="#" onclick="window.history.back()"><img src="<?php echo site_url('/assets/img/icon/lef.png') ?>" alt=""></a>
    </div>

    <div class="content-header">
        <h3><?php echo $r->judul ?></h3>
    </div>

    <div class="content-header">
       <div style="padding:10px;"></div>
    </div>
</div>

<!-- main -->
<div class="main-container">
    <div class="vid-container">
        <div class="vid">
            <iframe src="https://www.youtube.com/embed/<?php echo $r->link_video ?>" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>

        <div class="deksripsi">
            <h3><?php echo $r->judul ?></h3>
           <?php echo $r->keterangan ?>
        </div>
    </div>
</div>
