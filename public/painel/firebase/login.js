firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      window.location='http://localhost/AppBeautyFair/painel/ver_noticias';
    } else {
      //window.location='index';
    }
  });

function login(){
    var userEmail = document.getElementById("email_field").value;
    var userPass = document.getElementById("pass_field").value;

    firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = 'Não foi encontrado um usuário com estas credenciais';

        window.alert("Erro: " + errorMessage);
        // ...
      });
}

