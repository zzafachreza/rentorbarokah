<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Load database library
        $this->load->database();
        // Load session library jika belum di-load
        $this->load->library('session');
    }

    public function index()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Profile';

        if (isset($_SESSION['telepon'])) {
           
            // Load view dengan data user
            $this->load->view('templates/header', $data);
            $this->load->view('page/profile/index', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika user tidak ditemukan, redirect ke halaman login
            $this->session->set_flashdata('error', 'Anda belum login!');
            redirect('login');
        }

    
          
        
    }

    public function edit()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Edit Profile';

        if (isset($_SESSION['telepon'])) {
           
            // Load view dengan data user
            $this->load->view('templates/header', $data);
            $this->load->view('page/profile/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // Jika user tidak ditemukan, redirect ke halaman login
            $this->session->set_flashdata('error', 'Anda belum login!');
            redirect('login');
        }

    
          
        
    }

    function update(){

            $id_pengguna = $_POST['id_pengguna'];

            $nama_lengkap = $_POST['nama_lengkap'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $operasi = $_POST['operasi'];
            $waktu_operasi = $_POST['waktu_operasi'];
            $telepon = $_POST['telepon'];
          


            if(!empty($_POST['password'])){
                 $password  = sha1($_POST['password']);

                 $sql="UPDATE data_pengguna Set
                        nama_lengkap='$nama_lengkap',
                        tempat_lahir='$tempat_lahir',
                        tanggal_lahir='$tanggal_lahir',
                        jenis_kelamin='$jenis_kelamin',
                        operasi='$operasi',
                        waktu_operasi='$waktu_operasi',
                        telepon='$telepon',
                        password='$password' WHERE id_pengguna='$id_pengguna';";
                        

            }else{

                        $sql="UPDATE data_pengguna Set
                        nama_lengkap='$nama_lengkap',
                        tempat_lahir='$tempat_lahir',
                        tanggal_lahir='$tanggal_lahir',
                        jenis_kelamin='$jenis_kelamin',
                        operasi='$operasi',
                        waktu_operasi='$waktu_operasi',
                        telepon='$telepon' WHERE id_pengguna='$id_pengguna';";
            }


            if($this->db->query($sql)){


                    $_SESSION = $this->db->query("SELECT * FROM data_pengguna WHERE id_pengguna='$id_pengguna'")->row_array();


                           // Jika user tidak ditemukan, redirect ke halaman login
                    $this->session->set_flashdata('update', 'Profile Berhasil di update !');
                    redirect('dashboard');
            }
            
            
            
            
            
            
            
    }

    function logout(){
                  // Jika user tidak ditemukan, redirect ke halaman login
                    unset($_SESSION);
                    $this->session->set_flashdata('update', 'Kamu berhasil logout !');
                    redirect('login');
    }
}
