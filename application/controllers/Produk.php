<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');

    }

    public function index($status = '')
    {
     
      $status = $this->input->get('status');
      $data['status'] = $status;
      if($status == ''){
        $data['produk']=$this->Produk_model->view()->result_array();
      }else{
        $data['produk']=$this->Produk_model->view_by_status($status)->result_array();
        
      }
      $this->load->view('produk/index',$data);
    }
    public function API_fastprint()
    {
        $url = 'https://recruitment.fastprint.co.id/tes/api_tes_programmer/';
        $api = get_headers($url, true);
        $username = strtok($api['Credentials-Username'], " ");
        $password = md5('bisacoding-' . date("d-m-y"));
        $data = array(
            "username" => $username,
            "password" => $password,
        );
        $options = array(
            "http" => array(
                "method" => "POST",
                "header" => "Content-Type: application/x-www-form-urlencoded",
                "content" => http_build_query($data),
            ),
        );
        $produk = file_get_contents($url, false, stream_context_create($options));
        $data = json_decode($produk, true);
        foreach ($data['data'] as $dataProduk) {
            $id_produk = intval($dataProduk['id_produk']);
            $nama_produk = $dataProduk['nama_produk'];
            $kategori = $dataProduk['kategori'];
            $harga = $dataProduk['harga'];
            $status = $dataProduk['status'];
            echo $id_produk.'<br>';
            echo $nama_produk.'<br>';
            echo $harga.'<br>';
            echo $kategori.'<br>';
            echo $status.'<br>';
            echo '------------------------------<br>';
            // INPUT data json in Database
            //   $data_produk = array(
            //     'id_produk' => $id_produk,
            //     'nama_produk' => $nama_produk,
            //     'kategori' => $kategori,
            //     'harga' => $harga,
            //     'status' => $status,
            //   );
            //   $this->Produk_model->save('produk',$data_produk);
            // }

        }

    }
    public function tambah_data()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE) {
            // $data['produk'] = $this->Produk_model->view_by_id($id)->row_array();
            $data['kategori_data'] = $this->Produk_model->kategori()->result_array();
            $data['status_data'] = $this->Produk_model->status()->result_array();
            $this->load->view('produk/tambah',$data);
            
        } else {
            $data_produk = array(
                    'nama_produk' => $this->input->post('name'),
                    'kategori' => $this->input->post('kategori'),
                    'harga' => $this->input->post('harga'),
                    'status' => $this->input->post('status'),
                  );
                  $this->Produk_model->save('produk',$data_produk);
                  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan !
            </div>');
                  redirect('produk');
        }
        
    }
    public function edit($id)
    {
        $data['produk'] = $this->Produk_model->view_by_id($id)->row_array();
        $data['kategori_data'] = $this->Produk_model->kategori()->result_array();
        $data['status_data'] = $this->Produk_model->status()->result_array();
        $this->load->view('produk/edit',$data);

    }
    public function edit_data()
    {
        $id = $this->input->post('id');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');
        
        if ($this->form_validation->run() == false) {
            $this->edit($id);
        } else {
            $data_produk = array(
                'nama_produk' => $this->input->post('name'),
                'kategori' => $this->input->post('kategori'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status'),
            );
            $this->Produk_model->edit($id,'produk',$data_produk);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Diubah !</div>');
            
            redirect('produk','refresh');
            
        }
        
    }
    public function delete($id)
    {
        $this->Produk_model->delete($id,'produk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus !</div>');

        redirect('produk','refresh');
        
    }
}

/* End of file Produk.php */
