function openAndClosePanel() {
    var object = document.getElementById('openAndClosePanel');
    var btnObject = document.getElementById('openAndCloseBtn');

    if (object.style.display === "none") {
        object.style.cssText = "display: block; transition:all 2s";
        btnObject.innerHTML = 'Close';
    } else {
        object.style.cssText = "display: none; transition:all 2s";
        btnObject.innerHTML = 'Opne';
    }
}