<footer class="footer bg_dark">
    <div class="container">

        <div class="col-md-12">
				<span>
					&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
                </span>


            <div class="social_wrap">
                <ul>
                    <li><a href="gmail.com" title="email" target="_blank"><i class="fa fa-paper-plane"></i></a></li>
                    <li><a href="https://www.instagram.com/just.codeit" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://github.com/matt5346" title="github" target="_blank"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>


        </div>



    </div>
</footer>

</div>


<div class="hidden"></div>

<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitap/mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/TouchSwipe-Jquery-Plugin-master/jquery.touchSwipe.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56242039, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>

<noscript><div><img src="https://mc.yandex.ru/watch/56242039" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152602632-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-152602632-1');
</script>


<? wp_footer(); ?>

</body>
</html>