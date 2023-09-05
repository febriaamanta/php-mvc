<?php

class Blog_model
{
    private $blog = [
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Models",
        ],
        [
            "penulis" => "Fitra Maulana",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Models",
        ],
        [
            "penulis" => "Guru RPL",
            "judul" => "Belajar PHP MVC",
            "tulisan" => "Models",
        ],
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }
}
