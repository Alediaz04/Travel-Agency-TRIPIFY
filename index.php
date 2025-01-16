<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/twitter.svg">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Loggin/TRIPIFY</title>
</head>
<body>
    <main>
        <section id="principal" class="card">
            <div class="content">

                <div class="head">
                    <i class="bi bi-twitter icon"></i>
                    <h1 class="title">TRIPIFY</h1>
                    <h3 class="sub-title">Explore your dream destinations</h3>
                    <p class="text">Welcome to Tripify! Please enter your login credentials to access <br> your account and explore our wide range of travel options.</p>
                    <p class="linea"></p>
                
                </div>
                
                
                <form method="post" action="">
                <?php
                include("conexion.php");
                include("controlador.php")
                ?>
              
                    <br>
                    <label for="" class="label email">Email</label>
                    <br>
                    <input id="usuario" type="text" class="input" name="usuario">
                             <br>
                    <label for="" class="label password">Password</label>
                    <br>
                    <input id="input" type="password" class="input" name="password">
                             <br>
                    <button name="btnIngresar" type="submit" class="login">LOG IN</button>
                        
                </form>
    
                <div class="footer">
                    <p class="register">Don´t have an account?  <a href="#" class="noRegister"> Register</a></p>
                </div>
            </div>
          


        </section>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>