
		</div>
		<!-- /wrapper -->

				<!-- map -->

				<div id="map"></div>

				<script>
					mapboxgl.accessToken = 'pk.eyJ1IjoiaW5kZXBlbmRlbnQtZWxlbWVudCIsImEiOiJHbElkZmRvIn0.FYMX650LjLvbJEQQ2_0yfQ';
  						// var startPoint = [26.0742392,-80.1527909];
  						// var endPoint = [-122.6765,45.5231];
  						var map = new mapboxgl.Map({
     						container: 'map',
      						style: 'mapbox://styles/independent-element/ciq3l6977004qdvm44cgzt13h',
      						attributionControl: false,
      						scrollZoom: false,
      						boxZoom: true,
      					});
  					var nav = new mapboxgl.Navigation({position: 'bottom-left'});
					map.addControl(nav);

					var heat = L.heatLayer(addressPoints, {maxZoom: 18}).addTo(map);
    				var draw = true;

    				// add points on mouse move (except when interacting with the map)
    				map.on({
        			movestart: function () { draw = false; },
        			moveend:   function () { draw = true; },
        			mousemove: function (e) {
            			if (draw) {
                			heat.addLatLng(e.latlng);
            			}
        			}
    				})

				</script>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="row">
					<div class="large-12 medium-12 columns">
						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> &mdash; <?php bloginfo('name'); ?>
						</p>
						<!-- /copyright -->
					</div>
				</div> <!-- end #inner-footer -->

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
