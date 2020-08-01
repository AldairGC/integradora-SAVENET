$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});
//validar

var userName = document.getElementById('userName').value;
var userPw = document.getElementById('userPw').value;

// guardas los elementos en el localstorage
function store() {
    nom = document.getElementById('name').value;
    localStorage.setItem('pw', pw.value);
    localStorage.setItem('emeil', em.value);
    localStorage.setItem('name', nom);
}

// valida el acceso de login 
function check() {

    // guradamos en una variable local el contenido del localstorage
    var storedName = localStorage.getItem('name');
    var storedPw = localStorage.getItem('pw');

    // guardamos los datos que nos proporciona el usuaio al momento del login(no registro)
    var userName = document.getElementById('userName');
    var userPw = document.getElementById('userPw');

    //comparamos valores de las variables y damos acceso o lo denegamos 
}
