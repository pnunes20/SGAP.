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

    public function gerar_planilha() {
        $this->verificar_sessao();
        $this->load->view('gerar_planilha');
    }

    public function gerar_planilha_p_data() {
        $this->verificar_sessao();
        $data_inicial = $this->input->post('data_rel1');
        $data_final = $this->input->post('data_rel2');
        // Definimos o nome do arquivo que será exportado
        $arquivo = 'relatorio';

        // Criamos uma tabela HTML com o formato da planilha
        $html1 = '';
        $html1 .= '<html dir="ltr" lang="pt-br">';
        $html1 .= '<head>';
        $html1 .= '<meta charset="utf-8">';
        $html1 .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $html1 .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $html1 .= '<meta name="description" content="">';
        $html1 .= '<meta name="author" content="">';
        $html1 .= '</head>';
        $html1 .= '<body>';

        date_default_timezone_set('America/Rio_Branco');
        $data = date('Y-m-d H:i');
        $html1 .= '<h4>Relatório Quantitativo No Período de ' . date('d/m/Y', strtotime($data_inicial)) . ' à ' . date('d/m/Y', strtotime($data_final)) . '</h4>';
        $html1 .= '<h4>Gerado Em: ' . date('d/m/Y', strtotime($data)) . ' às ' . date('H:i', strtotime($data)) . '</h4>';
        $html1 .= '<table border="1">';
        $html1 .= '<tr>';
        $html1 .= '<td colspan="6"><h4>Por Cor</h4></tr>';
        $html1 .= '</tr>';

        $html1 .= '<tr>';
        $html1 .= '<td><b>Total de Atendimentos</b></td>';
        $html1 .= '<td><b>Mulheres Negras</b></td>';
        $html1 .= '<td><b>Mulheres Brancas</b></td>';
        $html1 .= '<td><b>Mulheres Indígenas</b></td>';
        $html1 .= '<td><b>Mulheres Pardas</b></td>';
        $html1 .= '<td><b>Mulheres Amarelas</b></td>';
        $html1 .= '</tr>';

        //Selecionar todos os itens da tabela 
        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdgc = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('cor', "Preta");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdpreta = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('cor', "Branca");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdbranca = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('cor', "Indigena");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdindig = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('cor', "Parda");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdparda = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('cor', "Amarela");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdamarela = count($dados['atendimento_psicologico']);

        $html1 .= '<tr>';
        $html1 .= '<td>' . $qtdgc . '</td>';
        $html1 .= '<td>' . $qtdpreta . '</td>';
        $html1 .= '<td>' . $qtdbranca . '</td>';
        $html1 .= '<td>' . $qtdindig . '</td>';
        $html1 .= '<td>' . $qtdparda . '</td>';
        $html1 .= '<td>' . $qtdamarela . '</td>';
        $html1 .= '</tr>';
        $html1 .= '</table>';
        $html1 .= '<br><br>';

        // Criamos uma tabela HTML com o formato da planilha       
        $html1 .= '<table border="1">';
        $html1 .= '<tr>';
        $html1 .= '<td colspan="7"><h4>Por Tipo De Violência</h4></tr>';
        $html1 .= '</tr>';

        $html1 .= '<tr>';
        $html1 .= '<td><b>Total de Atendimentos</b></td>';
        $html1 .= '<td><b>Ameaça de Morte</b></td>';
        $html1 .= '<td><b>Violência Moral</b></td>';
        $html1 .= '<td><b>Violência Sexual</b></td>';
        $html1 .= '<td><b>Violência Patrimonial</b></td>';
        $html1 .= '<td><b>Violência Física</b></td>';
        $html1 .= '<td><b>Violência Psicológica</b></td>';
        $html1 .= '</tr>';

        //Selecionar todos os itens da tabela 
        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdg = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('tipo_viol', "Ameaça de Morte");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvamorte = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('tipo_viol', "Moral");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvmoral = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('tipo_viol', "Sexual");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvsex = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('tipo_viol', "Patrimonial");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvpatri = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('tipo_viol', "Física");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvfis = count($dados['atendimento_psicologico']);

        $this->db->where('data_atendimento >=', $data_inicial);
        $this->db->where('data_atendimento <=', $data_final);
        $this->db->where('tipo_viol', "Psicológica");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvpsi = count($dados['atendimento_psicologico']);

        $html1 .= '<tr>';
        $html1 .= '<td>' . $qtdg . '</td>';
        $html1 .= '<td>' . $qtdvamorte . '</td>';
        $html1 .= '<td>' . $qtdvmoral . '</td>';
        $html1 .= '<td>' . $qtdvsex . '</td>';
        $html1 .= '<td>' . $qtdvpatri . '</td>';
        $html1 .= '<td>' . $qtdvfis . '</td>';
        $html1 .= '<td>' . $qtdvpsi . '</td>';
        $html1 .= '</tr>';
        $html1 .= '</table>';
        $html1 .= '</body>';
        $html1 .= '</html>';
        // Configurações header para forçar o download
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Content-type: application/x-msexcel");
        header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
        header("Content-Description: PHP Generated Data");
        // Envia o conteúdo do arquivo
        echo $html1;
        exit;
    }

}
