$(function() {

    var selectedClass = "";

    $(".filter").click(function(){

        selectedClass = $(this).attr("data-rel");

        $("#gallery").fadeTo(100, 0.1);

        $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');

        setTimeout(function() {

            $("."+selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        
        }, 300);

    });

});

/*------------------------------------*\
	Modals
\*------------------------------------*/

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img.onclick = function(){

  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
  $("#navMenu").hide();
  
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {

  modal.style.display = "none";
  $("#navMenu").show();

}