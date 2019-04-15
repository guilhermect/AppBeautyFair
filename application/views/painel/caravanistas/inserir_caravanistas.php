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
                            <h2>Inserir Caravanista</h2>
                            

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
                                <button class="btn btn-success">Inserir Caravanista</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>

<script>
    var d = new Date();

    var month = d.getMonth()+1;
    var day = d.getDate();


    var output = (day<10 ? '0' : '') + day 
                + '/' + (month<10 ? '0' : '') + month + '/' + d.getFullYear();


    $(function(){
       // $("#data").attr('value',output);
    })
</script>


<script src="<?php echo base_url('public/painel/firebase/cursos/inserir_cursos.js') ?>"></script>

