   
        <style>
        button{
            color: white;
            border: 0;
            margin: 15px;
            padding: 6px;
            width: 20%;
            border-radius: 4px;
        }
        
        tr button:nth-last-child(1){
            background:crimson;
        }

        tr button:nth-last-child(2){
            background:#00C851;
        }

        #uploader {
            -webkit-appearance: none;
            width: 100%;
            border: 1px solid black;
        }
        </style>

  <div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h3>Notícias</h3>
                            <div class="table-responsive">
                                <table  class="table table-striped table-dark text-center">
                                    <thead style="background:#2E2E2E; ">
                                        <tr>
                                            <th style="color:#fff;">Título</th>
                                            <th style="color:#fff;">Conteúdo</th>
                                            <th style="color:#fff;">Imagem</th>
                                            <th style="color:#fff;">Data</th>
                                            <th style="color:#fff;">Ações</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody id="user-list" >
                                    
                                    </tbody>
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                                       
        </div> 

      

        <div class="modal animated rubberBand" id="myModalsix" role="dialog">
            <div class="modal-dialog modals-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-example-wrap">
                                <div class="cmp-tb-hd">
                                    <h2>Atualizar Notícia</h2>
                                </div>

                                <form id="update-user-form">
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
                                        <label>Conteúdo da Notícia</label>
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

                                <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Data</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" value="" name="data" id="data" readonly>
                                    </div>
                                </div>
                            </div>
                                
                            </div>   
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" >Atualizar</button>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('public/painel/firebase/ver_noticias.js') ?>"></script>

        <script>
        $(function(){
            $("#close").on("click",function(){
                $("#myModalsix").hide();
            })
        })

        var d = new Date();

        var month = d.getMonth()+1;
        var day = d.getDate();


        var output = (day<10 ? '0' : '') + day 
                    + '/' + (month<10 ? '0' : '') + month + '/' + d.getFullYear();


        $(function(){
            $("#data").val(output);
        })
        </script>

