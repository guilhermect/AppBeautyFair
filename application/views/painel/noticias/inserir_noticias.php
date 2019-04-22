<style>
    #uploader {
        -webkit-appearance: none;
        width: 100%;
        border: 1px solid black;
    }
    #cblist input {
        margin: 0 2px 0 20px;
    }
</style>
<div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Inserir Notícia</h2>
                            

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
                                    <label>Conteúdo da Notícia</label>
                                    <div class="nk-int-st">
                                        <br>
                                        <textarea class="form-control auto-size" rows="2" placeholder="" name="content" id="content"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Categorias</label>
                                    <div class="nk-int-st">

                                    <div class="col-md-2" style="margin-left:-15px;">
                                        <input type="text"  class="form-control input-sm" placeholder="Titulo da categoria"  name="checkbox_title" id="checkbox_title">
                                    </div>
                                    <button type="button" class="btn btn-warning" id="btnSave"><i class="fa fa-plus"></i></button>
                                    
                                    <div id="cblist" style="margin-top:20px;">
                                        
                                    </div>
                                        
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
                                    <label>Data</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" value="" name="data" id="data" readonly>
                                    </div>
                                </div>
                            </div>
                            
                        
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

<script type="text/javascript">

$(document).ready(function() {
    $('#btnSave').click(function() {
        addCheckbox($('#checkbox_title').val());
    });
});

function addCheckbox(name) {

   db.collection('categories').add({
        title: name
    })
}


// Create element and render user
function renderCheck(doc){
    
   var container = $('#cblist');
   var inputs = container.find('input');
   var id = inputs.length+1;

   $('<input />', { type: 'checkbox', name: 'category[]', id: 'cb'+id, value: doc.data().title }).appendTo(container);
   $('<label />', { 'for': 'cb'+id, text: doc.data().title }).appendTo(container);

}


db.collection('categories').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        if(change.type == 'added'){
            renderCheck(change.doc);
        } else if(change.type == 'removed'){
            let checkbox = container.querySelector('input #cb' + change.id); 
            container.removeChild(checkbox);          
        } 
        
    })

})

</script>

<script src="<?php echo base_url('public/painel/firebase/noticias/inserir_noticias.js') ?>"></script>

