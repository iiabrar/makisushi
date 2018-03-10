<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <title>Login</title>
       <script type="text/javascript">
            function validateText(){
                var IDvalue = document.getElementById("ID").value;
                var PWvalue = document.getElementById("password").value;
                if (IDvalue === "")
                {
                    alert("Please enter your ID!");
                    return false;
                }
                
                if (PWvalue === "")
                {
                    alert("Please enter your password!");
                    return false;
                }
             
            }
        </script>
        
</head>
<body>
<!-- Login form -->
<div>
<form id='login' action='logincheck.php' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>Login</legend>

<div>* required fields</div>
<div>
    <label for='ID' >ID*:</label><br/>
    <input type='text' name='ID' id='ID' maxlength="50" placeholder="ID" required/><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" placeholder="Password" required/><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div>
    <input type='submit' name='Submit' value='Submit' onclick="return validateText()"/>
</div>
</fieldset>
</form>
</div>
</body>
</html>
