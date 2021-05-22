<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="login.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
  
  <title>Document</title>
  
</head>

<body id="body1" style="background-image: url(images/Login.jpg); ">
    <div class="container">
    <div class="row mt-5">
    	 <div class="col-3">
        <div class="mx-3 py-5 ps-4 menü">
          <img src="img/hakan.jpg" class="mx-auto menüİmg" alt="" />
          <div class="mt-3">Muhammed Hakan</div>
          <div>CANSU</div>
          <div class="mt-2">
            <a class="menüLink" href="index.html"><i class="fas fa-home"></i>Anasayfa</a>
          </div>
          <div class="mt-1">
            <a class="menüLink" href="CV.html"><i class="fas fa-pencil-alt"></i> CV</a>
          </div>
          <div class="mt-1">
            <a class="menüLink" href="Şehrim.html"><i class="fas fa-building"></i> Şehrim</a>
          </div>
          <div class="mt-1">
            <a class="menüLink" href="mirasımız.html"><i class="fas fa-camera-retro"></i> Mirasımız</a>
          </div>
          <div class="mt-1">
            <a class="menüLink" href="İlgiAlanlarım.html"><i class="fas fa-camera-retro"></i> İlgi Alanlarım</a>
          </div>
          <div class="mt-1">
            <a class="menüLink" href="login.php"><i class="fas fa-pencil-alt"></i> Login</a>
          </div>
          <div class="mt-1">
            <a class="menüLink" href="iletişim.html"><i class="fas fa-phone-volume"></i> İletişim Sayfası</a>
          </div>

          <div class="mt-5 mb-2 menüSosyalMedya">
            <div class="mt-2">
              <a class="menüSosyalMedyaLink" href=""><i class="fab fa-facebook-f pe-3"></i></a>
            </div>
            <div class="mt-2">
              <a class="menüSosyalMedyaLink" href=""><i class="fab fa-instagram pe-3"></i></a>
            </div>
            <div class="mt-2">
              <a class="menüSosyalMedyaLink" href=""><i class="fab fa-twitter pe-3"></i></a>
            </div>
          </div>
          <span>Hakan Cansu © 2021</span>
        </div>
      </div>

      <nav class="a navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Anasayfa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Şehrim.html">Şehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="CV.html">CV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="mirasımız.html">mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="İlgiAlanlarım.html">İlgi Alanlarım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="iletişim.html">İletişim Sayfası</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    </div></div>

	

	<header>
		
	</header>	
    
    <main>


    	
        <div class="container">
            <div class="row">
				<div id="login" class="container">
					<div id="divlogin" >


						<form action="gitLogin.php" method="POST">
							<div id="divemailpas" class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Email 'g201210013@sakarya.edu.tr'" required="required">
							</div>
							<div id="divemailpas" class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Şifre 'g201210013'" required="required">
							</div>
							<button class="btn btn btn-info" type="submit">Oturum Aç</button><br> <br>
		
							
						</form>


					</div>	
				</div>
        </div>
		
    </main>
    <footer id="footer1" class="py-3 bg-dark text-white text-center">
		Web Teknolojileri Projesi © Muhammed Hakan Cansu 2021
	</footer>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>

</html>