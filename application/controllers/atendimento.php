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
        $nome = $this->input->post('nome_usu');
        $cod = $this->input->post('cod_usu');
        if ($nome != '') {
            $this->db->where('nome', $nome);
            $dados['usuaria'] = $this->db->get('usuaria')->result();
            $this->load->view('atendimento', $dados);
        } else {
            $this->db->where('cod_usuaria', $cod);
            $dados['usuaria'] = $this->db->get('usuaria')->result();
            $this->load->view('atendimento', $dados);
        }
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

        $cod = $this->input->post('cod_usuaria');
        $this->db->where('cod_usuaria', $cod);
        $info['usuaria'] = $this->db->get('usuaria')->result();

        foreach ($info['usuaria'] as $in) {
            $nome = $in->nome;
            $CPF = $in->CPF;
        }
        $data['nome'] = $nome;
        $data['cpf'] = $CPF;
        $data['data_atendimento'] = date('Y-m-d');
        $data['qual_curso'] = $this->input->post('qual_curso');
        $data['tipo_atendimento'] = $this->input->post('tipo_atendimento');
        $data['ano_atendimento'] = $this->input->post('ano_atendimento');
        $data['agressor'] = $this->input->post('agressor');
        $data['descricao_caso'] = $this->input->post('desc_caso');
        $dados['descricao'] = $this->input->post('tipo_viol');
        $qdr['descricao'] = $this->input->post('quadro_clinico');

        if ($this->db->insert('atendimento_psicologico', $data) && $this->db->insert('violencia', $dados) && $this->db->insert('quadro_clinico', $qdr)) {
            $this->db->where('CPF', $CPF);
            $this->db->delete('agenda');
            redirect('agenda/listar_agenda');
        } else {
            redirect('atendimento');
        }
    }

    public function listar_prontuario() {
        $this->verificar_sessao();

        $termo = $this->input->post('pesquisar_p');
        if ($termo != '') {
            $this->db->where('nome', $termo);
            $this->db->or_where('CPF', $termo);
            $data['usuaria'] = $this->db->get('usuaria')->result();
            if (count($data['usuaria']) === 0) {
                echo '<span style="color: red">Nenhum Prontuário Encontrado!</span>';
            } else {
                foreach ($data['usuaria'] as $da) {
                    $nome = $da->nome;
                    $CPF = $da->CPF;
                }
                $this->db->where('nome', $nome);
                $this->db->or_where('CPF', $CPF);
                $data['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
                if (count($data['atendimento_psicologico']) === 0) {
                    echo '<span style="color: red">Nenhum Prontuário Encontrado!</span>';
                } else {
                    foreach ($data['atendimento_psicologico'] as $d) {
                        $cod = $d->cod_atendimento;
                    }
                    $this->db->where('cod_tipo_violencia', $cod);
                    $data['violencia'] = $this->db->get('violencia')->result();
                    $this->db->where('cod_quadro_clinico', $cod);
                    $data['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
                    foreach ($data['atendimento_psicologico'] as $da) {
                        echo '<a href="'. base_url("atendimento/prontuario/". '' . $da->cod_atendimento . '').'" class="btn btn-success btn-group">Prontuário de ' . date("d/m/Y", strtotime($da->data_atendimento)) . '</a>';
                    }   
                }
            }
        } else {
            echo '<span style="color: red">Campo Vazio!</span>';
        }
    }

    public function prontuario($cod = null) {
        $this->verificar_sessao();
        $this->db->where('cod_atendimento', $cod);
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        foreach ($dados['atendimento_psicologico'] as $d){
            $cpf = $d->CPF;
        }
        $this->db->where('CPF', $cpf);
        $dados['usuaria'] = $this->db->get('usuaria')->result();
        $this->db->where('cod_quadro_clinico', $cod);
        $dados['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
        $this->db->where('cod_tipo_violencia', $cod);
        $dados['violencia'] = $this->db->get('violencia')->result();

        $this->load->view("listar_prontuario", $dados);
    }

    public function atualizar_prontuario() {
        $this->verificar_sessao();

        $termo = $this->input->post('cpf_usu');
        $this->db->where('CPF', $termo);
        $dados['usuaria'] = $this->db->get('usuaria')->result();
        $this->db->where('CPF', $termo);
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        foreach ($dados['atendimento_psicologico'] as $d) {
            $cod = $d->cod_atendimento;
        }
        $this->db->where('cod_tipo_violencia', $cod);
        $dados['violencia'] = $this->db->get('violencia')->result();
        $this->db->where('cod_quadro_clinico', $cod);
        $dados['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
        $this->load->view('atualizar_prontuario', $dados);
    }

}
