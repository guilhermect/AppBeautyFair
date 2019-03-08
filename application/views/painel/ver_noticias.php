        <style>
        button{
            color: white;
            border: 0;
            margin: 15px;
            padding: 6px;
            width: 85px;
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
                            <h3>Users List</h3>
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

        <script src="<?php echo base_url('public/painel/firebase/app.js') ?>"></script>