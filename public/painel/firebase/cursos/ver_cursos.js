const courseList = document.querySelector('#user-list');  
const formUpd = document.querySelector('#update-user-form');
var img_atual = document.getElementById('img-atual');

//Upload File

var uploader = document.getElementById('uploader');
var fileButton = document.getElementById('fileButton');

// Create element and render user
function renderCourse(doc){
    let tr = document.createElement('tr');
    let title = document.createElement('td'); 
    let content = document.createElement('td'); 
    let image = document.createElement('td'); 
    let category = document.createElement('td'); 
    let course_date = document.createElement('td'); 
    let url = document.createElement('td'); 
    let address = document.createElement('td'); 
    let del_btn = document.createElement('button');
    let upd_btn = document.createElement('button');


    tr.setAttribute('data-id',doc.id);
    tr.setAttribute('title',doc.data().title);
    tr.setAttribute('content',doc.data().content);
    tr.setAttribute('image',doc.data().image);
    tr.setAttribute('category',doc.data().category);
    tr.setAttribute('course_date',doc.data().course_date);
    tr.setAttribute('url',doc.data().url);
    tr.setAttribute('address',doc.data().address);

    title.textContent= doc.data().title;
    content.textContent= doc.data().content;
    var img_url = doc.data().image;
    image.innerHTML= '<img src="'+img_url+'" width="150">';
    category.textContent= doc.data().category;
    course_date.textContent= doc.data().course_date;
    url.textContent= doc.data().url;
    address.textContent= doc.data().address;
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
    tr.appendChild(image);
    tr.appendChild(category);
    tr.appendChild(course_date);
    tr.appendChild(url);
    tr.appendChild(address);
    tr.appendChild(upd_btn);
    tr.appendChild(del_btn);

    courseList.appendChild(tr);

    // deleting data
    del_btn.addEventListener('click', (e) => {
        
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('courses').doc(id).delete();
    });

    var img='';

    //Listen for file selection
    fileButton.addEventListener('change', function(e){
        //Get file
        var file = e.target.files[0];
    
        //Create storage ref
        var storageRef = firebase.storage().ref('courses/' + file.name);
    
    
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
            },
    
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
        var category = e.target.parentElement.getAttribute('category');
        var course_date = e.target.parentElement.getAttribute('course_date');
        var url = e.target.parentElement.getAttribute('url');
        var address = e.target.parentElement.getAttribute('address');
        
        //var date= document.getElementById('data').value;
        
        
        
        if(category=='Maquiagem'){
            document.querySelector('#maquiagemRadio').setAttribute("checked","");
        } else 
        
        if(category=='Hair'){
            document.querySelector('#hairRadio').setAttribute("checked","");
        } else 

        if(category=='Manicure'){
            document.querySelector('#manicureRadio').setAttribute("checked","");
        } else

        if(category=='Estética'){
            document.querySelector('#esteticaRadio').setAttribute("checked","");
        }



        formUpd.title.value=title;
        formUpd.content.value=content;        

        formUpd.course_date.value=course_date;
        formUpd.url.value=url;
        formUpd.address.value=address;
        //formUpd.data.value=date;
        img_atual.setAttribute('src',img);
        fileButton.setAttribute('value',img);
        



        if(formUpd){

            formUpd.addEventListener('submit', (e) => {
                e.preventDefault();
                db.collection('courses').doc(id).update({
                    title:formUpd.title.value,
                    content: formUpd.content.value,
                    image: img,
                    category: formUpd.category.value,
                    course_date: formUpd.course_date.value,
                    url: formUpd.url.value,
                    address: formUpd.address.value,
                    //date: date,
                })
                //alert('Atualizado com sucesso');
                
                
                document.getElementById("myModalsix").setAttribute("style","display:none;");

                setTimeout(function(){
                    window.location.reload(1);
                 }, 500);
            });
        
        }

        

    });

 
    //document.querySelector("table").setAttribute("id","data-table-basic");
}



//real-time listener
db.collection('courses').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        if(change.type == 'added'){
            renderCourse(change.doc);
        } else if(change.type == 'removed'){
            let tr = courseList.querySelector('[data-id=' + change.doc.id + ']'); 
            courseList.removeChild(tr);          
        } else if(change.type == 'modified'){
               
           let tr = courseList.querySelector('[data-id=' + change.doc.id + ']'); 
           courseList.removeChild(tr);
           renderCourse(change.doc);
        }
        
    })

})


//getting data
/*db.collection('users').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        renderCourse(doc);
    })
})*/


