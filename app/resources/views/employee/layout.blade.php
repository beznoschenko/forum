<!DOCTYPE html>
<html>
	<head>
		<title>@yield("title")
        </title>
	</head>
	<body>
		<header>
			<h1>@yield("header")
            </h1>
		</header>
		<main>
			@section("content")
            @show
		</main>
	</body>
</html>