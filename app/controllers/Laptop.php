<?php
    class Laptop extends Controller{
        public function index(){
            $data['judul'] = 'Data Buku';
            $data['laptop'] = $this->model('LaptopModel')->getAllLaptop();
            $this->view('templates/header', $data);
            $this->view('home/peminjaman', $data);
            $this->view('templates/footer');
        }

        public function tambah(){
            $data['judul'] = 'Tambah Peminjaman';
            $this->view('templates/header', $data);
            $this->view('laptop/create');
            $this->view('templates/footer');
        }

        public function simpanLaptop(){
            if($this->model('LaptopModel')->tambahLaptop($_POST) > 0){
                header('location: ' . BASE_URL . '/laptop/index');
                exit;
            }else{
                header('location: ' . BASE_URL . '/laptop/index');
                exit;
            }
        }

        public function edit($id){
            $data['judul'] = 'Edit Peminjaman';
            $data['laptop'] = $this->model('LaptopModel')->getLaptopById($id);
            $this->view('templates/header', $data);
            $this->view('laptop/edit', $data);
            $this->view('templates/footer');
        }

        public function updateLaptop(){
            if($this->model('LaptopModel')->updateDataLaptop($_POST) > 0){
                header('location: ' .   BASE_URL . '/laptop/index');
                exit;
            }else{
                header('location: ' .   BASE_URL . '/laptop/index');
                exit;
            }
        }

        public function hapus($id){
            if($this->model('LaptopModel')->deleteLaptop($id) > 0){
                header('location: ' . BASE_URL . '/laptop/index');
                exit;
            }else{
                header('location: ' . BASE_URL . '/laptop/index');
                exit;
            }
        }

        public function cari(){
            $data['peminjaman'] = 'Data Peminjam';
            $data['laptop'] = $this->model('LaptopModel')->cariLaptop($_POST['search']);
            $this->view('templates/header', $data);
            $this->view('home/peminjaman', $data);
            $this->view('templates/footer');
        }
    }
?>