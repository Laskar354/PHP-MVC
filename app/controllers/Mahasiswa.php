<?php

class Mahasiswa extends Controller {

    public function index()
    {
        $data["judul"] = "Data Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();

        $this->view("templates/header", $data);
        $this->view("templates/navbar");
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer", $data);
    }

    public function detail_mhs($id)
    {
        $data["judul"] = "Detail Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->getMahasiswaById($id);

        $this->view("templates/header", $data);
        $this->view("templates/navbar");
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer", $data);
    }


    public function tambah()
    {
        if($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0) 
        {
            Flasher::setFlasher("berhasil", "ditambahkan", "success");
            header('Location:'. BASEURL .'/Mahasiswa');
        } else {
            Flasher::setFlasher("gagal", "ditambahkan", "danger");
            header('Location:'. BASEURL .'/Mahasiswa');
        }
    }

    public function delete_mhs($id)
    {
        if($this->model("Mahasiswa_model")->deleteDataMahasiswa($id) > 0) 
        {
            Flasher::setFlasher("berhasil", "dihapus", "success");
            header('Location:'. BASEURL .'/Mahasiswa');
        } else {
            Flasher::setFlasher("gagal", "dihapus", "danger");
            header('Location:'. BASEURL .'/Mahasiswa');
        }
    }


    // Method untuk data ke ajax
    public function dataUbah()
    {

        $id = $_POST['id'];
        echo json_encode($this->model("Mahasiswa_model")->getMahasiswaById($id));

    }

    //Method Edit Data Mahasiswa
    public function edit()
    {
        if($this->model("Mahasiswa_model")->editDataMahasiswa($_POST) > 0)
        {
            Flasher::setFlasher('berhasil', 'di edit', 'success');
            header('Location:'. BASEURL.'/Mahasiswa');
        } else {
            Flasher::setFlasher('gagal', 'di edit', 'danger');
            header('Location:'. BASEURL.'/Mahasiswa');
        }
    }

    public function cari()
    {
        $keyword = $_POST["keyword"];
        
        $data["judul"] = "Data Mahasiswa";
        $data["mhs"] = $this->model("Mahasiswa_model")->cariDataMahasiswa($keyword);

        $this->view("templates/header", $data);
        $this->view("templates/navbar");
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer", $data);
    }
}


?>