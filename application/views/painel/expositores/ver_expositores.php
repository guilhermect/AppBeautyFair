   
        <style>
        form{
            display:inline-block;
        }
        </style>

  <div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h3>Expositores</h3>
                            <div class="table-responsive">
                                <table  class="table table-striped table-dark text-center">
                                    <thead style="background:#2E2E2E; ">
                                        <tr>
                                            <th style="color:#fff;">Titulo</th>
                                            <th style="color:#fff;">Categoria</th>
                                            <th style="color:#fff;">Destaque</th>
                                            <th style="color:#fff;">Novidades</th>
                                            <th style="color:#fff;">Imagem</th>
                                            <th style="color:#fff;">Conteudo</th>
                                            <th style="color:#fff;">Galeria de Imagem</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody id="user-list" >
                                        <?php
                                            if(is_array($data)){
                                                foreach($data as $val){
                                        ?>
                                        
                                         <td><?php echo $val['title'] ?></td>
                                         <td><?php echo $val['category'] ?></td>
                                         <td><?php echo $val['spotlight'] ?></td>
                                         <td><?php echo $val['news'] ?></td>
                                         <td><img src="<?php echo $val['image']?>" width="150"></td>
                                         <td><?php echo $val['content'] ?></td>
                                         <td>
                                         <?php
                                            $string = $val['gallery'];
                                            $str_arr = explode (",", $string);  

                                            for($i=0;$i<sizeof($str_arr);$i++){

                                            
                                             
                                         ?>
                                        
                                         <img src="<?php echo $str_arr[$i]?>" width="150">

                                         <?php
                                            }
                                         ?>
                                         </td>



                                         <!--<td>
                                            <form method="post" action="<?php echo base_url('painel/update_expositor') ?>">
                                                <button class="btn btn-success">↺</button>
                                            </form>
                                            <form method="post" action="<?php echo base_url('painel/delete_expositor') ?>">
                                                <button class="btn btn-danger">x</button>
                                            </form>
                                         </td>-->
                                        

                                        <?php
                                                }
                                            }
                                        ?>
                                    
                                    </tbody>
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                                       
        </div> 

      

        

     


