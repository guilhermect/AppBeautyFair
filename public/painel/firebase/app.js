const userList = document.querySelector('#user-list');
const form = document.querySelector('#add-user-form');
const formUpd = document.querySelector('#update-user-form');

// Create element and render user
function renderUser(doc){
    let tr = document.createElement('tr');
    let email = document.createElement('td'); 
    let name = document.createElement('td'); 
    let del_btn = document.createElement('button');
    let upd_btn = document.createElement('button');



    tr.setAttribute('data-id',doc.id);
    email.textContent= doc.data().email;
    name.textContent= doc.data().name;
    del_btn.innerHTML = '<i class="fa fa-times"></i>'; 
    upd_btn.innerHTML = '<a style="color:white;" data-toggle="modal" data-target="#myModalsix"><i class="fa fa-refresh"></i></a>';
     

    /*var dataSet = [
        [email.innerHTML, name.innerHTML, del_btn.innerHTML + ' ' + upd_btn.innerHTML]
    ];

    $('#table').DataTable( {
        data: dataSet
    } );*/

    tr.appendChild(email);
    tr.appendChild(name);
    tr.appendChild(del_btn);
    tr.appendChild(upd_btn);

    userList.appendChild(tr);

    // deleting data
    del_btn.addEventListener('click', (e) => {
        
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('users').doc(id).delete();
    });

   

}


//saving data
if(form){
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        db.collection('users').add({
            email: form.email.value,
            name: form.name.value 
        })
        alert('Inserido com sucesso');
        form.email.value = '';
        form.name.value = '';
    })
}

//updating data
if(formUpd){
    formUpd.addEventListener('submit', (e) => {
        e.preventDefault();
        db.collection('users').doc('RoZgMEcw6Jn3EIBNlCrw').update({
            email: formUpd.email.value,
            name: formUpd.name.value 
        })
        alert('Atualizado com sucesso');
        formUpd.email.value = '';
        formUpd.name.value = '';

    })
}





//real-time listener
db.collection('users').orderBy('name').onSnapshot(snapshot => {
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


function update(){
    
}












