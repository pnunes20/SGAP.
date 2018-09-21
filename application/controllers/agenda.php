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

    public function agendamento() {
        $this->verificar_sessao();
        
        $this->db->select('*');
        
        $dados['agenda'] = $this->db->get('agenda')->result();
        
        $this->load->view('agendamento',$dados);
    }

    public function agendar() {
        $this->verificar_sessao();

        $data['nome'] = $this->input->post('nome');
        $data['CPF'] = $this->input->post('CPF');
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

        $data['nome'] = $this->input->post('nome');
        $data['CPF'] = $this->input->post('CPF');
        $data['data_agenda'] = $this->input->post('data_agenda');
        $data['horario_agenda'] = $this->input->post('horario_agenda');

        $this->db->where('cod_agenda', $cod);
        if ($this->db->update('agenda', $data)) {
            redirect('dashboard');
        } else {
            redirect('dashboard');
        }
    }

    public function pesquisar() {
        $this->verificar_sessao();

        $termo = $this->input->post('pesquisar');

        $this->db->where('nome', $termo);
        $this->db->or_where('CPF', $termo);

        $data['usuaria'] = $this->db->get('usuaria')->result();

        $this->load->view('result_pesquisa_dados', $data);
    }

    public function agendamento_dados($cod = null) {

        $this->verificar_sessao();

        $this->db->where('cod_usuaria', $cod);
        $data['usuaria'] = $this->db->get('usuaria')->result();

        $this->load->view('agendamento_dados', $data);
    }

}
