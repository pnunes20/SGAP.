<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuaria extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index() {
        $this->verificar_sessao();
    }

    public function detalhar() {
        $this->verificar_sessao();

        $id = $this->input->post('palavra');
        $this->db->where('cod_usuaria', $id);
        $data['usuaria'] = $this->db->get('usuaria')->result();

        foreach ($data['usuaria'] as $da) {
            $s = $da->sexo;
            if ($s === 'F') {
                $sexo = 'Feminino';
            } elseif ($s === 'M') {
                $sexo = 'Masculino';
            } else {
                $sexo = 'Hemafrodita';
            }
        }
        echo "<div class='card col-md-6'><span>Telefone: " . $da->telefone . "</span><br><span>RG: " . $da->RG . "</span><br><span>Data de Nascimento: " . date("d/m/Y", strtotime($da->data_nascimento)) . "</span><br><span>Sexo: " . $sexo . "</span></div>";
    }

}
