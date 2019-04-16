

<script>
$.getJSON(base_path+"import_json/caravanas.json", function( json ) {
    for(i=0;i<json.caravans.length;i++){
        console.log(json.caravans[i].title)
    }
});
</script>

<div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Importar Caravanistas</h2>
                            

                        </div>
                      

                        <form id="add-form" action="<?php //echo base_url('painel/upload_file') ?>">
                          
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Arquivo</label>
                                    <div class="nk-int-st mg-t-15">
                                        <input type="file" name="caravanas" class="form-control input-sm" value="upload" id="fileButton">
                                       
                                    </div>
                                </div>
                            </div>

                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success"   id="enviar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>


<!--<script src="<?php echo base_url('public/painel/firebase/caravanistas/inserir_caravanistas.js') ?>"></script>-->

