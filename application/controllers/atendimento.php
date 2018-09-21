<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atendimento extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index() {
        $this->verificar_sessao();


        $this->load->view('atendimento');
    }

    /*
      public function index($cod = null) {
      $this->verificar_sessao();

      $this->db->where('cod_usuaria', $cod);
      $data['usuaria'] = $this->db->get('usuaria')->result();
      $this->load->view('atendimento', $data);
      }
     */

    public function pesquisar() {
        $this->verificar_sessao();

        $termo = $this->input->post('pesquisar');

        $this->db->where('nome', $termo);
        $this->db->or_where('CPF', $termo);

        $data['usuaria'] = $this->db->get('usuaria')->result();

        $this->load->view('result_pesquisa_dados_aten', $data);
    }

    public function salvar_prontuario() {
        $this->verificar_sessao();

        $data['data_atendimento'] = $this->input->post('data_atendimento');
        $data['qual_curso'] = $this->input->post('qual_curso');
        $data['tipo_atendimento'] = $this->input->post('tipo_atendimento');
        $data['ano_atendimento'] = $this->input->post('ano_atendimento');
        $data['agressor'] = $this->input->post('agressor');
        $data['descricao_caso'] = $this->input->post('desc_caso');
        $dados['descricao'] = $this->input->post('tipo_viol');

        if ($this->db->insert('atendimento_psicologico', $data) && $this->db->insert('violencia', $dados) ) {
            redirect('dashboard');
            
        } else {
            redirect('atendimento');
        }
    }

}
