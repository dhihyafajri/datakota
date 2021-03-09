<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modeldatakota;

class Datakota extends Controller 
        {
        public function index(){
            $dtk = new Modeldatakota();
            $data = [
                'tampildata' => $dtk->tampildata()->getResult()
            ];

            echo View('Viewtampildatakota',$data);
        }

        public function formtambah()
        {
            helper('form');

            echo View('Viewformtambah');
        }

        public function simpandata()
        {
            $data = [
                'namakota' => $this->request->getpost('kota'),
                'namapemimpin' => $this->request->getpost('pemimpin'),
                'tglberdiri' => $this->request->getpost('tanggal'),
                'jmlpenduduk' => $this->request->getpost('penduduk'),
                'luaswilayah' => $this->request->getpost('wilayah'),
                'jeniskota' => $this->request->getpost('jenis'),
                'keunggulan' => $this->request->getpost('keunggulan'),
            ];

            $dtk = new Modeldatakota();

            $simpan = $dtk->simpan($data);

            if($simpan){
                return redirect()->to('/Datakota/index');
            }
        }

        public function hapus(){
            $uri = service('uri');
            $idkota = $uri->getSegment('3');

            $dtk = new Modeldatakota();
            
            $dtk->hapusdata($idkota);

            return redirect()->to('/Datakota/index');
        }

        public function formedit(){
            helper('form');
            $uri = service('uri');
            $idkota = $uri->getSegment('3');

            $dtk = new Modeldatakota();

            $ambildata = $dtk->ambildata($idkota);

            if (count($ambildata->getResult())> 0){
                $row = $ambildata->getRow();
                $data=[
                    'idkota'=>$idkota,
                    'kota' => $row->namakota,
                    'pemimpin' =>  $row->namapemimpin,
                    'tanggal' => $row->tglberdiri,
                    'penduduk' => $row->jmlpenduduk,
                    'wilayah' => $row->luaswilayah,
                    'jenis' => $row->jeniskota,
                    'keunggulan' => $row->keunggulan,
                ];

                echo View('Viewformedit', $data);
            }
        }

        public function updatedata(){

            $nim = $this->request->getpost('idkota');
            
            $data = [
                'namakota' => $this->request->getpost('kota'),
                'namapemimpin' => $this->request->getpost('pemimpin'),
                'tglberdiri' => $this->request->getpost('tanggal'),
                'jmlpenduduk' => $this->request->getpost('penduduk'),
                'luaswilayah' => $this->request->getpost('wilayah'),
                'jeniskota' => $this->request->getpost('jenis'),
                'keunggulan' => $this->request->getpost('keunggulan'),
            ];

            $dtk = new Modeldatakota();

            $simpan = $dtk->editdata($data, $nim);

            if($simpan){
                return redirect()->to('/Datakota/index');
            }
        }

        public function chart(){
            helper('form');
            
            $dtk = new Modeldatakota();

            $data=array(
                'luas_wilayah'=>$dtk->get_luaswilayah(),
            );


            echo View('Viewtampilchart',$data);
            
        }

        public function insert_data()
        {
            $data=$this->input->post();
            unset($data['sub']);
            $this->db->insert('idkota',$data);
            $lastid=$this->db->insert_id();
            echo $lastid;
        }

        
        
        
}

?>