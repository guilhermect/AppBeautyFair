
<?php

require_once APPPATH.'third_party/PHPExcel.php';


if(isset($_POST['enviar'])){
   $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = $_SERVER['DOCUMENT_ROOT'].'/appbeautyfair/import_json/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                
                
                $tmpfname = $location.$name;
                $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
                $excelObj = $excelReader->load($tmpfname);
                $worksheet = $excelObj->getSheet(0);//
                $lastRow = $worksheet->getHighestRow();
        
                $data = [];
                for ($row = 2; $row <= $lastRow; $row++) {
                     $data[] = [
                        'title' => $worksheet->getCell('A'.$row)->getValue(),
                        'address' => $worksheet->getCell('B'.$row)->getValue(),
                        'city' => $worksheet->getCell('C'.$row)->getValue(),
                        'state' => $worksheet->getCell('D'.$row)->getValue(),
                        'email' => $worksheet->getCell('E'.$row)->getValue(),
                        'phone1' => $worksheet->getCell('F'.$row)->getValue(),
                        'phone2' => $worksheet->getCell('G'.$row)->getValue(),
                       
                     ];
                }
        
                 $json = json_encode($data);
                 $teste = 'd';
                 for($i=0; $i<sizeof($data);$i++){
                     
                     $title = $data[$i]['title'];
                     $address = $data[$i]['address'];
                     $city = $data[$i]['city'];
                     $state = $data[$i]['state'];
                     $email = $data[$i]['email'];
                     $phone1 = $data[$i]['phone1'];
                     $phone2 = $data[$i]['phone2'];
                 ?>
                 
                 <script>

                    db.collection('caravans').add({
                            title: "<?php echo $title ?>",
                            address: "<?php echo $address ?>",
                            city: "<?php echo $city ?>",
                            state: "<?php echo $state ?>",
                            email: "<?php echo $email ?>",
                            phone1: "<?php echo $phone1 ?>",
                            phone2: "<?php echo $phone2 ?>",
                    });
                    
                    swal( "Importado com sucesso!" ,  "" ,  "success" );

                </script>
                    
          
                <?php
                 }
                ?>
               
                
    <?php
            }
        }       
    }  else {
        swal( "Selecione um arquivo!" ,  "" ,  "error" );
    }
    
}
   

?>


<div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Importar Caravanistas</h2>
                            

                        </div>
                      

                        <form id="add-form" method="post" action="" enctype="multipart/form-data">
                          
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Arquivo</label>
                                    <div class="nk-int-st mg-t-15">
                                        <input type="file" name="file" class="form-control input-sm" id="fileButton" required>
                                       
                                    </div>
                                </div>
                            </div>

                        
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success" type="submit"  name="enviar" id="enviar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>