const caravanList = document.querySelector('#caravan-list');  
const formUpd = document.querySelector('#update-caravan-form');

// Create element and render user
function renderCourse(doc){
    let tr = document.createElement('tr');
    let title = document.createElement('td'); 
    let address = document.createElement('td'); 
    let city = document.createElement('td'); 
    let state = document.createElement('td'); 
    let email = document.createElement('td'); 
    let phone1 = document.createElement('td'); 
    let phone2 = document.createElement('td'); 



    tr.setAttribute('data-id',doc.id);
    tr.setAttribute('title',doc.data().title);
    tr.setAttribute('address',doc.data().address);
    tr.setAttribute('city',doc.data().city);
    tr.setAttribute('state',doc.data().state);
    tr.setAttribute('email',doc.data().email);
    tr.setAttribute('phone1',doc.data().phone1);
    tr.setAttribute('phone2',doc.data().phone2);

    title.textContent= doc.data().title;
    address.textContent= doc.data().address;
    city.textContent= doc.data().city;
    state.textContent= doc.data().state;
    email.textContent= doc.data().email;
    phone1.textContent= doc.data().phone1;
    phone2.textContent= doc.data().phone2;

     
    tr.appendChild(title);
    tr.appendChild(address);
    tr.appendChild(city);
    tr.appendChild(state);
    tr.appendChild(email);
    tr.appendChild(phone1);
    tr.appendChild(phone2);
  

    caravanList.appendChild(tr);

}

//real-time listener
db.collection('caravans').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        if(change.type == 'added'){
            renderCourse(change.doc);
        } else if(change.type == 'removed'){
            let tr = caravanList.querySelector('[data-id=' + change.doc.id + ']'); 
            caravanList.removeChild(tr);          
        } else if(change.type == 'modified'){
               
           let tr = caravanList.querySelector('[data-id=' + change.doc.id + ']'); 
           caravanList.removeChild(tr);
           renderCourse(change.doc);
        }
        
    })

})

