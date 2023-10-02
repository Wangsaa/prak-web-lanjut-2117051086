<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {   
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    protected $helpers=['form'];
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
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
        
        $kelas = $this->kelasModel->getKelas();
        $data =[
            'title' => 'create_user',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }
    public function store(){

        if($this->request->getVar('kelas')!= ''){
            $kelas_select = $this->kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas ='';
        }
       

        if (!$this->validate([
            'nama'  => 'required|is_unique[user.nama]',
            'npm'   => 'required|is_unique[user.npm]',
            'kelas' => 'required' 
        ])){
            session()->setFlashdata('nama_kelas');
            return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        }

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);
        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        return redirect()->to('/user');
    }
}
