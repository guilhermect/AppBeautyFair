
const form = document.querySelector('#add-form');


//Upload File

var uploader = document.getElementById('uploader');
var fileButton = document.getElementById('fileButton');

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
           

            //saving data
            if(form){

                var checkedValue = document.querySelector('.category:checked').value;


                task.snapshot.ref.getDownloadURL().then(function(downloadURL) {

                
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        db.collection('courses').add({
                            title: form.title.value,
                            content: form.content.value,
                            image: downloadURL,
                            category: checkedValue,
                            course_date: form.data_curso.value,
                            date: form.data.value
                        })
                        swal( "Inserido com sucesso" ,  "Veja na página 'Ver cursos'!" ,  "success" );
                        form.title.value = '';
                        form.content.value = '';
                        checkedValue = '';
                        form.data_curso.value = '';
                        fileButton.value='';
                        uploader.value='';
                        
                    })

                });
            }
        }

    );
});




