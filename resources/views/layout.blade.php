<title>@yield('title')</title>
<style>
.activo a{
color:red;
text-decoration: underline;
}
</style>
</head>
<body>
<!-- <h1>Home</h1> -->
<body>
<nav>
<!-- {{dump(request()->routeIs('home'))}} -->
<table class="table">
<thead class="table table-bordered">
<!-- <tr>
<th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a></th>
<th scope="col" class="{{ setActivo('nosotros') }}"> <a href="nosotros">Nosotros</a></th>
<th scope="col" class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a></th>
<th scope="col" class="{{ setActivo('contacto') }}"> <a href="contacto">Contacto</a></th>
</tr> -->
</thead>
</body>
</nav>
</table>
<nav>
<table class="table">
@include('partials.nav')
@yield('content')
</table>
</nav>