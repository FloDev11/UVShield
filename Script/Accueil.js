

// Code pour faire tourner le logo

let angle = 0;
let image = document.getElementById('logo_tourne');

setInterval(() => {
   angle = (angle + 5) % 360; // Augmente l'angle de 10 degrés
image.style.transform = `rotate(${angle}deg)`; // Applique la rotation à l'image
}, 50);


// Code pour afficher un élément en scrollant


let image1 = document.getElementById('image1')
let container1 = document.getElementById('container1')
let image2 = document.getElementById('image2')
let container2 = document.getElementById('container2')
let container3 = document.getElementById('container3')

window.addEventListener('scroll', function()  {
    
    if (window.scrollY > 500) {
      image1.classList.add('visible')
      container1.classList.add('visible1')
    }if(window.scrollY > 1300) {
        image2.classList.add('visible3')
        container2.classList.add('visible2')
    }if (window.scrollY > 2000) {
        container3.classList.add('visible4')
    }
})



