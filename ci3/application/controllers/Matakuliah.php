<?php
class Matakuliah extends CI_Controller{
    public function index(){
        $this->load->model('matakuliah_model', 'mt1');
        $this->mt1->id=1;
        $this->mt1->nama='Pemrograman Web 2';
        $this->mt1->sks= 3;
        $this->mt1->kode= 408;

        $this->load->model('matakuliah_model', 'mt2');
        $this->mt2->id=2;
        $this->mt2->nama='Basis Data';
        $this->mt2->sks= 4;
        $this->mt2->kode= 320;

        $this->load->model('matakuliah_model', 'mt3');
        $this->mt3->id=3;
        $this->mt3->nama='UI/UX';
        $this->mt3->sks= 3;
        $this->mt3->kode= 193;

        $this->load->model('matakuliah_model', 'mt4');
        $this->mt4->id=4;
        $this->mt4->nama='Jaringan Komputer';
        $this->mt4->sks= 3;
        $this->mt4->kode= 266;

        $this->load->model('matakuliah_model', 'mt5');
        $this->mt5->id=5;
        $this->mt5->nama='Statistik dan Probabilitas';
        $this->mt5->sks= 2;
        $this->mt5->kode= 442;

        $list_mt = [$this->mt1, $this->mt2, $this->mt3, $this->mt4, $this->mt5];
        $data['list_mt']= $list_mt;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>