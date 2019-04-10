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
    let del_btn = document.createElement('button');
    let upd_btn = document.createElement('button');


    tr.setAttribute('data-id',doc.id);
    tr.setAttribute('title',doc.data().title);
    tr.setAttribute('content',doc.data().content);
    tr.setAttribute('image',doc.data().image);
    tr.setAttribute('category',doc.data().category);
    tr.setAttribute('course_date',doc.data().course_date);

    title.textContent= doc.data().title;
    content.textContent= doc.data().content;
    var img_url = doc.data().image;
    image.innerHTML= '<img src="'+img_url+'" width="150">';
    category.textContent= doc.data().category;
    course_date.textContent= doc.data().course_date;
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
    tr.appendChild(upd_btn);
    tr.appendChild(del_btn);

    courseList.appendChild(tr);

    // deleting data
    del_btn.addEventListener('click', (e) => {
        
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('courses').doc(id).delete();
    });



   //updating data
    upd_btn.addEventListener('click', (e) => {

        document.getElementById("myModalsix").setAttribute("style","display:block;");
        

        var id = e.target.parentElement.getAttribute('data-id');
        var title = e.target.parentElement.getAttribute('title');
        var content = e.target.parentElement.getAttribute('content');
        var category = e.target.parentElement.getAttribute('category');
        var course_date = e.target.parentElement.getAttribute('course_date');
        
        //var date= document.getElementById('data').value;

        var img='';
        
        
        if(document.getElementById("fileButton").value != "") {
            img='sdds';
        } else {
            img = e.target.parentElement.getAttribute('image');
        }



        formUpd.title.value=title;
        formUpd.content.value=content;
        formUpd.category.value=category;
        formUpd.course_date.value=course_date;
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
                    //date: date,
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

                       
        },

    );
});