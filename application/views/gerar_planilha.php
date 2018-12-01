<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    </head>
    <body>
        <?php
        // Definimos o nome do arquivo que será exportado
        $arquivo = 'relatorio.xls';

        // Criamos uma tabela HTML com o formato da planilha
        $html1 = '';
        date_default_timezone_set('America/Rio_Branco');
        $data = date('Y-m-d H:i');
        $html1 .= '<h4>Relatório Quantitativo</h4>';
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
        $this->db->select('*');
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdgc = count($dados['atendimento_psicologico']);

        $this->db->where('cor', "Preta");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdpreta = count($dados['atendimento_psicologico']);

        $this->db->where('cor', "Branca");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdbranca = count($dados['atendimento_psicologico']);

        $this->db->where('cor', "Indigena");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdindig = count($dados['atendimento_psicologico']);

        $this->db->where('cor', "Parda");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdparda = count($dados['atendimento_psicologico']);

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
        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr>';
        $html .= '<td colspan="7"><h4>Por Tipo De Violência</h4></tr>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td><b>Total de Atendimentos</b></td>';
        $html .= '<td><b>Ameaça de Morte</b></td>';
        $html .= '<td><b>Violência Moral</b></td>';
        $html .= '<td><b>Violência Sexual</b></td>';
        $html .= '<td><b>Violência Patrimonial</b></td>';
        $html .= '<td><b>Violência Física</b></td>';
        $html .= '<td><b>Violência Psicológica</b></td>';
        $html .= '</tr>';

        //Selecionar todos os itens da tabela 
        $this->db->select('*');
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdg = count($dados['atendimento_psicologico']);

        $this->db->where('tipo_viol', "Ameaça de Morte");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvamorte = count($dados['atendimento_psicologico']);

        $this->db->where('tipo_viol', "Moral");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvmoral = count($dados['atendimento_psicologico']);

        $this->db->where('tipo_viol', "Sexual");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvsex = count($dados['atendimento_psicologico']);

        $this->db->where('tipo_viol', "Patrimonial");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvpatri = count($dados['atendimento_psicologico']);

        $this->db->where('tipo_viol', "Física");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvfis = count($dados['atendimento_psicologico']);

        $this->db->where('tipo_viol', "Psicológica");
        $dados['atendimento_psicologico'] = $this->db->get('atendimento_psicologico')->result();
        $qtdvpsi = count($dados['atendimento_psicologico']);

        $html .= '<tr>';
        $html .= '<td>' . $qtdg . '</td>';
        $html .= '<td>' . $qtdvamorte . '</td>';
        $html .= '<td>' . $qtdvmoral . '</td>';
        $html .= '<td>' . $qtdvsex . '</td>';
        $html .= '<td>' . $qtdvpatri . '</td>';
        $html .= '<td>' . $qtdvfis . '</td>';
        $html .= '<td>' . $qtdvpsi . '</td>';
        $html .= '</tr>';
        $html .= '</table>';

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
        echo $html;
        exit;
        ?>
    </body>
</html>
