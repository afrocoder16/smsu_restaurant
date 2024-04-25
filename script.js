function loader() {
   document.querySelector('.loader').style.display = 'none';
}

function fadeOut() {
   setTimeout(loader, 1500); // Use setTimeout instead of setInterval
}

window.onload = fadeOut;
