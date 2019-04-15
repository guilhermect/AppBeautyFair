<style>
    #uploader {
        -webkit-appearance: none;
        width: 100%;
        border: 1px solid black;
    }
</style>


<div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Importar Caravanistas</h2>
                            

                        </div>

                        <form id="add-form">
                          
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Arquivo</label>
                                    <div class="nk-int-st mg-t-15">
                                        <progress value="0" max="100" id="uploader">0%</progress>
                                        <input type="file" name="file" class="form-control input-sm" value="upload" id="fileButton" required>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success">Importar Caravanista</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>


<script src="<?php echo base_url('public/painel/firebase/caravanistas/inserir_caravanistas.js') ?>"></script>

