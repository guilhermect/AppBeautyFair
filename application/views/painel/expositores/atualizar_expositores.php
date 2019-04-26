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
                            <h2>Atualizar Expositor</h2>
                            

                        </div>
                            
                        <form id="add-form" method="post" enctype="multipart/form-data" action="<?php echo base_url('painel/update_expositor'); ?>">

                            <?php
                                if(is_array($data)){
                                foreach($data as $val){
                            ?>

                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Título</label>
                                    <div class="nk-int-st">
                                        <input type="text"  class="form-control input-sm" placeholder=""  name="title" id="title" value="<?php echo $val['title'] ?>">
                                    </div>
                                </div>
                            </div>
                            
                            

                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <div class="nk-int-st">

                                    <div class="fm-checkbox">

                                        <?php
                                        
                                        $checked1='';
                                        $checked2='';
                                        $checked3='';
                                        $checked4='';

                                        if($val['category']=='Hair'){
                                            $checked1='checked';
                                        } else
                                        if($val['category']=='Estética'){
                                            $checked2='checked';
                                        }else
                                        if($val['category']=='Manicure'){
                                            $checked3='checked';
                                        }else
                                        if($val['category']=='Maquiagem'){
                                            $checked4='checked';
                                        }

                                        ?>
                                        <label><input type="radio" name="category"  class="category" value="Hair" <?php echo $checked1 ?>> <i></i> Hair</label> 
                                        &nbsp&nbsp&nbsp&nbsp
                                        <label><input type="radio" name="category"  class="category" value="Estética" <?php echo $checked2 ?>> <i></i> Estética</label>
                                        &nbsp&nbsp&nbsp&nbsp
                                        <label><input type="radio" name="category"  class="category" value="Manicure" <?php echo $checked3 ?>> <i></i> Manicure</label>
                                        &nbsp&nbsp&nbsp&nbsp
                                        <label><input type="radio" name="category"  class="category" value="Maquiagem" <?php echo $checked4 ?>> <i></i> Maquiagem</label>
                                    </div>

                                        
                                    </div>
                                </div>
                            </div>

                            
                            
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <br><br>
                                    <img src="<?php echo $val['logo'] ?>" width="100">

                                    <div class="nk-int-st mg-t-15">
                                      <input type="file" name="logo" class="form-control input-sm" >
                                       
                                    </div>
                                </div>
                            </div>


                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Destaque</label>
                                    <div class="nk-int-st">

                                    <div class="fm-checkbox">

                                        <?php
                                        
                                        $checkedSpot1='';
                                        $checkedSpot2='';
                           

                                        if($val['spotlight']==1){
                                            $checkedSpot1='checked';
                                        } else
                                        if($val['spotlight']==0){
                                            $checkedSpot2='checked';
                                        }

                                        ?>
                                        <label><input type="radio" name="spotlight"  class="spotlight" value="1" <?php echo $checkedSpot1 ?>> <i></i> Sim</label> 
                                        &nbsp&nbsp&nbsp&nbsp
                                        <label><input type="radio" name="spotlight"  class="spotlight" value="0" <?php echo $checkedSpot2 ?>> <i></i> Não</label>
                                       
                                    </div>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Novidades</label>
                                    <div class="nk-int-st">

                                    <div class="fm-checkbox">

                                        <?php
                                        
                                        $checkedNews1='';
                                        $checkedNews2='';
                           

                                        if($val['news']==1){
                                            $checkedNews1='checked';
                                        } else
                                        if($val['news']==0){
                                            $checkedNews2='checked';
                                        }

                                        ?>
                                        <label><input type="radio" name="news"  class="news" value="1" <?php echo $checkedNews1 ?>> <i></i> Sim</label> 
                                        &nbsp&nbsp&nbsp&nbsp
                                        <label><input type="radio" name="news"  class="news" value="0" <?php echo $checkedNews2 ?>> <i></i> Não</label>
                                       
                                    </div>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Imagem de Destaque</label>
                                    <br><br>
                                    <img src="<?php echo $val['image'] ?>" width="100">
                                    
                                    <input type="hidden" name="image_old" value="<?php echo $val['image'] ?>">

                                    <div class="nk-int-st mg-t-15">
                                        <input type="file" name="image" class="form-control input-sm">
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Conteúdo</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" name="content" id="content" value="<?php echo $val['content'] ?>">
                                    </div>
                                </div>
                            </div>

                            
          
                                            
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Galeria de Imagem</label>
                                    <br><br>
                                    <?php
                                        $string = $val['gallery'];
                                        $str_arr = explode (",", $string);  

                                        for($i=0;$i<sizeof($str_arr);$i++){

                                    ?>
                                    
                                    
                                    <div class="nk-int-st mg-t-15">
                                        <img src="<?php echo $str_arr[$i]?>" width="100"><br><br>
                                        <input type="file" name="gallery<?php echo $i?>" class="form-control input-sm">

                                        <input type="hidden" name="gallery_old<?php echo $i?>" value="<?php echo $str_arr[$i] ?>">

                                    </div>
                                    <br><br>
                                    <?php
                                        }
                                    ?>

                                    
                                </div>
                            </div>
                                        


                            <input type="hidden" name="id" value="<?php echo $val['id'] ?>">
                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success" type="submit">Atualizar</button>
                            </div>


                            <?php
                                }
                            }
                            ?>
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
