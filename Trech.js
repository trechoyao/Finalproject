window.addEventListener('scroll', reveal);

function reveal(){
    let reveals = document.querySelectorAll('.reveal');

    for(let i = 0; i<reveals.length; i++){

        let windowheight = window.innerHeight;
        let revealtop = reveals[i].getBoundingClientRect().top;
        let revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}

function goLogin(){
    window.location.href =  "http://127.0.0.1/loginpage.php";
}

function goRegister(){
    document.getElementById("signup").style.display = "block";
    document.getElementById("logincon").style.display = "none";
}

function goLI(){
    document.getElementById("signup").style.display = "none";
    document.getElementById("logincon").style.display = "block";
}