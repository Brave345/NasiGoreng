<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;

class Menu extends Controller
{
    public function index()
    {
        $model = new MenuModel();
        
        $data['menu'] = $model->findAll();
        return view('menu/index', $data);
    }

    public function create()
    {
        helper(['form']);
    $model = new MenuModel();

    if ($this->request->getMethod() === 'post' && $this->validate([
        'nama' => 'required',
        'harga' => 'required'
    ])) {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga')
        ];
        $model->insert($data);
        return redirect()->to(base_url('/menu'));
    } else {
        $data['validation'] = $this->validator;
        return view('menu/create', $data);
    }
    }

    function edit($id)
{
    $model = new MenuModel();
    $data['menu'] = $model->find($id);

    if ($this->request->getMethod() === 'post' && $this->validate([
        'nama' => [
            'label' => 'Nama Menu',
            'rules' => 'required|max_length[50]'
        ],
        'harga' => [
            'label' => 'Harga',
            'rules' => 'required|decimal'
        ]
    ])) {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga')
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('menu'));
    } else {
        $data['validation'] = $this->validator; // menambahkan variabel validation untuk menampilkan error message
        return view('menu/edit', $data);
    }
}




    public function delete($id)
    {
        $model = new MenuModel();
        $model->delete($id);
        return redirect()->to(base_url('menu'));
    }
}
