(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();

  }); // end of document ready

	$(window).load(function() {
	  var valor1 = 1;
	  var link = "http://pokeapi.co/api/v2/pokemon/" + valor1;
	  $.ajax({
	      url: link,
	      type: 'GET',
	      dataType: 'json',

	    })
	    .done(function() {
	      console.log("success");
	      console.log(valor1);
	      document.getElementById("demo").innerHTML = valor1;
	    })
	    .fail(function() {
	      console.log("error");
	    })
	    .always(function() {
	      console.log("complete");
	    });
	});
})(jQuery); // end of jQuery name space
