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
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
		<script>
			$().ready(function() {
			    $("#qform").validate();
			});
			</script>
	</head>
	<body class="">

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
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Elements -->
							<article id="elements">
								<!-- <h2 class="major">改車圖鑑</h2> -->
									
								<section>
									<h3 class="major">改車圖鑑-問卷調查</h3>
									<form method="post" action="{{ route('qanswer.store') }}" id="qform">
										{{ csrf_field()}}
										<div class="fields">
											<div class="field half">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" value="" placeholder="abel@gmail.com" required/>
											</div>
											@foreach($qtitle as $title)
												<div class="field">
													<label for="message">{{$title->no}}.{{$title->title}}</label>
												@if($title->no == 3 || $title->no == 6 || $title->no == 7)
													<textarea name="q{{$title->no}}" id="" placeholder="留下您的建言" rows="3"></textarea>
												@else
													<select name="q{{$title->no}}" id="">
														<option value="">-</option>
														<option value="1">是</option>
														<option value="-1">否</option>
													</select>
												@endif
												</div>
											@endforeach
										</div>
										<ul class="actions">
											<li><input type="submit" value="完成" class="primary" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://www.facebook.com/ccabel42">Abel Chang</a>.</p>
						<p class="copyright"><a href="mailto:ccabel42@gmail.com" target="_blank">ccabael42@gmail.com</a></p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
	</body>
</html>
