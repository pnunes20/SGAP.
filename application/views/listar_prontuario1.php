<div class="card">
    <div class="card-body">
        <h5 class="card-title m-b-0">Informações Do Atendimento Psicológico</h5>
        <div class="form-group m-t-20">
            <label>Atendimento Realizado na Data:<small class="text-muted"></small></label>       
                <input class="form-control col-md-6" value=" ' . date("d/m/Y", strtotime($aten->data_atendimento)) .' " disabled/>          
        </div>
        <div class="form-group m-t-20">
            <label>Cursos Já Realizados Na CRM:<small class="text-muted"></small></label>                                       
            <input class="form-control col-md-6" value="" disabled/>                                      
        </div>
        <div class="form-group row col-12">
            <label>Outros Atendimentos Recebidos Pela Equipe Técnica Da CRM:<small class="text-muted"></small></label>
            <input class="form-control form-group col-md-6" value="" disabled/>
            <span class="form-group">Ano:</span><input class="form-control form-group col-md-4" value="" disabled/>
        </div>
        <div class="form-group">
            <label>Autor Da Violência:<small class="text-muted"></small></label>
            <input class="form-control col-md-4" value="" disabled/>
        </div>
        <div class="form-group">
            <label>Tipo de Violência:<small class="text-muted"></small></label>
            <input class="form-control col-md-4" value="" disabled/>
        </div>
        <div class="form-group">
            <label>Quadro Clínico:<small class="text-muted"></small></label>
            <?php foreach ($quadro_clinico as $qdr) { ?>                                          
                <input class="form-control col-md-4" value="<?= $qdr->descricao; ?>" disabled/>
            <?php } ?>
        </div>
        <div class="form-group">
            <label>Descrição Do Caso:<small class="text-muted"></small></label>
           
                <textarea class="form-control" style=" height: 100px; width: 300px;" disabled> 
                   '  . $aten->descricao_caso . '
                </textarea>            
        </div>
    </div>   
</div> 

<script type="text/javascript" src="<?= base_url(); ?>assets/javascriptcustom.js"></script>