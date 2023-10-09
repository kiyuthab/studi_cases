<?php
    class Home extends Controller{
        public function index(){
            $data['judul'] = 'Home';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }

        // public function peminjaman(){
        //     $data['judul'] = 'Peminjaman';
        //     $data['pekerjaan'] = 'Bajak Laut';
        //     $this->view('templates/header', $data);
        //     $this->view('home/peminjaman', $data);
        //     $this->view('templates/footer');
        // }
    }

?>