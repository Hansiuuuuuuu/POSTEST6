const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    }
});


//POP BOXX

document.getElementById("submit").addEventListener('click', () => {
    document.getElementById('popup-container').classList.add("show-popup");
})

document.getElementById("ok").addEventListener('click', () => {
    document.getElementById('popup-container').classList.remove("show-popup");
})






