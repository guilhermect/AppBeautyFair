const userList = document.querySelector('#user-list');  
const formUpd = document.querySelector('#update-user-form');
var img_atual = document.getElementById('img-atual');

//Upload File

var uploader = document.getElementById('uploader');
var fileButton = document.getElementById('fileButton');


// Create element and render user
function renderUser(doc){
    let tr = document.createElement('tr');
    let title = document.createElement('td'); 
    let content = document.createElement('td'); 
    let categories = document.createElement('td'); 
    let image = document.createElement('td'); 
    let date = document.createElement('td'); 
    let del_btn = document.createElement('button');
    let upd_btn = document.createElement('button');


    tr.setAttribute('data-id',doc.id);
    tr.setAttribute('title',doc.data().title);
    tr.setAttribute('content',doc.data().content);
    tr.setAttribute('categories',doc.data().categories);
    tr.setAttribute('image',doc.data().image);
    tr.setAttribute('date',doc.data().date);

    title.textContent= doc.data().title;
    content.textContent= doc.data().content;
    categories.textContent= doc.data().categories;
    var img_url = doc.data().image;
    image.innerHTML= '<img src="'+img_url+'" width="150">';
    date.textContent= doc.data().date;
    del_btn.textContent = 'x'; 
    upd_btn.textContent = '↺';
     

    /*var dataSet = [
        [content.innerHTML, date.innerHTML, del_btn.innerHTML + ' ' + upd_btn.innerHTML]
    ];

    $('#table').DataTable( {
        data: dataSet
    } );*/

    tr.appendChild(title);
    tr.appendChild(content);
    tr.appendChild(categories);
    tr.appendChild(image);
    tr.appendChild(date);
    tr.appendChild(upd_btn);
    tr.appendChild(del_btn);

    userList.appendChild(tr);

    // deleting data
    del_btn.addEventListener('click', (e) => {
        
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('news').doc('hair').collection('items').doc(id).delete();
    });



    var img='';

     //Listen for file selection
     fileButton.addEventListener('change', function(e){

        //Get file
        var file = e.target.files[0];

        //Create storage ref
        var storageRef = firebase.storage().ref('news/' + file.name);


        //Upload file
        var task = storageRef.put(file);
        


        //update progress bar
        task.on('state_changed', 

            function progress(snapshot){
                var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                uploader.value = percentage;

            },

            function error(err){ 

            },

            function complete(){
                task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                
                    img = downloadURL;

                });
            }

        );

        

     });


   //updating data
    upd_btn.addEventListener('click', (e) => {
        

        document.getElementById("myModalsix").setAttribute("style","display:block;");
        
        if(document.getElementById("fileButton").value == "") {
            img = e.target.parentElement.getAttribute('image');
        }

         
        var id = e.target.parentElement.getAttribute('data-id');
        var title = e.target.parentElement.getAttribute('title');
        var content = e.target.parentElement.getAttribute('content');
        var categories = e.target.parentElement.getAttribute('categories');
        
        var date= document.getElementById('data').value;



        formUpd.title.value=title;
        formUpd.content.value=content;
        formUpd.content.value=content;
        img_atual.setAttribute('src',img);
        fileButton.setAttribute('value',img);
        



        if(formUpd){
            

            formUpd.addEventListener('submit', (e) => {
                e.preventDefault();
                db.collection('news').doc('hair').collection('items').doc(id).update({
                    title:formUpd.title.value,
                    content: formUpd.content.value,
                    image: img,
                    date: date
                })
                //alert('Atualizado com sucesso');
                
                
                document.getElementById("myModalsix").setAttribute("style","display:none;");

                setTimeout(function(){
                    window.location.reload(1);
                 }, 250);
            });
        
        }

        

    });

 
    //document.querySelector("table").setAttribute("id","data-table-basic");
}



//real-time listener
db.collection('news').doc('hair').collection('items').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        if(change.type == 'added'){
            renderUser(change.doc);
        } else if(change.type == 'removed'){
            let tr = userList.querySelector('[data-id=' + change.doc.id + ']'); 
            userList.removeChild(tr);          
        } else if(change.type == 'modified'){
               
           let tr = userList.querySelector('[data-id=' + change.doc.id + ']'); 
           userList.removeChild(tr);
           renderUser(change.doc);
        }
        
    })

})


//getting data
/*db.collection('users').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        renderUser(doc);
    })
})*/


