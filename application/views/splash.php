<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<meta charset="UTF-8">
	<title>The Salon at Whole Body</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="/media/reset.css?v=1">
	<link rel="stylesheet" href="/media/style.css?v=1">
		
	
	<link rel="shortcut icon" href="/media/images/favicon.ico">
	<style type="text/css" media="screen">
		body{
			background:url('/media/woodsplash.png') repeat-x #16afbb;
		}
			
	</style>
</head>


<body>
	<div id="wrap">
		<div id="splash">
			<input type="text" name="email" value="" id="email" placeholder="Sign up for our Email Newsletter">
		</div>
	</div>
	<div id="footer">
		1690 S. Bascom Ave, Campbell, CA 95008   •   408.371.5000
		<ul id="social">
			<li><a href="http://www.facebook.com/wfmcampbell">
				<img src="/media/fb.png" />
			</a></li>
			<li><a href="http://www.twitter.com/wfmnorcal">
				<img src="/media/twitter.png" />
			</a></li>
			<li><a href="/">
				<img src="/media/home.png" />
			</a></li>
		</ul>
	</div>
	<!-- main content wrapper end -->

	<script type="text/javascript" src="/media/jquery.js"></script>
	<!--<script type="text/javascript" src="/media/site.js"></script>-->
	<script type="text/javascript" charset="utf-8">
		$('#email').keypress(function(e) {

			
            if(e.which == 10 || e.which == 13) {
	
				if ($(this).val() == '') {
					return false;
				}
				$.ajax({
					url: '/main/email',
					data: 'email='+$(this).val(),
					success: function(txt){
						alert(txt)
						$('#email').val('');
					}
				})
            }
        });
	</script>
</body>
</html>