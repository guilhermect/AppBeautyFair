   
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
            background:#00C851;
        }

        tr button:nth-last-child(2){
            background:crimson;
        }
        </style>
        
       
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h3>Notícias</h3>
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-dark">
                                    <thead style="background:#2E2E2E;">
                                        <tr>
                                            <th style="color:#fff;">EMAIL</th>
                                            <th style="color:#fff;">NAME</th>
                                            <th style="color:#fff;">ACTIONS</th>
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
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-example-wrap">
                                <div class="cmp-tb-hd">
                                    <h2>Basic Example</h2>
                                </div>

                                <form id="update-user-form">
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="nk-int-st">
                                               <input type="text"  class="form-control input-sm" placeholder=""  name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int mg-t-15">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" placeholder="" name="name" id="name" >
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>   
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" >Atualizar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('public/painel/firebase/app.js') ?>"></script>