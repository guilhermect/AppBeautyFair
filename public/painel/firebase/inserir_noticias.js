
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



    //update progress bar
    task.on('state_changed', 

        function progress(snapshot){
            var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            uploader.value = percentage;

        },

        function error(err){
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

            
                //update progress bar
                task.on('state_changed', 
            
                    function progress(snapshot){
                        var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                        uploader.value = percentage;
            
                    },
            
                    function error(err){
            
                    },
            
                    function complete(){
                       
                        
            
            
                        //saving data
                        if(form){
                            task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                            
                                form.addEventListener('submit', (e) => {
                                    e.preventDefault();
                                    db.collection('news').doc('hair').collection('items').add({
                                        title: form.title.value,
                                        content: form.content.value,
                                        image: downloadURL,
                                        date: form.data.value
                                    })
                                    swal( "Inserido com sucesso" ,  "Veja na página 'Ver notícias'!" ,  "success" );
                                    form.title.value = '';
                                    form.content.value = '';
                                    fileButton.value='';
                                    uploader.value='';
                                    
                                })
            
                            });
                        }
                    }
            
                );
            });
            
            
            
            
            

        },

        function complete(){
           

            //saving data
            if(form){
                task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        db.collection('news').doc('hair').collection('items').add({
                            title: form.title.value,
                            content: form.content.value,
                            image: downloadURL,
                            date: form.data.value
                        })
                        swal( "Inserido com sucesso" ,  "Veja na página 'Ver notícias'!" ,  "success" );
                        form.title.value = '';
                        form.content.value = '';
                        fileButton.value='';
                        uploader.value='';
                        
                    })

                });
            }
        }

    );
});




