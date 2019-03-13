const userList = document.querySelector('#user-list');
const form = document.querySelector('#add-user-form');

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
    del_btn.textContent = 'Delete'; 
    upd_btn.textContent = 'Update'; 

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
    })
    
}

//getting data
/*db.collection('users').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        renderUser(doc);
    })
})*/

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













