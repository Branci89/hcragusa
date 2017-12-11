
<button onclick="topFunction()" id="myBtn" title="Go to top">Up</button>
<footer class="w3-row">
	<div class="w3-third">
		<table>
			<tbody>
				<tr>
					<th>Link Utili:</th>
					<td><a href="http://www.federhockey.it" target="_blank">federhockey.it</a> |<br></td>
					<td><a href="http://www.ehlhockey.nl" target="_blank">ehlhockey.nl </a></td>
				</tr>				
			</tbody>
		</table>
	</div>
	<div class="w3-third" id="piva">
		p.iva: 01457450888
	</div>
</footer>
<script>
$(".hamburger").click(function(){
  	if($(".mobmenu").is(":hidden"))
  		  	w3_open();
  	else w3_close();
  	$(".hamburger").toggleClass("is-active");
});
function w3_open() {
   // $(".mobmenu").css("width", "100%");
    $(".mobmenu").slideDown();
}
function w3_close() {
	$(".mobmenu").slideUp();
}
function myFunction(id, id_2) {
	if($("#"+id).is(":hidden")){
    	$("#"+id).slideDown();
    	$("#"+id_2).toggleClass("mobli mobli-open");
    	}
    else {
        $("#"+id).slideUp(function(){$("#"+id_2).toggleClass("mobli-open mobli");});
        }
}
</script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	var body = $("html, body");
	body.stop().animate({scrollTop:0}, 1000, 'swing');
    
}
</script>
</html>
