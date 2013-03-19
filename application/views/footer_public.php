
<div class="twtr">

<div class="social">
<a href=""><img src="application/views/images/fSmall.png"></a>
<a href=""><img src="application/views/images/goodreads.png"></a>
</div>

<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
	version: 2,
		type: 'profile',
		rpp: 3,
		interval: 30000,
		width: 350,
		height: 235,
		theme: {
			shell: {
				background: '#000000',
					color: '#ffffff'
			},
			tweets: {
				background: '#000000',
					color: '#ffffff',
					links: 'rgb(121, 12, 33)',

			}
		},
			features: {
				scrollbar: false,
					loop: false,
					live: false,
					behavior: 'all'
			}
}).render().setUser('legendaryGoatee').start();
</script>
</div>



