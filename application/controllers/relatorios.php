<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);

            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdg = count($dados['atendimento_psicologico']);
            echo $qtdg;
        } else {
            $this->load->view('relatorios');
        }
    }

    public function qtdnegras() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('cor', "Preta");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdn = count($dados['atendimento_psicologico']);
            echo $qtdn;
        } else {
            
        }
    }

    public function qtdbrancas() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('cor', "Branca");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdb = count($dados['atendimento_psicologico']);
            echo $qtdb;
        } else {
            
        }
    }

    public function qtdindig() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('cor', "Indigena");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdindig = count($dados['atendimento_psicologico']);
            echo $qtdindig;
        } else {
            
        }
    }

    public function qtdpardas() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('cor', "Parda");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdparda = count($dados['atendimento_psicologico']);
            echo $qtdparda;
        } else {
            
        }
    }

    public function qtdamarelas() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('cor', "Amarela");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdamarela = count($dados['atendimento_psicologico']);
            echo $qtdamarela;
        } else {
            
        }
    }

    public function relatorios_tipo_viol() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);

            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdg = count($dados['atendimento_psicologico']);
            echo $qtdg;
        } else {
            $this->load->view('relatorios_tipo_viol');
        }
    }

    public function relatorios_tipo_viol_psi() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('tipo_viol', "Psicológica");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdvpsi = count($dados['atendimento_psicologico']);
            echo $qtdvpsi;
        } else {
            
        }
    }

    public function relatorios_tipo_viol_fis() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('tipo_viol', "Física");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdvfis = count($dados['atendimento_psicologico']);
            echo $qtdvfis;
        } else {
            
        }
    }

    public function relatorios_tipo_viol_patri() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('tipo_viol', "Patrimonial");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdvpatri = count($dados['atendimento_psicologico']);
            echo $qtdvpatri;
        } else {
            
        }
    }
    
     public function relatorios_tipo_viol_sex() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('tipo_viol', "Sexual");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdvsex = count($dados['atendimento_psicologico']);
            echo $qtdvsex;
        } else {
            
        }
    }
    
     public function relatorios_tipo_viol_moral() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('tipo_viol', "Moral");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdvmoral = count($dados['atendimento_psicologico']);
            echo $qtdvmoral;
        } else {
            
        }
    }

     public function relatorios_tipo_viol_amorte() {
        $this->verificar_sessao();

        $d1 = $this->input->post('data_inicio');
        $d2 = $this->input->post('data_fim');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));
        if ($d1 && $d2 != '') {
            $this->db->where('data_atendimento >=', $d1);
            $this->db->where('data_atendimento <=', $d2);
            $this->db->where('tipo_viol', "Ameaça de Morte");
            $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
            $qtdvamorte = count($dados['atendimento_psicologico']);
            echo $qtdvamorte;
        } else {
            
        }
    }

}
