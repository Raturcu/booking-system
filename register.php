<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="./styles/login.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
                <?php
                include("php/connection.php")
                if(isset($_POST['submit'])){
                    $username=$_POST['username'];
                    $email=$_POST['email'];
                    $password_1=$_POST['password_1'];
                    $password_2=$_POST['password_2'];
                }
                ?>
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password_1" id="password" required>
                    </div>
                    <div class="field input">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password_2" id="password" required>
                    </div>
                    <div class="field input">
                        <input type="submit" name="btn" value="Register" required>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>