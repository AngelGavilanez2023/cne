
<footer class="pie" style="background: #F3EDEB">
  <br>
    <div class="row">
        <div class="col-md-4 text-center">
            <h4><b>Ubícanos en:</b></h4>
            <i class="bi bi-geo-alt"style="font-size: 22px;"></i>
            Av. 6 de Diciembre N33-122 y Bosmediano
        </div>
        <div class="col-md-4 text-center">
            <h4><b>Contáctanos:</b></h4>
            <i class="bi bi-telephone-inbound" style="font-size: 22px;"></i>
            (593-2) 381-5410 ext 10 – 11 – 12
            <br>
            <i class="bi bi-envelope-at" style="font-size: 22px;"></i>
             secretariageneral@cne.gob.ec
        </div>
        <div class="col-md-4 text-center">
            <h4><b>Nuestras redes sociales:</b></h4>
            <a href="https://es-la.facebook.com/"><i class="bi bi-facebook" style="font-size: 36px;"></i></a>
            <a href="https://www.youtube.com/@2012cne"><i class="bi bi-youtube" style="font-size: 36px;"></i></a>
            <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter" style="font-size: 36px;"></i></a>
        </div>
        <hr>
        <div class="col-md-12 text-center">
          <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
              <br>
              Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
              <br>
              Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
          </p>
        </div>


    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('plantilla/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/isotope.min.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/owl-carousel.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/lightbox.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/tabs.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/video.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/slick-slider.js'); ?>"></script>
<script src="<?php echo base_url('plantilla/assets/js/custom.js'); ?>"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos },
        800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
</script>
</body>

</body>
</html>
