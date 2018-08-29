        <!-- 
        <footer class="page-footer black">
            
            <div class="footer-copyright">
                <div class="container">
                    Made by
                    <a class="white-text" href="http://www.rperformance.com.br">
                        RPerformance
                    </a>
                </div>
            </div>
            
        </footer>
        -->

        
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js">
        </script>
        <script src="js/modernizr.custom.63321.js">
        </script>
        <script src="js/materialize.js">
        </script>
        <script src="js/scrollreveal.js">
        </script>
        <script src="js/prognroll.min.js">
        </script>
        <script src="js/owl.carousel.min.js">
        </script>
        <script src="js/jquery.catslider.js">
        </script>
        <script src="js/init.js">
        </script>
        <script type="text/javascript">

            $( document ).ready(function() {
                
                $("img.logo").css({'transform': 'rotate(360deg)'});

                $( ".lateral-btn" ).click(function() {
                  $( ".relative" ).toggleClass( "act" );
                });

                $('.owl-carousel1').owlCarousel({
                    items:1,
                    loop:true,
                    center:true,
                    dots:false,
                    autoplay:true,
                    autoplayTimeout:8000,
                    autoplayHoverPause:true,
                    URLhashListener:true,
                    autoplayHoverPause:true,
                    startPosition: 'URLHash'
                });                

                $('.owl-carousel2').owlCarousel({
                    autoplay:true,
                    dots:false,
                    margin:25,
                    loop:true,
                    items:12,
                    autoplayTimeout:2000
                });

                $('.owl-carousel3').owlCarousel({
                    autoplay:true,
                    dots:false,
                    margin:25,
                    loop:true,
                    items:12,
                    autoplayTimeout:2000,
                    startPosition: 13
                });     

                $('.owl-carousel4').owlCarousel({
                    autoplay:true,
                    dots:false,
                    margin:25,
                    loop:true,
                    items:12,
                    autoplayTimeout:2000,
                    startPosition: 25
                }); 

                $('.owl-carousel5').owlCarousel({
                    autoplay:true,
                    dots:true,
                    margin:0,
                    loop:true,
                    items:1,
                    autoplayTimeout:3000
                });

                // $owl.trigger('refresh.owl.carousel1');
                
                $('.lateral a, .aba a').on('click', function () {
                    $('.owl-carousel').trigger('stop.owl.autoplay');

                    //simple one (EDIT: not enough to make it work after testing it):
                    //$('.owl-carousel').trigger('changeOption.owl.carousel', { autoplay: false });

                    //or more complicated (will work for one carousel only, or else use 'each'):
                    //EDIT: this one seems to work
                    var carousel = $('.owl-carousel').data('owl.carousel');
                    carousel.settings.autoplay = false; //don't know if both are necessary
                    carousel.options.autoplay = false;
                    $('.owl-carousel').trigger('refresh.owl.carousel');
                });

                $(".lateral a, .aba a, .btn-home").click(function () {                    

                    if ($(".relative").hasClass("act")) {
                      $('.relative').removeClass("act");                        
                    }else{
                    }

                    if (  $( 'img.logo' ).css( "transform" ) == 'none' ){
                        $('img.logo').css("transform","rotate(360deg)");
                    } else {
                        $('img.logo').css("transform","" );
                    }

                    var x = $(this).attr("href");
                    var href = x.substring(1, x.length);

                    var lateral = $('#lateral').attr('class').split(' ').pop();
                    $('#lateral').removeClass(lateral);
                    $('#lateral').addClass(href);

                    var blade = $('#blade').attr('class').split(' ').pop();
                    $('#blade').removeClass(blade);
                    $('#blade').addClass(href);

                    var btnhome = $('#btn-home').attr('class').split(' ').pop();
                    $('#btn-home').removeClass(btnhome);
                    $('#btn-home').addClass(href);

                });

                $('.video-container img').click(function(){
                    video = '<iframe src="'+ $(this).attr('data-video') +'"></iframe>';
                    $(this).replaceWith(video);
                });

                $(function() {
                    $( '#mi-slider' ).catslider();
                });

                $(function() {
                    $("body").prognroll({
                        height:25,        //Progress bar height
                        color:"#9e9e9e", //Progress bar background color
                        position:"bottom",  //Progress bar position can be "top" or "bottom"
                        custom:false     //If you make it true, you can add your custom div and see it's scroll progress on the page    
                    });
                });

                $(".slide nav a").click(function () {
                    var x = $(this).attr("href");
                    var href = x.substring(1, x.length);

                    var nav = $('.slide nav').attr('class').split(' ').pop();
                    $('.slide nav').removeClass(nav);
                    $('.slide nav').addClass(href);
                });

                // /////////////////////////////////////////////// //

                // Arrow ScrollToTop

                $(".scrolltop").click(function() {
                  $("html, body").animate({ scrollTop: 0 }, "slow");
                  return false;
                });


                // Add smooth scrolling to all links
                  $("#home li a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                      // Prevent default anchor click behavior
                      event.preventDefault();

                      // Store hash
                      var hash = this.hash;

                      // Using jQuery's animate() method to add smooth page scroll
                      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                      $('html, body').animate({
                        scrollTop: $(hash).offset().top
                      }, 800, function(){
                   
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                      });
                    } // End if
                  });


                $("body").css("overflow", "hidden");

            });
            // doc.ready

            // loader + scrollreveal
            function splash(param) {
                var time = param;
                setTimeout(function () {
                    
                    $('#loader').fadeOut( "slow" );

                    // Scroll Reveal

                    window.sr = ScrollReveal({ duration: 2000 });
                    // sr.reveal('nav', { opacity: 0 });
                    sr.reveal('.trick', { delay: 50, easing: 'ease-in-out' });
                    sr.reveal('.post-trick', 300 );
                    sr.reveal('.post', 100 );

                    $("body").css("overflow", "auto");


                }, time);
            }


            
              
            

        </script>

    </body>
</html>