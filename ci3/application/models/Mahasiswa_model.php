<?php
class Mahasiswa_model extends CI_Model{
    //Buat Property atau variabel
    public $id, $nim, $nama, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>