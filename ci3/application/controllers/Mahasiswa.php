<?php
class Mahasiswa extends CI_Controller{
    //membuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

        // buat object model 1 dan nilai nya
        $this->mhs1->id=1;
        $this->mhs1->nim='001';
        $this->mhs1->nama='Faiz Fikri';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model','mhs2');
        //buat object 2 dan nilai nya
        $this->mhs2->id=2;
        $this->mhs2->nim='002';
        $this->mhs2->nama='Sri Ayu';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.5;

        // simpan object tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs']= $list_mhs;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>