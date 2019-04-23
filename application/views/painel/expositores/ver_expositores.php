   
        <style>
        form{
            display:inline-block;
        }
        </style>

        <script>
        function makeid(length) {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < length; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        }
        </script>

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
                                            <th style="color:#fff;">Logotipo</th>
                                          <!--  <th style="color:#fff;">Destaque</th> -->
                                          <!--  <th style="color:#fff;">Novidades</th> -->
                                            <th style="color:#fff;">Imagem de Destaque</th>
                                            <th style="color:#fff;">Conteudo</th>
                                            <th style="color:#fff;">Galeria de Imagem</th>
                                            <th style="color:#fff;">Ações</th>
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
                                            <td value="<?php echo $val['logo'] ?>"><label style="display:none"><?php echo $val['logo']?></label><img src="<?php echo $val['logo']?>" width="150"></td>
                                            
                                            <?php
                                                $destaque = $val['spotlight'];

                                                if($destaque == 0){
                                                    $destaque='Não';
                                                } else {
                                                    $destaque='Sim';
                                                }        
                                            ?>
                                            
                                           <!-- <td value="<?php echo $val['spotlight'] ?>"> <?php echo $destaque ?> </td> -->

                                            <?php
                                                $novidades = $val['news'];

                                                if($novidades == 0){
                                                    $novidades='Não';
                                                } else {
                                                    $novidades='Sim';
                                                }        
                                            ?>

                                            <!--<td value="<?php echo $val['news'] ?>"><?php echo $novidades ?></td> -->

                                            <td value="<?php echo $val['image'] ?>"><label style="display:none"><?php echo $val['image']?></label><img src="<?php echo $val['image']?>" width="150"></td>
                                            <td value="<?php echo $val['content'] ?>"><?php echo $val['content'] ?></td>
                                            <td value="<?php echo $val['gallery'] ?>">
                                            <label style="display:none"><?php echo $val['gallery']?></label>
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

                                         



                                         <td>
                                          <form method="post" action="<?php echo base_url()."painel/update_expositor" ?>">
                                                <input type="hidden" name="id" value="<?php echo $val['id'] ?>">
                                                <button type="submit" class="btn btn-success">↺</button>
                                           </form> 
                                            <!--<form method="post" action="<?php echo base_url('painel/delete_expositor') ?>">
                                                <button class="btn btn-danger">x</button>
                                            </form>-->
                                         </td>

                                         </tr>
                                        

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
            , "logo" :$(tr).find('td:eq(2)').text()
            , "spotlight" : $(tr).find('td:eq(3)').text()
            , "news" : $(tr).find('td:eq(4)').text()
            , "image" : $(tr).find('td:eq(5)').text()
            , "content" : $(tr).find('td:eq(6)').text()
            , "gallery" : $(tr).find('td:eq(7)').text()
        }
    }); 
    TableData.shift();  // first row is the table header - so remove

    for(i=0;i<TableData.length;i++){
        
        /*usersRef.once('value', function(snapshot) {
        if (snapshot.hasChild(theDataToAdd)) {
            alert('exists');
        }
        });*/
        
        //$doc_id=makeid(20);
        //console.log($doc_id);
        db.collection('exhibitors').doc(TableData[i]["title"]).set(
            {
                title: TableData[i]["title"],
                category: TableData[i]["category"],
                spotlight: TableData[i]["spotlight"],
                news: TableData[i]["news"],
                image: TableData[i]["image"],
                content: TableData[i]["content"],
                gallery: TableData[i]["gallery"],
            }, 
            {merge: true}
        )
    }

})
</script>
      

        

     


