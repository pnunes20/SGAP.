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

    public function listar_agenda() {
        $this->verificar_sessao();

        $this->db->select('*');
        $dados['agenda'] = $this->db->get('agenda')->result();
        if (count($dados['agenda']) === 0) {
            $this->db->select('*');
            $dados['agenda'] = $this->db->get('agenda')->result();
            $this->load->view('listar_agenda', $dados);
        } else {
            foreach ($dados['agenda'] as $d) {
                $he = $d->data_agenda;
            }
            if (date('Y-m-d', strtotime('-1 day')) === $he) {
                $verifdata = date('Y-m-d', strtotime('-1 day'));
                $this->db->where('data_agenda', $verifdata);
                $this->db->delete('agenda');

                $this->db->select('*');
                $this->db->order_by('data_agenda');
                $this->db->order_by('horario_agenda');
                $this->load->view('listar_agenda', $dados);
            } else {
                $this->db->select('*');
                $this->db->order_by('data_agenda');
                $this->db->order_by('horario_agenda');
                $dados['agenda'] = $this->db->get('agenda')->result();
                $this->load->view('listar_agenda', $dados);
            }
        }
    }

    public function pesq_tab_age() {
        $this->verificar_sessao();

        $cond = $this->input->post('palavra');
        $date = $this->input->post('data_age');
        date("Y-m-d", strtotime($date));
        if ($cond or $date != '') {
            if ($cond) {
                $this->db->like('nome', $cond);
                $this->db->or_where('CPF', $cond);
                $this->db->order_by('data_agenda');
                $this->db->order_by('horario_agenda');
                $dados ['agenda'] = $this->db->get('agenda')->result();
                if (count($dados['agenda']) <= 0) {
                    echo '<span><h4>Nenhum Resultado...</h4></span>';
                } else {
                    $this->load->view('result_pesq_tab_age', $dados);
                }
            }if ($date) {
                $this->db->where('data_agenda', $date);
                $this->db->order_by('data_agenda');
                $this->db->order_by('horario_agenda');
                $dados ['agenda'] = $this->db->get('agenda')->result();
                if (count($dados['agenda']) <= 0) {
                    echo '<span><h4>Nenhum Resultado...</h4></span>';
                } else {
                    $this->load->view('result_pesq_tab_age', $dados);
                }
            }
        } else {
            $this->db->select('*');
            $this->db->order_by('data_agenda');
            $this->db->order_by('horario_agenda');
            $dados['agenda'] = $this->db->get('agenda')->result();
            $this->load->view('result_pesq_tab_age', $dados);
        }
    }

    public function agendamento() {
        $this->verificar_sessao();

        $cond = $this->input->post('palavra');
        date("Y-m-d", strtotime($cond));

        if ($cond != '') {
            $this->db->where('data_agenda', $cond);
            $this->db->order_by('horario_agenda');
            $dados ['agenda'] = $this->db->get('agenda')->result();

            if (count($dados['agenda']) == 0) {
                echo '<h4>Nehum Horário Agendado Para <button class="btn btn-success" disabled>' . date("d/m/Y", strtotime($cond)) . '</button></h4>';
            } else {
                echo '<h4> Horários Indisponíveis Para <button class="btn btn-success" disabled>' . date("d/m/Y", strtotime($cond)) . '</button></h4>';
                foreach ($dados['agenda'] as $d) {
                    echo '<button class="col-md-6 btn btn-danger" disabled>' . date("H:i", strtotime($d->horario_agenda)) . '</button><br><br>';
                }
            }
        } else {
            $this->load->view('agendamento');
        }
    }

    public function agendar() {
        $this->verificar_sessao();

        $data['nome'] = $this->input->post('nome');
        $data['CPF'] = $this->input->post('CPF');
        $data['data_agenda'] = $this->input->post('data_agenda');
        $data['horario_agenda'] = $this->input->post('horario_agenda');

        $date = $this->input->post('data_agenda');
        $hora = $this->input->post('horario_agenda');
        date("Y-m-d", strtotime($date));
        date("H:i:s", strtotime($hora));

        if (($date === '') or ( $hora === '')) {
            echo '<span style="color: red">Preencha os Campos Data e Hora...</span>';
        }
        if (($date != '') && ( $hora != '')) {
            $this->db->where('horario_agenda', $hora);
            $this->db->where('data_agenda', $date);
            $dados['agenda'] = $this->db->get('agenda')->result();
//            foreach ($dados['agenda'] as $d) {
//                $he = $d->horario_agenda;
//            }
//            if (date($hora, strtotime('-1 hours')) == $he) {
//                echo '<span style="color: red">Selecione Um Horário ou Data Disponível...</span>';
//            }
            if (count($dados['agenda']) > 0) {
                echo '<span style="color: red">Selecione Um Horário ou Data Disponível...</span>';
            } else {
                if ($this->db->insert('agenda', $data)) {
                    echo '<span style="color: green">Agendamento Concluído!</span>';
                } else {
                    echo '<span style="color: red">Não Foi Possível Agendar!</span>';
                }
            }
        }
    }

    public function verif_hora() {
        $this->verificar_sessao();
        $hora = $this->input->post('hora_a');
        $date = $this->input->post('data_a');

        date("Y-m-d", strtotime($date));
        date("H:i:s", strtotime($hora));

        if (($date != '') && ($hora != '')) {
            $this->db->where('horario_agenda', $hora);
            $this->db->where('data_agenda', $date);
            $data['agenda'] = $this->db->get('agenda')->result();
            if (count($data['agenda']) > 0) {
                echo '<span style="color: red">Horário Indisponível!</span>';
            }
            if (count($data['agenda']) == 0) {
                $this->db->where('data_agenda', $date);
                $age['agenda'] = $this->db->get('agenda')->result();
                if (count($age['agenda']) == 0) {
                    echo '<span style="color: green">Horário Disponível!</span>';
                } else {
                    //CONTINUA AQUI
                    foreach ($age['agenda'] as $a) {
                        $he = $a->horario_agenda;
                    }
                    $d1 = new DateTime($he);
                    $d2 = new DateTime($hora);
                    $diff = $d1->diff($d2);
                    $key = '%H:%59:%s';
                    if ($diff < $key) {
                        echo '<span style="color: red">Horário Indisponível!</span>';
                    } else {
                        echo '<span style="color: green">Horário Disponível!</span>';
                    }
                }
            }
        } else {
            
        }
    }

    public function excluir($cod = null) {
        $this->verificar_sessao();

        $this->db->where('cod_agenda', $cod);
        if ($this->db->delete('agenda')) {
            redirect('agenda/listar_agenda');
        } else {
            redirect('agenda/listar_agenda');
        }
    }

    public function editar($cod = null) {
        $this->verificar_sessao();

        $cond = $this->input->post('palavra');
        date("Y-m-d", strtotime($cond));

        if ($cond != '') {
            $this->db->where('data_agenda', $cond);
            $this->db->order_by('horario_agenda');
            $dados ['agenda'] = $this->db->get('agenda')->result();

            if (count($dados['agenda']) == 0) {
                echo '<h4>Nehum Horário Agendado Para <button class="btn btn-success" disabled>' . date("d/m/Y", strtotime($cond)) . '</button></h4>';
            } else {
                echo '<h4> Horários Indisponíveis Para <button class="btn btn-success" disabled>' . date("d/m/Y", strtotime($cond)) . '</button></h4>';
                foreach ($dados['agenda'] as $d) {
                    echo '<button class="col-md-6 btn btn-danger" disabled>' . date("H:i", strtotime($d->horario_agenda)) . '</button><br><br>';
                }
            }
        } else {
            $this->db->where('cod_agenda', $cod);
            $data['agenda'] = $this->db->get('agenda')->result();

            $this->load->view('editar_agenda', $data);
        }
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
            redirect('agenda/listar_agenda');
        } else {
            redirect('agenda/listar_agenda');
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

        $cond = $this->input->post('palavra');
        date("Y-m-d", strtotime($cond));
        if ($cond != '') {
            $this->db->where('data_agenda', $cond);
            $this->db->order_by('horario_agenda');
            $dados ['agenda'] = $this->db->get('agenda')->result();

            if (count($dados['agenda']) == 0) {
                echo '<h4>Nehum Horário Agendado Para <button class="btn btn-success" disabled>' . date("d/m/Y", strtotime($cond)) . '</button></h4>';
            } else {
                echo '<h4> Horários Agendados Para <button class="btn btn-success" disabled>' . date("d/m/Y", strtotime($cond)) . '</button></h4>';
                foreach ($dados['agenda'] as $d) {
                    echo '<button class="col-md-6 btn btn-danger" disabled>' . date("H:i", strtotime($d->horario_agenda)) . '</button><br><br>';
                }
            }
        } else {
            $this->db->where('cod_usuaria', $cod);
            $data['usuaria'] = $this->db->get('usuaria')->result();

            $this->load->view('agendamento_dados', $data);
        }
    }

    public function pag($value = null) {
        $this->verificar_sessao();
        if ($value == null) {
            $value = 1;
        }
        $reg_p_pag = 5;
        if ($value <= $reg_p_pag) {
            $data['btnA'] = 'disabled';
        } else {
            $data['btnA'] = '';
        }
        $this->db->select('count(*) as total');
        $u = $this->db->get('agenda')->result();
        if (($u[0]->total - $value) < $reg_p_pag) {
            $data['btnP'] = 'disabled';
        } else {
            $data['btnP'] = '';
        }
        $this->db->select('*');
        $this->db->order_by('data_agenda');
        $this->db->order_by('horario_agenda');
        $this->db->limit($reg_p_pag, $value);
        $data['agenda'] = $this->db->get('agenda')->result();
        $data['value'] = $value;
        $data['reg_p_pag'] = $reg_p_pag;
        $data['qtd_reg'] = $u[0]->total;
        $v_inteiro = (int) $u[0]->total / $reg_p_pag;
        $v_resto = $u[0]->total % $reg_p_pag;
        if ($v_resto > 0) {
            $v_inteiro += 1;
        }
        $data['qtd_botoes'] = $v_inteiro;
        $this->load->view('listar_agenda', $data);
    }

    public function agenda_teste() {
        $this->verificar_sessao();

        $this->load->view('agenda_teste');
    }

}
