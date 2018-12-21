 

 

<!DOCTYPE html> 
<html> 
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>         
        <script src="nav.js"></script>         
        <title>Login</title>         
    </head>     
    <body> 
        <div class="login"> 
            <h1>Login </h1> 
            <img src="avatar.png" class="avatar"> 
            <form method="post" action="cek_login.php"> 
                <p>Username</p> 
                <input type="text" name="username" placeholder="Enter Username"> 
                <p>Password</p> 
                <input type="password" name="password" placeholder="Enter Password"> 
                <input type="submit" name="submit" value="Login"> 
            </form>             
        </div>         
    </body>     
</html> 
<style type="text/css">body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-color: #2ed573;
}

.login {
    background-color: #ffffff;
    border-radius: 10px;
    width: 320px;
    height: 420px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    color: white;
    box-shadow: 0 10px 6px -6px #777;
}

.avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1 {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 25px;
    color: #333333;
}

.login p {
    margin: 8px;
    padding: 0;
    font-weight: bold;
    color: #333333;
}

.login  input {
    width: 100%;
    margin-bottom: 15px;
    border-radius: 10px;
}

.login  input[type="text"],
input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: #e6e6e6;
    outline: none;
    height: 40px;
    color: #333333;
    font-size: 16px;
}

.login  input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: #4CAF50;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.login  input[type="submit"]:hover {
    cursor: pointer;
    background: #27ae60;
    color: #fff;
}

.login  a {
    text-decoration: none;
    font-size: 14px;
    color: #333333;
    text-align: center;
}

.login  a:hover {
    color: #4CAF50;
}

::-webkit-input-placeholder {
    text-align: center;
}</style>
