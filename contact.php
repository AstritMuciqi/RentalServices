<?php include("includes/header.php"); ?>
<body class="bodyContact">

    <div class="formBox">
        <h1>Contact Us</h1>
        <form action="./index.html" onsubmit="return validationContact()">
            <label>Email or Username</label> <br> <input class="inputi" type="text" id="user"> <br> <span
                id="userError"></span> <br>
            <label>Message</label> <br>
            <textarea id="message" rows="5" cols="60" name="description">
            </textarea><br> <span id="messageError"></span> <br>
            <input style="background-color: blue; color: white;" type="submit" id="submitButton" class="inputi"
                value="Send" style="color: white;">
        </form>
    </div>

<?php include("includes/footer.php"); ?>