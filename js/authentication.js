var authGoogle = document.getElementById ('authGoogle');
var authFacebook = document.getElementById ('authFacebook');

var provider = new firebase.auth.GoogleAuthProvider();

authGoogle.addEventListener('click', function(){
  var provider = new firebase.auth.GoogleAuthProvider();
  signIn(provider);
});

authFacebook.addEventListener('click', function(){
  var provider = new firebase.auth.FacebookAuthProvider();
  signIn(provider);
});

function signIn(provider) {
  firebase.auth()
    .signInWithPopup(provider)
    .then((result) => {
      /** @type {firebase.auth.OAuthCredential} */
      var credential = result.credential;
  
      // This gives you a Google Access Token. You can use it to access the Google API.
      var token = credential.accessToken;
      // The signed-in user info.
      var user = result.user;
      // ...
    }).catch((error) => {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // The email of the user's account used.
      var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential;
      // ...
    });
}