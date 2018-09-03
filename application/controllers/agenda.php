<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        $this->load->view('agenda');
    }

    public function agendar() {
        $this->verificar_sessao();
        $data['usuaria'] = $this->input->post('usuaria');
        $data['cpf_usuaria'] = $this->input->post('cpf_usuaria');
        $data['data_agenda'] = $this->input->post('data_agenda');
        $data['horario_agenda'] = $this->input->post('horario_agenda');

        if ($this->db->insert('agenda', $data)) {
            redirect('dashboard');
        } else {
            redirect('dashboard');
        }
    }

    public function excluir($cod = null) {

        $this->verificar_sessao();
        $this->db->where('cod_agenda', $cod);
        if ($this->db->delete('agenda')) {
            redirect('dashboard');
        } else {
            redirect('dashboard');
        }
    }

    public function editar($cod = null) {

        $this->verificar_sessao();
        $this->db->where('cod_agenda', $cod);
        $data['agenda'] = $this->db->get('agenda')->result();



        $this->load->view('editar_agenda', $data);
    }

    public function salva_editar() {
        $this->verificar_sessao();

        $cod = $this->input->post('cod_agenda');
        
        $data['usuaria'] = $this->input->post('usuaria');
        $data['cpf_usuaria'] = $this->input->post('cpf_usuaria');
        $data['data_agenda'] = $this->input->post('data_agenda');
        $data['horario_agenda'] = $this->input->post('horario_agenda');

        $this->db->where('cod_agenda', $cod);
        if ($this->db->update('agenda', $data)) {
            redirect('dashboard');
        } else {
            redirect('dashboard');
        }
    }

}
