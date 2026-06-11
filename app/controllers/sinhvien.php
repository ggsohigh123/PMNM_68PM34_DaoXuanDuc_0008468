<?php
require_once '../app/core/controller.php';
class sinhvien extends controller
{
    public function index()
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhviens = $sinhvienModel->getAllSinhvien();

        $this->view("sinhvien/index", ['sinhviens' => $sinhviens, 'title' => 'Danh sach sinh vien']);
    }

    public function create()
    {

        require_once "../app/views/sinhvien/create.php";
    }
}