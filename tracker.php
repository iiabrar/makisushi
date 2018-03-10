<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <title>Tracker</title>
       <script type="text/javascript">
            function validateText(){
                var IDvalue = document.getElementById("ID").value;
                if (IDvalue === "")
                {
                    alert("Please enter the order ID!");
                    return false;
                }
             
            }
        </script>
        
</head>
<body>
<!-- Tracker form -->
<div>
<form id='tracker' action='trackercheck.php' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>Tracker</legend>

<div>* required fields</div>
<div>
    <label for='ID' >Order ID*:</label><br/>
    <input type='text' name='ID' id='ID' maxlength="50" placeholder="ID" required/><br/>
</div>

<div>
    <input type='submit' name='Submit' value='Submit' onclick="return validateText()"/>
</div>
</fieldset>
</form>
</div>
</body>
</html>