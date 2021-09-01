<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Help Desk</title>
    <link rel="android-chrome-512x512.png icon" href="/favicon_io/favicon.ico">
    <script src="https://use.fontawesome.com/b97cfec694.js"></script>
    <link rel="stylesheet" href="/CSS/Signup.css">
</head>

<body>
    <div class="back">
        <img src="/OneStop_800x533 1.png" alt="1" class="logo-img" id="lg1">
        <img src="/OneStop_800x533 1.png" alt="2" class="logo-img" id="lg2">
        <img src="/OneStop_800x533 1.png" alt="3" class="logo-img" id="lg3">
        <img src="/OneStop_800x533 1.png" alt="4" class="logo-img" id="lg4">
    </div>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>
    </div>
    <div class="form-box">
        <form action="Data.php" method="post">
            <input type="text" name="studname" id="stud" class="field" placeholder="Student name">
            <input type="text" name="username" id="user" class="field" placeholder="Username">
            <input type="email" name="email" id="studmail" class="field" placeholder="Email">
            <input type="password" name="password" id="pass" class="field" placeholder="Password"><i class="fa fa-eye" id="eye" onclick="show('pass')"></i>
            <button class="log-btn">Sign In</button>
        </form>
        <span class="state">Don't have an account? <a href="Signup.html">Sign up</a></span>
    </div>
    <script>
        function show(id) {
            var x = document.getElementById(id)
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>