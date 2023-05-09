<htmL>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Iasi HQ Booking System </title>
        <link rel="stylesheet" href="./styles/login.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
                <?php
                include("php/connection.php")
                if(isset($_POST['submit'])){
                    $username=mysqli_real_escape_string($_POST['username']);
                    $password=mysqli_real_escape_string($_POST['password']);

                    $result=mysqli_query($con,"SELECT * FROM administrators WHERE username="$username" AND password="$password"")
                }
                ?>
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field input">
                        <input type="submit" name="btn" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have account? <a href="register.html">Sign Up Now!</a>
                    </div>
                </form>
            </div>

        </div>
    </body>
</htmL>