<?php

class DataSiswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();

        $this->view('templates/header', $data);
        $this->view('DataSiswa/index', $data);
        $this->view('templates/footer');
    }

    public function show($id)
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);

        $this->view('templates/header', $data);
        $this->view('DataSiswa/show', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/datasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/datasiswa');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    public function edit()
    {
        if ($this->model('Siswa_model')->editDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/datasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/datasiswa');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Siswa_model')->delete($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/datasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/datasiswa');
            exit;
        }
    }
}
