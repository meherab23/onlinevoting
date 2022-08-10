<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>

            <div id="loginSection">
                  
                <form action="../main/login.php" method="POST">
                <span class="log_span">Login As  </span>
                <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                </select><br><br> 
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                                   
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    <span class="r_txt">New user?</span> <a class="r_btn" href="register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>