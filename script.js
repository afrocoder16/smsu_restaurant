function loader() {
   document.querySelector('.loader').style.display = 'none';
}

function fadeOut() {
   setTimeout(loader, 1500); 
}

window.onload = fadeOut;
