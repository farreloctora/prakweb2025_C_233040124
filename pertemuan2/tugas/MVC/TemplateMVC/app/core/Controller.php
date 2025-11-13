<?php

class Controller
{
    // controller view methodnya
    public function view($view, $data = [])
    {
        // buat variabel dari array $data agar view bisa akses langsung
        if (!empty($data)) {
            extract($data);
        }

        require_once '../app/views/' . $view . '.php';
    }


    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
