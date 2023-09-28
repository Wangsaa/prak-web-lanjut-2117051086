<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    protected $helpers=['form'];
    public function index()
    {
        //
    }
    public function profile($nama ="", $kelas ="", $npm =""){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }
    public function create(){
        $kelas =[
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
        ];
        $data =[
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }
    public function store(){

        $kelasModel = new KelasModel();
        if($this->request->getVar('kelas')!= ''){
            $kelas_select = $kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas ='';
        }
        $userModel = new UserModel();

        if (!$this->validate([
            'nama'  => 'required|is_unique[user.nama]',
            'npm'   => 'required|is_unique[user.npm]',
            'kelas' => 'required' 
        ])){
            session()->setFlashdata('nama_kelas');
            return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        }

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);
        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        return view('profile', $data);
    }
}