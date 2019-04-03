const userList = document.querySelector('#user-list');  
const formUpd = document.querySelector('#update-user-form');


// Create element and render user
function renderUser(doc){
    let tr = document.createElement('tr');
    let title = document.createElement('td'); 
    let content = document.createElement('td'); 
    let image = document.createElement('td'); 
    let date = document.createElement('td'); 
    let del_btn = document.createElement('button');
    let upd_btn = document.createElement('button');


    tr.setAttribute('data-id',doc.id);
    tr.setAttribute('title',doc.data().title);
    tr.setAttribute('content',doc.data().content);
    tr.setAttribute('image',doc.data().image);

    title.textContent= doc.data().title;
    content.textContent= doc.data().content;
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



   //updating data
    upd_btn.addEventListener('click', (e) => {

        document.getElementById("myModalsix").setAttribute("style","display:block;");


        var id = e.target.parentElement.getAttribute('data-id');
        var title = e.target.parentElement.getAttribute('title');
        var content = e.target.parentElement.getAttribute('content');
        var image = e.target.parentElement.getAttribute('image');

        formUpd.title.value=title;
        formUpd.content.value=content;
        formUpd.image.value=image;

        if(formUpd){

            formUpd.addEventListener('submit', (e) => {
                e.preventDefault();
                db.collection('news').doc('hair').collection('items').doc(id).update({
                    title:formUpd.title.value,
                    content: formUpd.content.value,
                    image: formUpd.image.value,
                })
                //alert('Atualizado com sucesso');
                
                
                document.getElementById("myModalsix").setAttribute("style","display:none;");
                //location.reload()
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