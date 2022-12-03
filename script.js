
var icon = document.getElementById("icon");
icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        icon.src = "image/sun.png";
    }else{
        icon.src = "image/moon.png";
    }
}

const button = document.getElementById("btn");
button.addEventListener("click", function showInfo() {
    const x = document.getElementById('info');
    if(x.style.display == 'none'){
        x.style.display ='block';
    } else{
        x.style.display = 'none';
    }
});

function press(){
    alert('Silahkan Klik tombol diatas : Pesan');
}

const judul = document.getElementById('judul');
judul.addEventListener('mouseenter',function showInfo(){
    judul.style.color = "red"
})

judul.addEventListener('mouseleave',function showInfo(){
    judul.style.color = "var(--primary-color)"
})

