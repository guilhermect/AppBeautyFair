const userList = document.querySelector('#user-list');
const form = document.querySelector('#add-user-form');
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
    title.textContent= doc.data().title;
    content.textContent= doc.data().content;
    var img_url = doc.data().image;
    image.innerHTML= '<img src="'+img_url+'" width="150">';
    date.textContent= doc.data().date;
    del_btn.innerHTML = 'x'; 
    upd_btn.innerHTML = '<a style="color:white;" data-toggle="modal" data-target="#myModalsix"><i class="fa fa-refresh"></i></a>';
     

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

   

}


//saving data
if(form){
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        db.collection('news').doc('hair').collection('items').add({
            title: form.title.value,
            content: form.content.value,
            image: form.image.value,
            date: form.data.value
        })
        alert('Inserido com sucesso');
        form.title.value = '';
        form.content.value = '';
        form.image.value = '';
        
    })
}

//updating data
if(formUpd){
    formUpd.addEventListener('submit', (e) => {
        e.preventDefault();
        db.collection('users').doc('RoZgMEcw6Jn3EIBNlCrw').update({
            content: formUpd.content.value,
            date: formUpd.date.value 
        })
        alert('Atualizado com sucesso');
        formUpd.content.value = '';
        formUpd.date.value = '';

    })
}





//real-time listener
db.collection('news').doc('hair').collection('items').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        if(change.type == 'added'){
            renderUser(change.doc)
        } else if(change.type == 'removed'){
            let tr = userList.querySelector('[data-id=' + change.doc.id + ']'); 
            userList.removeChild(tr);          
        }
    })
})


//getting data
/*db.collection('users').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        renderUser(doc);
    })
})*/












