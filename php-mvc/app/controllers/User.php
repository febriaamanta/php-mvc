<?php

class User extends Controller
{
    public function index()
    {
        $data['judul'] = "User";

        $this->view('templates/header', $data);
        $this->view('User/index');
        $this->view('templates/footer');
    }

    public function profile($name = "Febria Amanta", $pekerjaan = "Pelajar")
    {
        $data['judul'] = "About Me";
        $data['name'] = $name;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('templates/header', $data);
        $this->view('User/profile', $data);
        $this->view('templates/footer');
    }
}
