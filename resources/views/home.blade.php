<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>

<body>
<nav class="navbar navbar-expand-lg shadow p-1  bg-body-tertiary " style="background-color: #0174BE;">
  <div class="container-fluid">
  <h4 class="text-Primary mt-1" style="color:white; font-size:larger;font-weight:bolder;font-family: 'Poppins', sans-serif;"> 
  Politeknik Negeri Bengkalis</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link " style="color:white; font-size:larger;font-weight:bolder;font-family: 'Poppins', sans-serif;"  
        href="{{ route('auth.login') }}">Login</a>
        <a class="nav-link" style="color:white; font-size:larger;font-weight:bolder;font-family: 'Poppins', sans-serif;" 
        href="{{ route('auth.register') }}">Register</a>
      </div>
    </div>
  </div>
</nav>
	
	<section class="box " style="width: 200px;">  
		<video style="width:fit-content;" src="image/Politeknik Negeri Bengkalis.mp4" autoplay muted loop></video>
	</section>
    
    <div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bund le.min.js"></script>
</body>

</html>

