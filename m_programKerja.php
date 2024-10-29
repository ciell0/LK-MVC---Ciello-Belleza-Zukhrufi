<?php

require "koneksiMVC.php";

class m_programKerja {
    private $mysqli;

    public function __construct()
    {
        global $mysqli; 
        $this->mysqli = $mysqli;
    }

    //setter program kerja (CREATE)
    public function setProgramKerja ($nama, $surat){
        $query = "INSERT INTO proker (namaProgram, suratKeterangan)
                  VALUES 
                  ('$nama','$surat')";
        $this->mysqli->query($query);
    }

    // UPDATE tabel
    public function update($index, $nama, $surat){
        $query = "UPDATE proker 
                  SET namaProgram = '$nama', suratKeterangan = '$surat'
                  WHERE namaProgram = '$index'";
        $this->mysqli->query($query);         
    }

    // DELETE tabel
    public function delete($nama){
        $query = "DELETE FROM proker
                  WHERE namaProgram = '$nama'";
        $this->mysqli->query($query);
    }

    //getter program kerja
    public function getSemuaProgramKerja (){
        $query = "SELECT * FROM proker";
        $result = $this->mysqli->query($query);

        $rows = [];
        while ($row = $result->fetch_object()) {
            $rows[] = $row;
        }

        return $rows;
    }

    //
}