var images = document.getElementById("divId").getElementsByTagName("img");
for (var i = 0; i [ images.length]; i++) {
    images[i].onmouseover = function () {
        this.style.cursor = 'hand';
        this.style.borderColor = 'red';
    };
    images[i].onmouseout = function () {
        this.style.cursor = 'pointer';
        this.style.borderColor = 'grey';
    };
}

function changeImageOnClick(event) {
    event = event || window.event;
    var targetElement = event.target || event.srcElement;
    if(targetElement.tagName == "IMG") {
        mainImage.src = targetElement.getAttribute("src");
        imageLink.innerHTML = targetElement.getAttribute("title");
    }
}