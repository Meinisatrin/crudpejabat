<?php
class Pejabat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pejabat_model');
        $this->load->model('Master_pejabat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pejabat'] = $this->Pejabat_model->get_all();
        $data['datetime_now'] = date('Y-m-d H:i:s');
        $this->load->view('pejabat_master/index', $data);
    }

    // public function create()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $data = array(
    //             'nama' => $this->input->post('nama'),
    //             'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    //             'alamat' => $this->input->post('alamat'),
    //             'm_pejabat_id' => $this->input->post('m_pejabat_id'),
    //             // 'tglBuat' => date('Y-m-d H:i:s'),
    //             // 'tglUbah' => date('Y-m-d H:i:s')
    //         );
    //         $this->Pejabat_model->insert($data);
    //         redirect('pejabat');
    //     } else {
    //         $this->load->model('Master_pejabat_model');
    //         $data['nama'] = $this->Master_pejabat_model->get_all();

    //         $this->load->view('pejabat_master/create', $data);
    //     }
    // }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $data = array(
               'nama' => $this->input->post('nama'),
               'jenis_kelamin' => $this->input->post('jenis_kelamin'),
               'alamat' => $this->input->post('alamat'),
               'm_pejabat_id' => $this->input->post('m_pejabat_id'),
       /*         $tglBuat => date('Y-m-d H:i:s'),
               $tglUbah => date('Y-m-d H:i:s') */
           );
            $this->Pejabat_model->insert($data);
            redirect('pejabat');//nama controller
        } else {
       
         //tambah
        $this->load->model('Master_pejabat_model');
        $data['pejabat_options'] = $this->Master_pejabat_model->get_pejabat_options();
        
        $this->load->view('pejabat_master/create', $data);
        }        
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'm_pejabat_id' => $this->input->post('m_pejabat_id'),
                // 'tglBuat' => date('Y-m-d H:i:s'),
                // 'tglUbah' => date('Y-m-d H:i:s')
            );
            $this->Pejabat_model->update($id, $data);
            redirect('pejabat');
        } else {

            $this->load->model('Master_pejabat_model');
            $data['pejabat_options'] = $this->Master_pejabat_model->get_pejabat_options();
            $data['pejabat'] = $this->Pejabat_model->get_by_id($id);
            $this->load->view('pejabat_master/edit', $data);
        }
    }

    public function update($id) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'm_pejabat_id' => $this->input->post('m_pejabat_id'),
        );
        $this->Pejabat_model-->update($id, $data);
        redirect('pejabat');
    }

    public function delete($id)
    {
        $this->Pejabat_model->delete($id);
        redirect('pejabat');
    }

}
