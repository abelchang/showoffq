<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143457155-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-143457155-1');
		</script>

		<title>改車圖鑑-問卷調查</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>改車圖鑑 - 問卷調查</h1>
									<p>
										各位車友好，小弟我是一個愛車的宅宅軟體工程師。</p>
										<p>因為想要升級鋁圈時，花了很多的時間搜尋車子圖片。</br>
										因此想要製作一個網站，讓車友們未來想要讓愛車更加個性化，可以更方便的找到所需的資訊。</br>
										解決自己需求同時也可以讓更多的車友可以使用。</p>
										<p>
										目前網站的設想只會放置google廣告，看能不能產生點收益作為網站持續營運的費用。</br>
										因此想藉由這問卷了解，這樣的需求是不是大家共同的困擾呢？</br>
										問卷只有七題，大約打擾兩分鐘的時間!
									</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="{{ route('qanswer.create',['#elements'])}}">開始問卷</a></li>
								@if(Auth::check())
								<li><a href="{{ route('qanswer.qstatistics')}}">問卷統計</a></li>
								@endif
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://www.facebook.com/ccabel42">Abel Chang</a>.</p>
						<p class="copyright"><a href="mailto:ccabel42@gmail.com" target="_blank">ccabael42@gmail.com</a></p>
					</footer>
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
