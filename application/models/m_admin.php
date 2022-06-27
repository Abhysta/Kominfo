<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    //Diterima
    public function acc_webdes(){
        $this->db->select('status');
        $this->db->from('website_desa');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }

    public function acc_hakaksesweb(){
        $this->db->select('status');
        $this->db->from('hak_akses_website');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }

    public function acc_maturbup(){
        $this->db->select('status');
        $this->db->from('hak_akses_matur_bupati');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }
    public function acc_fasinter(){
        $this->db->select('status');
        $this->db->from('fasilitas_inter_wifi');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }
    public function acc_fasvid(){
        $this->db->select('status');
        $this->db->from('fasilitas_video_conference');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }
    public function acc_aduanweb(){
        $this->db->select('status');
        $this->db->from('aduan_pengelolaan_website');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }
    public function acc_aduaninter(){
        $this->db->select('status');
        $this->db->from('aduan_infrastruktur_jaringan_inter');
        $this->db->where('status','Diterima'); 
        return $this->db->get()->num_rows(); 
    }

    //Proses
    public function proses_webdes(){
        $this->db->select('status');
        $this->db->from('website_desa');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }

    public function proses_hakaksesweb(){
        $this->db->select('status');
        $this->db->from('hak_akses_website');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }

    public function proses_maturbup(){
        $this->db->select('status');
        $this->db->from('hak_akses_matur_bupati');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }
    public function proses_fasinter(){
        $this->db->select('status');
        $this->db->from('fasilitas_inter_wifi');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }
    public function proses_fasvid(){
        $this->db->select('status');
        $this->db->from('fasilitas_video_conference');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }
    public function proses_aduanweb(){
        $this->db->select('status');
        $this->db->from('aduan_pengelolaan_website');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }
    public function proses_aduaninter(){
        $this->db->select('status');
        $this->db->from('aduan_infrastruktur_jaringan_inter');
        $this->db->where('status','Proses'); 
        return $this->db->get()->num_rows(); 
    }

    //DItolak
    public function dc_webdes(){
        $this->db->select('status');
        $this->db->from('website_desa');
        $this->db->where('status','Ditolak'); 
        return $this->db->get()->num_rows(); 
    }

    public function dc_hakaksesweb(){
        $this->db->select('status');
        $this->db->from('hak_akses_website');
        $this->db->where('status','Ditolak'); 
        return $this->db->get()->num_rows(); 
    }

    public function dc_maturbup(){
        $this->db->select('status');
        $this->db->from('hak_akses_matur_bupati');
        $this->db->where('status','Ditolak'); 
        return $this->db->get()->num_rows(); 
    }
    public function dc_fasinter(){
        $this->db->select('status');
        $this->db->from('fasilitas_inter_wifi');
        $this->db->where('status','Ditolak'); 
        return $this->db->get()->num_rows(); 
    }
    public function dc_fasvid(){
        $this->db->select('status');
        $this->db->from('fasilitas_video_conference');
        $this->db->where('status','Ditolak'); 
        return $this->db->get()->num_rows(); 
    }
    public function dc_aduanweb(){
        $this->db->select('status');
        $this->db->from('aduan_pengelolaan_website');
        $this->db->where('status','DItolak'); 
        return $this->db->get()->num_rows(); 
    }
    public function dc_aduaninter(){
        $this->db->select('status');
        $this->db->from('aduan_infrastruktur_jaringan_inter');
        $this->db->where('status','Ditolak'); 
        return $this->db->get()->num_rows(); 
    }

    //Total
    public function all_webdes(){
        $this->db->select('status');
        $this->db->from('website_desa');
        return $this->db->get()->num_rows(); 
    }

    public function all_hakaksesweb(){
        $this->db->select('status');
        $this->db->from('hak_akses_website');
        return $this->db->get()->num_rows(); 
    }

    public function all_maturbup(){
        $this->db->select('status');
        $this->db->from('hak_akses_matur_bupati');
        return $this->db->get()->num_rows(); 
    }
    public function all_fasinter(){
        $this->db->select('status');
        $this->db->from('fasilitas_inter_wifi');
        return $this->db->get()->num_rows(); 
    }
    public function all_fasvid(){
        $this->db->select('status');
        $this->db->from('fasilitas_video_conference');
        return $this->db->get()->num_rows(); 
    }
    public function all_aduanweb(){
        $this->db->select('status');
        $this->db->from('aduan_pengelolaan_website');
        return $this->db->get()->num_rows(); 
    }
    public function all_aduaninter(){
        $this->db->select('status');
        $this->db->from('aduan_infrastruktur_jaringan_inter');
        return $this->db->get()->num_rows(); 
    }

}

/* End of file M_admin.php */


?>