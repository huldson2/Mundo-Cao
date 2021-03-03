var logoutButton = document.getElementById ('logoutButton');

logoutButton.addEventListener('click', function (){
firebase.auth()
    .signOut()
    .then(function () {
        alert('Você se deslogou');
    });

});