<?php
namespace App\Models;

use CodeIgniter\Model;
class Modeldatakota extends Model{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('data_kota')->get();
    }

    function simpan($data)
    {
        return $this->db->table('data_kota')->insert($data);
    }

    function hapusdata($idkota)
    {
        return $this->db->table('data_kota')->delete(['idkota'=>$idkota]);
    }

    function ambildata($idkota)
    {
        return $this->db->table('data_kota')->getWhere(['idkota'=>$idkota]);
    }

    function editdata($data, $idkota)
    {
        return $this->db->table('data_kota')->update($data, ['idkota'=>$idkota]);
    }

    function get_luaswilayah()
    {
        return $this->db->table('data_kota')->get()->getResultArray();
    }

    
    
    
}

?>