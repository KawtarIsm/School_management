
<!DOCTYPE HTML>
<html lang="fr">

<head>

	<title>@yield('title') - ecole </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>
<body>
    <div class="main-bg">
		<!-- title -->
		<h1>@yield('title')</h1>
		<!-- //title -->
<!---728x90--->

		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="images/user.jpg" alt="" />
				</div>
				<form action="/ecole/inscription" method="post">
                    @csrf
					<p class="legend">inscription<span class="fa fa-hand-o-down"></span></p>
                    <div class="input">
						<input type="text" placeholder="CIN" name="CIN" required />
						<span class="fa fa-envelope"></span>
					</div>
                    <div class="input">
						<input type="text" placeholder="Prenom" name="Prenom" required />
						<span class="fa fa-envelope"></span>
					</div>
                    <div class="input">
						<input type="text" placeholder="Nom" name="Nom" required />
						<span class="fa fa-envelope"></span>
					</div>
                    <div class="input">
						<input type="date" placeholder="Date_Naissance" name="Date_Naissance" required />
						<span class="fa fa-envelope"></span>
					</div>
                    <div class="input">
						<input type="number" placeholder="Note_Bac2" name="Note_Bac2" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="email" placeholder="Email" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
					>
                    <div class="input">
						<input type="text" placeholder="Tel" name="Tel" required />
						<span class="fa fa-envelope"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				
			</div>
		</div>
		<!-- //content -->
<!---728x90--->
		
	</div>

</body>

</html>