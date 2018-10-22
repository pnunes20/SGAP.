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
    }

    public function login($indice = null) {
        if ($indice == 1) {
            $data['msg'] = "";
            $this->load->view('includes/msg_erro', $data);
            $teste['key'] = '1';
            $this->load->view('login', $teste);
        } else {
            $teste['key'] = '2';
            $this->load->view('login', $teste);
        }
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
            redirect('agenda/listar_agenda');
        } else {
            redirect('dashboard/login/1');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('dashboard/login');
    }

}
