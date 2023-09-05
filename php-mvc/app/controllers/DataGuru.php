<?php

class DataGuru extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Guru";
        $data['guru'] = $this->model('Guru_model')->getDataGuru();

        $this->view('templates/header', $data);
        $this->view('DataGuru/index', $data);
        $this->view('templates/footer');
    }
}
