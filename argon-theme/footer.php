<?php wp_footer(); ?>



<section id="footer">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-12 text-center">

          <ul>
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img width="" src="/wp-content/themes/wp-theme/public/img/brand/icon.png" class="img-center text-center"></a>
            <div class="pt-4">
            <h5>Premium Wordpress Themes</h5>
            </div>

          </ul>

        </div>

      </div>
    </div>

</section>

<section id="copyright">
    <div class="container text-center copyright">
        <a class="btn-scroll-on text-center" href="#top"><i class="fa fa-chevron-up"></i></a>
        <div class="footer-claim text-center mt-3"><p><a href="/impressum">About Us</a> | <a href="/impressum">Privacy Policy</a> | <a href="/impressum">Terms of Service</a> | <a href="/impressum">Impressum</a></p></div>
        <div class="footer-claim text-center mt-3"><p>&copy; All rights reserved 2018 | Molecule Themes</p></div>
    </div>

    </div>

</section>

<script>
    window.sr = ScrollReveal();

    sr.reveal('.head-main-img-text', {
        duration: 2000,
        origin: 'left',
        distance: '300px'
    });

    sr.reveal('.subnav-list', {
        duration: 2500,
        origin: 'right'
    });

    sr.reveal('.brand-icon', {
        duration: 2000,
        origin: 'bottom'
    });

    sr.reveal('.footer-claim', {
        duration: 2500,
        origin: 'bottom'
    });

    sr.reveal('.copyright', {
        duration: 2500,
        origin: 'bottom'
    });
</script>


</body>
</html>
