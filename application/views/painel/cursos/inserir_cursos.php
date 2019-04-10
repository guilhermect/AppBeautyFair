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
                            <h2>Inserir Curso</h2>
                            

                        </div>

                        <form id="add-user-form">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Título</label>
                                    <div class="nk-int-st">
                                        <input type="text"  class="form-control input-sm" placeholder=""  name="title" id="title">
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Conteúdo do Curso</label>
                                    <div class="nk-int-st">
                                        <br>
                                        <textarea class="form-control auto-size" rows="2" placeholder="" name="content" id="content"></textarea>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Imagem</label>
                                    <div class="nk-int-st mg-t-15">
                                        <progress value="0" max="100" id="uploader">0%</progress>
                                        <input type="file" name="image" class="form-control input-sm" value="upload" id="fileButton" >
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int mg-t-15" style="">
                                <div class="form-group">
                                    <label>Data do Curso</label>
                                    <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" value="" name="data_curso" id="data-curso">  
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" class="form-control input-sm" value="" name="data" id="data" readonly>
                            
                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success">Inserir Notícia</button>
                                <!--<button type="submit" class="btn btn-warning" value="Update" onclick="update_user();">Update</button>
                                -->
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
        $("#data").attr('value',output);
    })
</script>


<script src="<?php echo base_url('public/painel/firebase/noticias/inserir_noticias.js') ?>"></script>

