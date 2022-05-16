<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/LOGINCSS.css">

    <title>Login Page</title>
    <script type="text/javascript">
        
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
    </script>
</head>


<body>
<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form action="validate.php" method="post">
            <h1>Sign in</h1>
            <br>
            <input type="email" placeholder="Username" />
            <input type="password" placeholder="Password" />
            <br>
            <button>Sign In</button> <input type="button" class="b1" onclick="history.back();" value="Back"> 

        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1> Welcome Back.</h1>
                <p><img src="Images/vendaidbgblack.png" class="vend-aid-logo"></p>
                <h2> Vend Aid Admin Portal </h2>
            </div>
        </div>
    </div>
</div>
</body>
</html>