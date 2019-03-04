const userList = document.querySelector('#user-list');
const form = document.querySelector('#add-user-form');

// Create element and render user
function renderUser(doc){
    let tr = document.createElement('tr');
    let email = document.createElement('td'); 
    let name = document.createElement('td'); 
    let del_btn = document.createElement('button');



    tr.setAttribute('data-id',doc.id);
    email.textContent= doc.data().email;
    name.textContent= doc.data().name;
    del_btn.textContent = 'Delete'; 

    tr.appendChild(email);
    tr.appendChild(name);
    tr.appendChild(del_btn);

    userList.appendChild(tr);

    // deleting data
    del_btn.addEventListener('click', (e) => {
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('users').doc(id).delete();
        alert('Deletado com sucesso');
    })
    
}

//getting data
db.collection('users').get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        renderUser(doc);
    })
})

//saving data
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









