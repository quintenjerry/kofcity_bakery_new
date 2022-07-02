
  <div id="preloader"></div>
<!-- New footer -->

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>KOFCITY Bakery</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                        proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Koforidua technical university <br>
                        Koforidua,Ghana<br>
                        Ghana <br>
                        <strong>Phone:</strong> +233 249 120 103<br>+233 20 101 3183<br>
                        <strong>Email:</strong> blordadem146@gmail.com<br>
                    </p>
 
                    <div class="social-links">
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum
                        dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action method="post">
                        <input name="email" type="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>KOFCITY Bakery</strong>. All Rights Reserved
        </div>
        <div class="credits">
          
            Designed by <a href="">quinten</a> <?php echo date("Y") ?> 
        </div>
    </div>
</footer>
<!-- new footer end -->


<!--js file link-->

<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/jquery/jquery-migrate.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./lib/owlcarousel/owl.carousel.min.js"></script>
<script src="./javascript/main.js"></script>



<script>
    
      // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

</script>

</body>
</html>
