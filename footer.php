<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Speaker
 */
?>

	</div><!-- #content -->

	<footer id="colophon" <?php speaker_footer_class() ?> role="contentinfo">
		<?php get_template_part( 'template-parts/footer/footer-area' ); ?>
		<?php get_template_part( 'template-parts/footer/layout', get_theme_mod( 'footer_layout_type', speaker_theme()->customizer->get_default( 'footer_layout_type' ) ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b13599920/crm/site_button/loader_2_b05x1j.js');
</script>

<script>
		(function(w,d,u){
			var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
			var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
		})(window,document,'https://cdn-ru.bitrix24.ru/b13599920/crm/tag/call.tracker.js');
</script>

<script id="bx24_form_delay" data-skip-moving="true">
       (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
               (w[b].forms=w[b].forms||[]).push(arguments[0])};
               if(w[b]['forms']) return;
               var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
               var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
          })(window,document,'https://zhitbezdolgov.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

       b24form({"id":"6","lang":"ru","sec":"leq541","type":"delay","delay":5});
</script>
</body>
</html>
