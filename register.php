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
                include("php/config.php");
                include("php/register.php");
                ?>
                <header>Register</header>
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
                    <div class="links">
                        Already a member? <a href="login.php">Login In Now!</a>
                    </div>
                </form>
                 
            </div>
            
        </div>
    </body>
</html>
