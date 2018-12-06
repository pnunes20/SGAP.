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
        $CPF = $this->input->post('cpf_usu');
        $cod = $this->input->post('cod_usu');

        if ($CPF != '') {
            $this->db->where('CPF', $CPF);
            $dados['usuaria'] = $this->db->get('usuaria')->result();
            $this->db->where('CPF', $CPF);
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            if (count($dados['atendimento_psicologico']) == 0) {
                $dados['atendimento_psicologico'] = '';
                $this->load->view('atendimento', $dados);
            } else {
                foreach ($dados['atendimento_psicologico'] as $d) {
                    $codigo = $d->cod_atendimento;
                }
                $this->db->where('cod_quadro_clinico', $codigo);
                $dados['quadro_clinico'] = $this->db->get('quadro_clinico')->result();

                $this->load->view('atendimento', $dados);
            }
        }
        if ($cod != '') {
            $this->db->where('cod_usuaria', $cod);
            $dados['usuaria'] = $this->db->get('usuaria')->result();
            foreach ($dados['usuaria'] as $d) {
                $cpf = $d->CPF;
            }
            $this->db->where('CPF', $cpf);
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();

            if (count($dados['atendimento_psicologico']) == 0) {
                $dados['atendimento_psicologico'] = '';
                $this->load->view('atendimento', $dados);
            } else {
                foreach ($dados['atendimento_psicologico'] as $d) {
                    $cod = $d->cod_atendimento;
                    $this->db->where('cod_quadro_clinico', $cod);
                    $dados['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
                }
                $this->load->view('atendimento', $dados);
            }
        }
    }

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
        foreach ($info['usuaria'] as $u) {
            $nome = $u->nome;
            $CPF = $u->CPF;
        }
        $this->db->where('cod_cor', $cod);
        $info['cor'] = $this->db->get('cor')->result();
        foreach ($info['cor'] as $c) {
            $cor = $c->descricao;
        }
        $this->db->where('cod_escolaridade', $cod);
        $info['escolaridade'] = $this->db->get('escolaridade')->result();
        foreach ($info['escolaridade'] as $esc) {
            $escol = $esc->descricao;
        }
        $this->db->where('cod_tipo_violencia', $cod);
        $info['tipo_violencia'] = $this->db->get('tipo_violencia')->result();
        foreach ($info['tipo_violencia'] as $tv) {
            $tipo_viol = $tv->descricao;
        }
        date_default_timezone_set('America/Rio_Branco');
        $data['nome'] = $nome;
        $data['cpf'] = $CPF;
        $data['data_atendimento'] = date('Y-m-d');
        $data['descricao_caso'] = $this->input->post('desc_caso');
        $data['cor'] = $cor;
        $data['escol'] = $escol;
        $data['tipo_viol'] = $tipo_viol;
        $quadro1 = $this->input->post('quadro_clinico1');
        $quadro2 = $this->input->post('quadro_clinico2');
        $quadro3 = $this->input->post('quadro_clinico3');
        $quadro4 = $this->input->post('quadro_clinico4');
        $quadro5 = $this->input->post('quadro_clinico5');
        if ($quadro1 != '') {
            $qdr['descricao'] = $quadro1;
        }
        if ($quadro2 != '') {
            $qdr['descricao'] = $quadro2;
        }
        if ($quadro3 != '') {
            $qdr['descricao'] = $quadro3;
        }
        if ($quadro4 != '') {
            $qdr['descricao'] = $quadro4;
        }
        if ($quadro5 != '') {
            $qdr['descricao'] = $quadro5;
        }
        //2
        if (($quadro1 && $quadro2) != '') {
            $qdr['descricao'] = $quadro1 . ' e ' . $quadro2;
        }
        if (($quadro1 && $quadro3) != '') {
            $qdr['descricao'] = $quadro1 . ' e ' . $quadro3;
        }
        if (($quadro1 && $quadro4) != '') {
            $qdr['descricao'] = $quadro1 . ' e ' . $quadro4;
        }
        if (($quadro1 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ' e ' . $quadro5;
        }
        if (($quadro2 && $quadro3) != '') {
            $qdr['descricao'] = $quadro2 . ' e ' . $quadro3;
        }
        if (($quadro2 && $quadro4) != '') {
            $qdr['descricao'] = $quadro2 . ' e ' . $quadro4;
        }
        if (($quadro2 && $quadro5) != '') {
            $qdr['descricao'] = $quadro2 . ' e ' . $quadro5;
        }
        if (($quadro3 && $quadro4) != '') {
            $qdr['descricao'] = $quadro3 . ' e ' . $quadro4;
        }
        if (($quadro3 && $quadro5) != '') {
            $qdr['descricao'] = $quadro3 . ' e ' . $quadro5;
        }
        if (($quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro4 . ' e ' . $quadro5;
        }
        //3
        if (($quadro1 && $quadro2 && $quadro3) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ' e ' . $quadro3;
        }
        if (($quadro1 && $quadro2 && $quadro4) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ' e ' . $quadro4;
        }
        if (($quadro1 && $quadro2 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ' e ' . $quadro5;
        }
        if (($quadro1 && $quadro3 && $quadro4) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro3 . ' e ' . $quadro4;
        }
        if (($quadro1 && $quadro3 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro3 . ' e ' . $quadro5;
        }
        if (($quadro1 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro4 . ' e ' . $quadro5;
        }
        if (($quadro2 && $quadro3 && $quadro4) != '') {
            $qdr['descricao'] = $quadro2 . ', ' . $quadro3 . ' e ' . $quadro4;
        }
        if (($quadro2 && $quadro3 && $quadro5) != '') {
            $qdr['descricao'] = $quadro2 . ', ' . $quadro3 . ' e ' . $quadro5;
        }
        if (($quadro2 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro2 . ', ' . $quadro4 . ' e ' . $quadro5;
        }
        if (($quadro3 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro3 . ', ' . $quadro4 . ' e ' . $quadro5;
        }
        //4 
        if (($quadro1 && $quadro2 && $quadro3 && $quadro4) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ', ' . $quadro3 . ' e ' . $quadro4;
        }
        if (($quadro1 && $quadro2 && $quadro3 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ', ' . $quadro3 . ' e ' . $quadro5;
        }
        if (($quadro1 && $quadro2 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ', ' . $quadro4 . ' e ' . $quadro5;
        }
        if (($quadro1 && $quadro3 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro3 . ', ' . $quadro4 . ' e ' . $quadro5;
        }
        if (($quadro2 && $quadro3 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro2 . ', ' . $quadro3 . ', ' . $quadro4 . ' e ' . $quadro5;
        }
        //5
        if (($quadro1 && $quadro2 && $quadro3 && $quadro4 && $quadro5) != '') {
            $qdr['descricao'] = $quadro1 . ', ' . $quadro2 . ', ' . $quadro3 . ', ' . $quadro4 . ' e ' . $quadro5;
        }

        if ($this->db->insert('atendimento_psicologico', $data) && $this->db->insert('quadro_clinico', $qdr)) {
            $this->db->where('CPF', $CPF);
            $this->db->delete('agenda');
            redirect('agenda/listar_agenda');
        } else {
            redirect('atendimento');
        }
    }

    public function listar_prontuario() {
        $this->verificar_sessao();

        function mask($val, $mask) {
            $maskared = '';
            $k = 0;
            for ($i = 0; $i <= strlen($mask) - 1; $i++) {
                if ($mask[$i] == '#') {
                    if (isset($val[$k]))
                        $maskared .= $val[$k++];
                }
                else {
                    if (isset($mask[$i]))
                        $maskared .= $mask[$i];
                }
            }
            return $maskared;
        }

        $termo = $this->input->post('pesquisar_p');
        if ($termo != '') {
            $this->db->like('nome', $termo);
            $this->db->or_where('CPF', $termo);
            $data['usuaria'] = $this->db->get('usuaria')->result();
            if (count($data['usuaria']) === 0) {
                echo '<span style="color: red">Nenhum Prontuário Encontrado!</span>';
            } else {
                foreach ($data['usuaria'] as $da) {
                    $CPF = $da->CPF;
                }
                $this->db->like('nome', $termo);
                $this->db->or_where('CPF', $CPF);
                $data['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
                if (count($data['atendimento_psicologico']) == 0) {
                    echo '<span style="color: red">Nenhum Prontuário Encontrado!</span>';
                } else {
                    foreach ($data['atendimento_psicologico'] as $d) {
                        $cod = $d->cod_atendimento;
                        $NOME = $d->nome;
                        $cpf = $d->CPF;
                    }
                    $this->db->where('CPF', $cpf);
                    $data['usuaria'] = $this->db->get('usuaria')->result();
                    foreach ($data['usuaria'] as $da) {
                        $COD = $da->cod_usuaria;
                    }
                    $this->db->where('cod_quadro_clinico', $cod);
                    $data['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
                    echo '<a href="' . base_url("atendimento/prontuario/" . '' . $COD . '') . '" class="btn btn-secondary btn-group">Usuária: ' . $NOME . ', CPF: ' . mask($cpf,'###.###.###-##') . '</a><br><br>';
                }
            }
        } else {
            echo '<span style="color: red">Campo Vazio!</span>';
        }
    }

    public function prontuario($COD = null) {
        $this->verificar_sessao();

        $this->db->where('cod_usuaria', $COD);
        $info['usuaria'] = $this->db->get('usuaria')->result();
        foreach ($info['usuaria'] as $in) {
            $CPF = $in->CPF;
        }
        $this->db->where('CPF', $CPF);
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        foreach ($dados['atendimento_psicologico'] as $d) {
            $cpf = $d->CPF;
            $cod = $d->cod_atendimento;
        }
        $this->db->where('CPF', $cpf);
        $dados['usuaria'] = $this->db->get('usuaria')->result();
        $this->db->where('cod_quadro_clinico', $cod);
        $dados['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
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
        $this->db->where('cod_quadro_clinico', $cod);
        $dados['quadro_clinico'] = $this->db->get('quadro_clinico')->result();
        $this->load->view('atualizar_prontuario', $dados);
    }

}
