<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sing Up</title>
</head>

<body class="register-body">
    <a class="loginTop" href="./index.php"><b>CAR <span style="color: #e4461f;">RENTAL</span></b></a>
    <div class="register-box">
        <h1>Sing Up</h1> <br>
        <form action="./login.php" onsubmit="return validationRegister()">
            <label class="labelRegister">Username (*)</label> <input class="inputi" id="userId" type="text"> <br>
            <span id="userError"></span> <br>
            <label class="labelRegister">E - Mail (*)</label> <input type="text" id="emailId" class="inputi"> <br>
            <span id="emailError"></span> <br>
            <label class="labelRegister">Birthday</label>
            <input class="inputi" id="data" type="date"> <br>
            <!-- <span style="color: red; font-size:medium;" id="birthError"></span> <br> -->
            <label class="labelRegister">Password (*)</label>
            <input class="inputi" id="pass" type="password"> <br>
            <span id="passError"></span> <br>
            <label class="labelRegister">Confirm Password (*)</label>
            <input class="inputi" id="passConfirm" type="password"> <br>
            <span id="confirmPassError"></span> <br>
            <label class="labelRegister">Phone Number (*)</label>
            <input class="inputi" id="numeriTel" type="number"> <br>
            <span id="numError"></span> <br>
            <label class="labelRegister">Have account? <a style="color: rgb(14, 88, 247);" href="./login.php ">Sing In
                    here!</a></label> <br>
            <input type="submit" id="submitButton" class="submit" value="Sing Up" style="color: white;">
        </form>


    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/validimi.js"></script>
</body>

</html>