$(document).ready(function(){
    // Efek fade-in untuk gambar
    $(".gallery img").fadeIn(500);

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its 'alt' text as a caption
    var img = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the image, open the modal
    $(".gallery img").click(function(){
        modal.style.display = "block";
        img.src = this.src;
        captionText.innerHTML = this.alt;
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
});