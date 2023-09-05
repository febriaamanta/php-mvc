<?php

class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = "Blog";
        $data['blog'] = $this->model('Blog_model')->getAllBlog();

        $this->view('templates/header', $data);
        $this->view('Blog/index', $data);
        $this->view('templates/footer');
    }
}