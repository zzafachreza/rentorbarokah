<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RencanaPemulihan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    function insert(){

        print_r($_POST);

        $a1 = !empty($_POST['a1'])?$_POST['a1']:0;
        $a2 = !empty($_POST['a2'])?$_POST['a2']:0;
        $a3 = !empty($_POST['a3'])?$_POST['a3']:0;
        $a4 = !empty($_POST['a4'])?$_POST['a4']:0;
        $a5 = !empty($_POST['a5'])?$_POST['a5']:0;
        $a6 = !empty($_POST['a6'])?$_POST['a6']:0;
        $a7 = !empty($_POST['a7'])?$_POST['a7']:0;
        $a8 = !empty($_POST['a8'])?$_POST['a8']:0;
        $a9 = !empty($_POST['a9'])?$_POST['a9']:0;
        $a10 = !empty($_POST['a10'])?$_POST['a10']:0;
        $a11 = !empty($_POST['a11'])?$_POST['a11']:0;

        $fid_pengguna = $_SESSION['id_pengguna'];

        $sql="INSERT INTO data_mobilisasi(
            fid_pengguna,
            a1,
            a2,
            a3,
            a4,
            a5,
            a6,
            a7,
            a8,
            a9,
            a10,
            a11

         ) VALUES(

                '$fid_pengguna',
                '$a1',
                '$a2',
                '$a3',
                '$a4',
                '$a5',
                '$a6',
                '$a7',
                '$a8',
                '$a9',
                '$a10',
                '$a11'
            )";

            if($this->db->query($sql)){
                $this->session->set_flashdata('update', 'Data berhasil di simpan !');
            redirect('RencanaPemulihan/fasemobilisasi/');
            }




    }

    public function fasemobilisasi()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Fase Mobilisasi';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/RencanaPemulihan/fasemobilisasi/fasemobilisasi', $data);
        $this->load->view('templates/footer');
    }


    public function tahapanmobilisasi()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/RencanaPemulihan/tahapanmobilisasi/tahapanmobilisasi', $data);
        $this->load->view('templates/footer');
    }

    public function tahapanmobilisasi_detail()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi Detail';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/RencanaPemulihan/tahapanmobilisasi/video', $data);
        $this->load->view('templates/footer');
    }

    public function  latihanrentangerak()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Latihan Rentan Gerak';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/RencanaPemulihan/latihanrentangerak/latihanrentangerak', $data);
        $this->load->view('templates/footer');
    }

    public function latihanrentangerak_detail()
    {
        // Set judul halaman
        $data['title'] = 'Mode Aktif | Tahapan Mobilisasi Detail';

        // Langsung load view tanpa pengecekan user dan role_id
        $this->load->view('templates/header', $data);
        // $this->load->view('topbar', $data);
        $this->load->view('page/RencanaPemulihan/latihanrentangerak/video', $data);
        $this->load->view('templates/footer');
    }
}
