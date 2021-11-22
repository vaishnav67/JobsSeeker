<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    </head>
    <body>
        <div class="login">
            <h1>Login</h1>
              <form method="POST" action="login.php" >
                <input type="text" name="username" placeholder="Username" required="required" autocomplete="username"/>
                  <input type="password" name="password" placeholder="Password" required="required" autocomplete="current-password" />
                  <button type="submit" class="btn btn-primary btn-block btn-large">Log in</button>
              </form>
        </div>
    </body>
</html>
