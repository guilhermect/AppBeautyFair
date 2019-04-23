   
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
        #cblist input {
            margin: 0 2px 0 20px;
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
                                            <th style="color:#fff;">Categorias</th>
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

            //updating data
    upd_btn.addEventListener('click', (e) => {
        

        document.getElementById("myModalsix").setAttribute("style","display:block;");
        
        if(document.getElementById("fileButton").value == "") {
            img = e.target.parentElement.getAttribute('image');
        }
        
         
        var id = e.target.parentElement.getAttribute('data-id');
        var title = e.target.parentElement.getAttribute('title');
        var content = e.target.parentElement.getAttribute('content');
        
        
        var date= document.getElementById('data').value;

        var checkboxes = document.getElementsByName('category[]');

        var categories = e.target.parentElement.getAttribute('categories');

        var categoriesArr = categories.split(',');

        
        for (i=0; i<checkboxes.length;i++) 
        {   
            for(j=0;j<categoriesArr.length;j++){
                if(checkboxes[i].value==categoriesArr[j]){
                    checkboxes[i].checked=true;
                }  
            }
                
        }

    
  
        formUpd.title.value=title;
        formUpd.content.value=content;
        img_atual.setAttribute('src',img);
        fileButton.setAttribute('value',img);

        


    });
            

        </script>

        <script src="<?php echo base_url('public/painel/firebase/noticias/ver_noticias.js') ?>"></script>

