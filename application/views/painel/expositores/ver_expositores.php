   
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
                                <table  id="myTable" class="table table-striped table-dark text-center">
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

                                        <tr>
                                        
                                            <td value="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></td>
                                            <td value="<?php echo $val['category'] ?>"><?php echo $val['category'] ?></td>
                                            <td value="<?php echo $val['spotlight'] ?>"><?php echo $val['spotlight'] ?></td>
                                            <td value="<?php echo $val['news'] ?>"><?php echo $val['news'] ?></td>
                                            <td value="<?php echo $val['image'] ?>"><img src="<?php echo $val['image']?>" width="150"></td>
                                            <td value="<?php echo $val['content'] ?>"><?php echo $val['content'] ?></td>
                                            <td value="<?php echo $val['gallery'] ?>">
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

                                         </tr>



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

<script>

window.addEventListener('load', (e) => {

    var TableData = new Array();
    
    $('#myTable tr').each(function(row, tr){
        TableData[row]={
            "title" : $(tr).find('td:eq(0)').text()
            , "category" :$(tr).find('td:eq(1)').text()
            , "spotlight" : $(tr).find('td:eq(2)').text()
            , "news" : $(tr).find('td:eq(3)').text()
            , "image" : $(tr).find('td:eq(4)').text()
            , "content" : $(tr).find('td:eq(5)').text()
            , "gallery" : $(tr).find('td:eq(6)').text()
        }
    }); 
    TableData.shift();  // first row is the table header - so remove

    for(i=0;i<TableData.length;i++){
        //console.log(TableData[i]["title"])

       /*  db.collection('exhibitors').add({
                title: TableData[i]["title"],
            })*/
        
        db.collection('exhibitors').doc('12').set(
            {
                title: TableData[i]["title"],
            }, 
            {merge: true}
        )
    }

})
</script>
      

        

     


