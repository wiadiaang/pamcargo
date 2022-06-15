<div style="height:42px; background:#52b042;">

    <div class="container" style="padding-top:10px;">

        <div style="float:left;">

            <span style="color:#fff"><b>express.rembon.co.id</b> | Jasa Pengiriman Barang ke Indonesia</span>

        </div>

        <div style="float:right;">

            <div class="login-status">

                <?php
                //  if($this->session->userdata('user_id')){ ?>
                <!-- <span style='color:#FFFFFF;'>Login As :</span> <span style='margin:0 10px 0 10px; color: #FFFFFF;'>|</span> <a style='color:#FFFFFF;' href='customer/' target='_blank'>Control Panel</a>  -->
                <?php 
            // }else{ ?>
                <!-- <a style="color:#FFFFFF;" class="ga-trackevent" data-gacat="MainNav" data-galab="Login" href="login">Masuk</a>  -->
                <a style="color:#FFFFFF;" class="ga-trackevent" href="<?= base_url('auth');?>">Masuk</a> 
                <span style="margin:0 10px 0 10px; color: #FFFFFF;">|</span>
                <a style="color:#FFFFFF;" class="ga-trackevent" data-gacat="MainNav" data-galab="Login" href="auth/register">Daftar</a>
                <?php
            //  } ?>

            </div>

        </div>

    </div>

</div>

<div class="scrollkepala">

    <header class="mpdHeader">

        <a href='/' class="mpd-logo" tabindex="-1">

            <div class="mpd-logo-text"><img src="<?= base_url()?>static/logo.png" style="position: relative; float: left; width: 100%; object-fit: scale-down;object-position: 50% 50%;"></div>
        </a>

        <nav class="mpdNavigation" id="main-menu-container">

            <div class="mobile-menu-header">Menu</div>

            <ul>

            	<li><a href="<?php echo base_url(); ?>" class="ga-homeevent" data-gacat="MainNav" data-galab="Home" tabindex="-1">Beranda</a></li>

            	<li class="dropdown" id="mob-sub-open">
                        <a href="#" class="dropdown-toggle ga-trackevent" data-toggle="dropdown" data-gacat="MainNav" data-galab="UsefulStuff" tabindex="-1">Tentang<span class="caret"></span></a>
                        <ul class="dropdown-menu mini-menu mobile-menu" role="menu">
                            <li><a href="<?php echo base_url(); ?>about">Tentang Kami</a></li>
                            <li><a href="<?php echo base_url(); ?>">Program</a></li>
                            <li><a href="<?php echo base_url(); ?>">Karir</a></li>
            	    </ul>
            	</li>

            	<li class="dropdown" id="mob-sub-open">
                        <a href="#" class="dropdown-toggle ga-trackevent" data-toggle="dropdown" data-gacat="MainNav" data-galab="UsefulStuff" tabindex="-1">Alat<span class="caret"></span></a>
                        <ul class="dropdown-menu mini-menu mobile-menu" role="menu">
                            <li><a href="<?php echo base_url(); ?>how-it-works">Cara Kerja</a></li>
                            <li><a href="<?php echo base_url(); ?>measuring">Pengukuran</a></li>
                            <li><a href="<?php echo base_url(); ?>packaging">Pengemasan</a></li>
                            
            	    </ul>
            	</li>

                    <li><a href="<?php echo base_url(); ?>term-condition" class="ga-trackevent" data-gacat="MainNav" data-galab="Services" tabindex="-1">TOS</a></li>



                    <li><a href="<?php echo base_url(); ?>tracking" class="ga-trackevent" data-gacat="MainNav" data-galab="Tracking" tabindex="-1">Pelacakan</a></li>
            	<!--<li><a href="#" class="ga-trackevent" data-gacat="MainNav" data-galab="Rate-request" tabindex="-1">Rate Request</a></li>-->
            	<li><a href="<?php echo base_url(); ?>contact-us" class="ga-trackevent" data-gacat="MainNav" data-galab="Contact" tabindex="-1">Hubungi Kami</a></li>
                    <li class="deskHide last-mob-link"><a href="javascript:void(0)" class="close-mob-menu fl pad-top-10">Close &raquo;</a></li>

            </ul>

        </nav>

        <script src="<?= base_url()?>express.rembon_components/hub/scripts/jquery-scrolltofixed-min.js"></script>
        <script>

        	jQuery.noConflict();
        	  (function($) {
        	  $(function() {
        	  
                $('.scrollkepala').scrollToFixed();
                $('.scrollkepala').bind('fixed.ScrollToFixed', function() { $(this).css('background', '#none'); });
                $('.scrollkepala').bind('unfixed.ScrollToFixed', function() { $(this).css('background', '#none'); });

                $('.scrollkaki').scrollToFixed( {
                    bottom: 0,
                    limit: $('.scrollkaki').offset().top,
                    preFixed: function() { $(this).css('color', 'blue'); },
                    postFixed: function() { $(this).css('color', ''); },
                });

                // Order matters here because we are dependent on the state of the scrollkaki above for
                // our limit.  The scrollkaki must be set first; otherwise, we will not be in the right
                // position on a window refresh, if the limit is supposed to be invoked.
                $('#scrollkanan').scrollToFixed({
                    marginTop: $('.scrollkepala').outerHeight(true) + 100,
                    limit: function() {
                        var limit = $('.scrollkaki').offset().top - $('#scrollkanan').outerHeight(true) - 70;
                        return limit;
                    },
                    minWidth: 1000,
                    zIndex: 999,
                    fixed: function() {  },
                    dontCheckForPositionFixedSupport: true
                });

                $('#scrollkanan').bind('unfixed.ScrollToFixed', function() {
                    if (window.console) console.log('scrollkanan preUnfixed');
                });
                $('#scrollkanan').bind('unfixed.ScrollToFixed', function() {
                    if (window.console) console.log('scrollkanan unfixed');
                    $(this).css('color', '');
                    $('.scrollkepala').trigger('unfixed.ScrollToFixed');
                });
                $('#scrollkanan').bind('fixed.ScrollToFixed', function() {
                    if (window.console) console.log('scrollkanan fixed');
                    $(this).css('color', 'red');
                    $('.scrollkepala').trigger('fixed.ScrollToFixed');
                });
        		
         	  });
        	})(jQuery);

        </script>

    </header>

</div>