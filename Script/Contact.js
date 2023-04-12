// Code pour faire tourner le logo

let angle = 0;
let image = document.getElementById('logo_tourne');

setInterval(() => {
   angle = (angle + 5) % 360; // Augmente l'angle de 10 degrés
image.style.transform = `rotate(${angle}deg)`; // Applique la rotation à l'image
}, 100);