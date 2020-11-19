<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/templates/aboutme/css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<div>
				<span>Trần Nguyễn Gia Huy</span>
				<a href="index.html" class="logo"><img src="/templates/aboutme/images/logo.png" alt=""></a>
				<span class="tagline">Mỗi ngày là một món quà</span>
			</div>
			<ul>
				<li class="selected">
					<a href="{{route('aboutme.index')}}">Trang chủ</a>
				</li>
				<li>
					<a href="{{route('aboutme.about')}}">Giới thiệu</a>
				</li>
				<li>
					<a href="{{route('aboutme.project')}}">Dự án thực hiện</a>
				</li>
				<li>
					<a href="{{route('aboutme.news')}}">Tin tức</a>
				</li>
				<li>
					<a href="{{route('aboutme.contact')}}">Liên hệ</a>
				</li>
			</ul>
		</div>
	</div>
	

		