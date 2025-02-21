<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media (max-width: 480px) {
            .container {
                background-color: white;
                padding: 10px;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
        
                color: black;
            }
            
          .home-header {
        background-color: #172169;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 10px;
    }

    .home-header img {
        width: 200px;
        height: auto;
    }
            .main-container {
                padding: 10px;
                margin: 10px;
            }

            .container-welcome {
                padding: 10px;
                margin-top: 20px;
            }

            .container-welcome h3 {
                color: black;
                font-family: 'Poppins', sans-serif;
                font-size: 15px;
            }

            .container-welcome h2 {
                color: black;
                font-family: 'Poppins', sans-serif;
                font-size: 28px;
            }

            .deksripsi-container {
                display: flex;
                gap: 10px;
                justify-content: center;
                align-items: center;
                margin-top: 50px;
                padding: 10px;
            }

           

        .footer-dashboard {
            position: fixed;
    bottom: 0;
    max-width: 1205px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: #172169;
    border-radius:30px 30px 0px 0px;
    z-index: 1000;
    box-sizing: border-box; /* Menjaga padding dalam batasan lebar */
        }

        .icon-container {
            display: flex;
    justify-content: center;
    align-items: center;
    flex: 1; /* Agar setiap icon memiliki ukuran yang sama */
        }
        .icon {
            color: white;
    font-size: 30px; /* Sesuaikan ukuran icon */
    cursor: pointer;
        }
        
        
   .menu {
       padding:10px;
        align-items:center;
       justify-content:center;
       align-content:center;
       display:flex;
   }
   
   .menu-container {
       padding:10,
       width:332px;
       border:1px solid black;
       color:black;
       border-radius:10px;
       display:flex;
       justify-content:space-between;
        align-items: center;
        height:123px;
            margin-top:20px;
       
       
   }
   
   .img-menu {
       width:70px;
       height:70px;
       margin-left:30px;
   }
   
   .judul-menu {
       font-size:35px;
       margin-left:20px;
       font-weight:600;
   }


        }
     


        @media (min-width: 1025px) {
    .container {
       background-color:white;
        background-size: 100% auto; /* Ubah menjadi 100% untuk lebar, dan auto untuk mempertahankan proporsi */
        background-position: top center;
        background-repeat: no-repeat;
        padding: 0px 0px;
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        max-width: 1200px;
        margin: 0 auto;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan efek shadow */
        margin-top: 10px;
        border-radius: 10px;
    }
    
    .home-header {
        background-color: #172169;
        align-items: center;
        justify-content:center;
        align-content:center;
        text-align:center;
        padding:10px;
    }

    .main-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .container-welcome {
        color: black;
        text-align: left;
        margin-bottom: 30px;
        padding-left: 10px; /* Agar lebih sejajar dengan background image */
    }

   .menu {
       padding:10px;
       align-items:center;
       justify-content:center;
       align-content:center;
       display:flex;
      
   }
   
   .menu-container {
       width:600px;
       padding:20,
       color:black;
       border-radius:10px;
       display:flex;
       justify-content:space-between;
        align-items: center;
        border:1px solid black;
        margin-top:20px;
      
        
       
       
   }
   
   .img-menu {
       width:77px;
       height:77px;
       margin-left:20px;
   }
   
   .judul-menu {
       font-size:35px;
       font-weight:600;
   }

  
    #menu1-content a {
                color: #AD6163;
            }

        #menu2-content a {
            color: #6EB2B0;
        }

        .footer-dashboard {
            position: fixed;
    bottom: 0;
    max-width: 1205px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: #172169;
    border-radius:30px 30px 0px 0px;
    z-index: 1000;
    box-sizing: border-box; /* Menjaga padding dalam batasan lebar */
        }

        .icon-container {
            display: flex;
    justify-content: center;
    align-items: center;
    flex: 1; /* Agar setiap icon memiliki ukuran yang sama */
        }
        .icon {
            color: white;
    font-size: 30px; /* Sesuaikan ukuran icon */
    cursor: pointer;
        }

        }




    </style>


    <div class="container">
        <div class="home-header">
            <div>
                <img style="width:300px; height:126px; align-self:center;" src="assets/img/icon/logoheader-home.png">
            </div>
        </div>
        
        <div class="main-container">
            <div class="menu">
                <div>
                    <a style="text-decoration:none; color:black;" href="<?= base_url('OutputData'); ?>">
                           <div class="menu-container">
                    <img class="img-menu" src="assets/img/icon/icon-inputdata.png">
                    <p class="judul-menu">Input Data Customer</h3>
                    <div style="padding:10px; background-color:transparent;"></div>
                </div> 
                    </a>
                
                <a style="text-decoration:none; color:black;" href="<?= base_url('BiayaSewa') ?>">
                    <div class="menu-container">
                    <img class="img-menu" src="assets/img/icon/icon-biayasewa.png">
                    <p class="judul-menu">Biaya Sewa</h3>
                    <div style="padding:10px; background-color:transparent;"></div>
                </div>
                </a>
            
                </div>
            </div>
        </div>
     

        <div class="footer-dashboard">
        <div class="icon-container">
        <i class="fas fa-home icon"></i>
    </div>
    <div class="icon-container">
       <a href="<?= base_url('profile'); ?>"> <i class="fas fa-user-circle icon"></i></a>
    </div>
        </div>

      
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // JavaScript untuk membuat slider otomatis
    var myCarousel = document.querySelector('#carouselExample');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000, // Set waktu pergeseran otomatis (3000ms = 3 detik)
        wrap: true, // Membuat slider kembali ke awal setelah gambar terakhir
        pause: 'hover' // Pause otomatis ketika mouse mengarah ke slider
    });
    
    </script>
