<table class=" table table-striped table-hover table-condensed">
    <thead class="">
        <tr>                                               
            <th><h4>Usuária</h4></th>  
            <th><h4>CPF</h4></th>  
            <th><h4>Data</h4></th>  
            <th><h4>Horário</h4></th>                                        
            <th></th>  
        </tr>
    </thead>
    <tbody>     
        <?php foreach ($agenda as $age) { ?>                                    
            <tr id="ret">                                                    
                <td><?= $age->nome; ?></td>
                <td><?= $age->CPF; ?></td>
                <td><?= date("d/m/Y", strtotime($age->data_agenda)); ?></td> 
                <td><?= date("H:i", strtotime($age->horario_agenda)); ?></td>                                    
                <td>
                    <form action="<?= base_url() ?>atendimento" method="post">
                        <input type="hidden" name="nome_usu" value="<?= $age->nome ?>"/>
                        <button type="submit" class="btn btn-success btn-group">Atendimento</button>
                        <a href="<?= base_url('agenda/editar/' . $age->cod_agenda) ?>" class="btn btn-primary btn-group">Editar</a>                                                        
                        <a href="<?= base_url('agenda/excluir/' . $age->cod_agenda) ?>" class="btn btn-danger btn-group" onclick="return confirm('Este Agendamento Será Cancelado! Continuar?');">Cancelar</a>
                        <a class="btn btn-info btn-group" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dados Da Usuária</a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated"> 
                            <div class="form-group container-fluid">
                                <?php
                                $cpf = $age->CPF;
                                $this->db->where('CPF', $cpf);
                                $dados['usuaria'] = $this->db->get('usuaria')->result();
                                ?>
                                <?php foreach ($dados['usuaria'] as $da) { ?>
                                    <?php
                                    $s = $da->sexo;
                                    if ($s === 'F') {
                                        $sexo = 'Feminino';
                                    } elseif ($s === 'M') {
                                        $sexo = 'Masculino';
                                    } else {
                                        $sexo = 'Hermafrodita';
                                    }
                                    ?>
                                    <span>Nome: <?= $da->nome; ?></span><br>  
                                    <span>CPF: <?= $da->CPF; ?></span><br>
                                    <span>RG: <?= $da->RG; ?></span><br>
                                    <span>Telefone: <?= $da->telefone; ?></span><br>
                                    <span>Data de Nascimento: <?= date("d/m/Y", strtotime($da->data_nascimento)); ?></span><br>
                                    <span>Sexo: <?= $sexo; ?></span>
                                <?php } ?>   
                            </div>
                        </div>
                    </form>
                </td>
            </tr>                               
        <?php } ?>   
    </tbody>
</table>