<!-- info section -->

<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 info-col">
        <div class="info_detail">
          <h4>
            About Us
          </h4>
          <p>
            It is one of the oldest and largest libraries and
            since its inception, has been providing library support to students, teachers,
            researchers and general readers for more than six decades.
          </p>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 info-col">
        <div class="info_contact">
          <h4>
            Address
          </h4>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                  Location
                </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                  Call +01 1234567890
                </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                  demo@gmail.com
                </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->

<!-- footer section -->
<footer class="footer_section">
  <div class="container">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved
      <a href="#">Book Store</a>
    </p>
  </div>
</footer>
<!-- footer section -->

<!-- jQery -->
<script src="<?= public_path('user/js/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= public_path('user/js/bootstrap.js') ?>"></script>
<script src="<?= public_path('user/js/custom.js') ?>"></script>
<script src="<?= public_path('user/js/validation/register.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<script>
  //ResCarouselCustom();
  var pageRefresh = true;
  
  function ResCarouselCustom() {
    var items = $("#dItems").val(),
      slide = $("#dSlide").val(),
      speed = $("#dSpeed").val(),
      interval = $("#dInterval").val()
    
    var itemsD = "data-items=\"" + items + "\"",
      slideD = "data-slide=\"" + slide + "\"",
      speedD = "data-speed=\"" + speed + "\"",
      intervalD = "data-interval=\"" + interval + "\"";
    
    
    var atts = "";
    atts += items != "" ? itemsD + " " : "";
    atts += slide != "" ? slideD + " " : "";
    atts += speed != "" ? speedD + " " : "";
    atts += interval != "" ? intervalD + " " : ""
    
    //console.log(atts);
    
    var dat = "";
    dat += '<h4 >' + atts + '</h4>'
    dat += '<div class=\"resCarousel\" ' + atts + '>'
    dat += '<div class="resCarousel-inner">'
    for (var i = 1; i <= 14; i++) {
      dat += '<div class=\"item\"><div><h1>' + i + '</h1></div></div>'
    }
    dat += '</div>'
    dat += '<button class=\'btn btn-default leftRs\'><i class=\"fa fa-fw fa-angle-left\"></i></button>'
    dat += '<button class=\'btn btn-default rightRs\'><i class=\"fa fa-fw fa-angle-right\"></i></button>    </div>'
    console.log(dat);
    $("#customRes").html(null).append(dat);
    
    if (!pageRefresh) {
      ResCarouselSize();
    } else {
      pageRefresh = false;
    }
    //ResCarouselSlide();
  }
  
  $("#eventLoad").on('ResCarouselLoad', function() {
    //console.log("triggered");
    var dat = "";
    var lenghtI = $(this).find(".item").length;
    if (lenghtI <= 30) {
      for (var i = lenghtI; i <= lenghtI + 10; i++) {
        dat += '<div class="item"><div class="tile"><div><h1>' + (i + 1) + '</h1></div><h3>Title</h3><p>content</p></div></div>'
      }
      $(this).append(dat);
    }
  });
</script>
<script src="<?= public_path('user/js/resCarousel.js') ?>"></script>
</body>

</html>
