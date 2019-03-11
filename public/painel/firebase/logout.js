function logout(){
    firebase.auth().signOut().then(function() {
        // Sign-out successful.
        window.location='index';
    }).catch(function(error) {
        // An error happened.
    });
}