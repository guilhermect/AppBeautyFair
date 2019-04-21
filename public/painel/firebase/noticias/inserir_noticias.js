const form = document.querySelector('#add-user-form');


//Upload File

var uploader = document.getElementById('uploader');
var fileButton = document.getElementById('fileButton');

//Listen for file selection
fileButton.addEventListener('change', function(e){
    //Get file
    var file = e.target.files[0];

    //Create storage ref
    var storageRef = firebase.storage().ref('news/' + file.name);


    //Upload file
    var task = storageRef.put(file);

    var img='';

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

    

    //saving data
    if(form){

        var checkboxes = document.getElementsByName('category[]');
        var vals = "";

        for (var i=0, n=checkboxes.length;i<n;i++) 
        {
            if (checkboxes[i].checked) 
            {
                vals += ","+checkboxes[i].value;
            }
        }
        if (vals) vals = vals.substring(1);
        
        
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            db.collection('news').doc('hair').collection('items').add({
                title: form.title.value,
                content: form.content.value,
                categories: vals,
                image: img,
                date: form.data.value
            })
            swal( "Inserido com sucesso" ,  "Veja na página 'Ver notícias'!" ,  "success" );
            form.title.value = '';
            form.content.value = '';

            for (i=0, n=checkboxes.length;i<n;i++) 
            {
                checkboxes[i].checked=false;   
            }

            fileButton.value='';
            uploader.value='';

            

            
        })
    }
});




