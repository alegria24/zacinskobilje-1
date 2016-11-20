function get(link)
{
    var ajax = new XMLHttpRequest();	
	ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            document.open();
            document.write(ajax.responseText);
            document.close();
        }
        if (ajax.readyState == 4 && ajax.status == 404)
        alert("error");
       
    }
    ajax.open("GET", link + ".html", true);
	     
	ajax.send();
}

var modal = document.getElementById('myModal');

var img1 = document.getElementById('myImg1');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var img4 = document.getElementById('myImg4');
var img5 = document.getElementById('myImg5');

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img1.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

img3.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

img4.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

img5.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) {
        modal.style.display = "none";
    }
});
