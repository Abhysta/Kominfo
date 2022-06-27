<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Form6 extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aduan_pengelolaan_website');
        
    }
    

    public function index()
    {
        $this->load->view('layanan/header');
        $this->load->view('layanan/form6');
        $this->load->view('layanan/footer');
    }

    public function upload()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('opd', 'Opd', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            $this->form_validation->set_rules('url', 'Url', 'required');
            $this->form_validation->set_rules('no_telp', 'No_telp', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
            $this->form_validation->set_rules('riwayat', 'Riwayat', 'required');

            $status = "Proses";
            $data_arr = array (
                'nama' => $this->input->post('nama'),
                'opd' => $this->input->post('opd'),
                'jabatan' => $this->input->post('jabatan'),
                'url' => $this->input->post('url'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'alasan' => implode(',', $this->input->post('alasan')),
                'keterangan' => $this->input->post('keterangan'),
                'riwayat' => $this->input->post('riwayat'),
                'status' => $status
            );

            $result = $this->m_aduan_pengelolaan_website->upload_db($data_arr);

            if ($result) {
                $this->session->set_flashdata('msg', 'Berhasil Mengirim Data');
                redirect('status','refresh');
            } else {
                $this->session->set_flashdata('msg', 'Gagal Mengirim Data');
                redirect('form6','refresh');
            }
        }
    }

}

/* End of file Form6.php */


?>