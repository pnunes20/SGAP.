<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        $this->db->select('*');  
        
        $this->db->order_by('data_agenda');
        $this->db->order_by('horario_agenda');
        
        $dados['agenda'] = $this->db->get('agenda')->result();
        $this->load->view('listar_agenda',$dados);
    }

    public function login() {
        $this->load->view('login');
    }   

    public function logar() {

        $email = $this->input->post('email');
        $senha = sha1($this->input->post('senha'));

        $this->db->where('senha', $senha);
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $data['login'] = $this->db->get('login')->result();

        if (count($data['login']) == 1) {
            $dados['nome'] = $data['login'][0]->nome;
            $dados['id'] = $data['login'][0]->cod_login;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('dashboard');
        } else {
            redirect('dashboard/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('dashboard/login');
    }      

}
