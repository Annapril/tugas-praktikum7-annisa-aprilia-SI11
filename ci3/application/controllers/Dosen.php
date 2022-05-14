<?php
class Dosen extends CI_Controller{
    public function index(){
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn=001;
        $this->dsn1->nama='Rhaffa Izzatul';
        $this->dsn1->gender='P';
        $this->dsn1->pendidikan='S2 Akuntansi';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn=002;
        $this->dsn2->nama='Fahreza Hamdi';
        $this->dsn2->gender='L';
        $this->dsn2->pendidikan='S2 Teknologi Informatika';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn=003;
        $this->dsn3->nama='Alvaro Pratama';
        $this->dsn3->gender='L';
        $this->dsn3->pendidikan='S1 Sastra Inggris';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']= $list_dsn;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>