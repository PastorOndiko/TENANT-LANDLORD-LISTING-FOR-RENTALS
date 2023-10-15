<!DOCTYPE html>
<html>
<head>
    <title>Fumbo Komboa Nyumba</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="signin.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
       <!-- Bootstrap core CSS -->
<link href="botstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>


        <body class="text-center">
        <header>
		<h1 class="heading">Fumbo Komboa Nyumba</h1>
		<h3 class="title">List and find your rental with us</h3>
	</header>
    <main class="form-signin">
    <div id="login" style="display: block;">
        
        <form action="login.php" method="POST">
            <div class="form-floating">
            <input type="text" name="login_username" placeholder="Username" required><br>
            </div>
            <div class="form-floating">
            <input type="password" name="login_password" placeholder="Password" required><br>
            </div>
            <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
           
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
    </main>
    <button class="clkbtn"><p><a href="#" onclick="showSignupForm()">Sign Up</a></p></button>
    </div>
    <main class="form-signin">
    <div id="signup" style="display: none;">
      
        <form action="signup.php" method="POST">
        <div class="form-floating">
            <input type="text" name="signup_username" placeholder="Username" required><br>
        </div>
        <div class="form-floating">
        <input type="email" name="signup_email" placeholder="Email" required><br>
        </div>
        <div class="form-floating"> 
            <input type="tel" name="signup_phone" placeholder="Phone Number" required><br>
        </div>
        <div class="form-floating">   
            <input type="password" name="signup_password" placeholder="Password" required><br>
        </div>
            <select name="signup_user_type">
                <option value="tenant">Tenant</option>
                <option value="landlord">Landlord</option>
            </select><br>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
        </form>
    </main>
           
        </form>
        <br>
        <button class="clkbtn"><p><a href="#" onclick="showLoginForm()">Login</a></p> </button> 
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSignupForm() {
            document.getElementById("login").style.display = "none";
            document.getElementById("signup").style.display = "block";
        }

        function showLoginForm() {
            document.getElementById("signup").style.display = "none";
            document.getElementById("login").style.display = "block";
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </main>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="https://www.fumbomall.com/contact" class="nav-link px-2 text-muted">Contact Us</a></li>
      <li class="nav-item"><a href="www.fumbomall.com" class="nav-link px-2 text-muted">Shop</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; <?php echo date("Y"); ?> Fumbomall.</p>
  </footer>
</div>


</body>
</html>
