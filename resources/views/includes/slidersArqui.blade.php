<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="galeria1">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('adidas1');
    var modalImg = document.getElementById("galeria1");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>