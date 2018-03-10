<html>
	<head>
		<title>Make an Order</title>
		<!-- CSS Style -->
			<style>
			/* Style the header */
				h1 {
					font-family:Arial;
					}
				h2 {
					font-family:Arial;
					}

				h3 {
					font-family:Arial;
					}
			</style>
			<script type="text/javascript">
			// Function to clear the form
				function doClear()
				{
					document.OrderForm.customer.value = "";
					document.OrderForm.address.value = "";
					document.OrderForm.city.value = "";
					document.OrderForm.state.value = "PA";
					document.OrderForm.zip.value = "";
					document.OrderForm.phone.value = "";
					document.OrderForm.email.value = "";

					document.OrderForm.appetizer[0].checked = false;
					document.OrderForm.appetizer[1].checked = false;
					document.OrderForm.appetizer[2].checked = false;
					document.OrderForm.appetizer[3].checked = false;

					document.OrderForm.rolls[0].checked = false;
					document.OrderForm.rolls[1].checked = false;
					document.OrderForm.rolls[2].checked = false;
					document.OrderForm.rolls[3].checked = false;
					document.OrderForm.rolls[4].checked = false;
					document.OrderForm.rolls[5].checked = false;
					document.OrderForm.rolls[6].checked = false;
					document.OrderForm.rolls[7].checked = false;

					return;
				}

			// Function to submit the form
				function doSubmit()
				{
					if (validateText() && validateRadio() && validateCheck())
					{
						if (validateZip() == true){

						if(validatePhone()  == true){

						if(validateEmail() == true){

						/*
                                                 
                                                 var confirmation = "";

						confirmation += "Your order has been submitted.<br /><br />";
						confirmation += "Name: " + correctFormat(document.OrderForm.customer.value) + "<br />";
						confirmation += "Address: " + document.OrderForm.address.value + "<br />";
						confirmation += "City: " + correctFormat(document.OrderForm.city.value) + "<br />";
						confirmation += "State: " + document.OrderForm.state.value + "<br />";
						confirmation += "Zip: " + document.OrderForm.zip.value + "<br />";
						confirmation += "Phone: " + document.OrderForm.phone.value + "<br />";
						confirmation += "Email: " + document.OrderForm.email.value + "<br />";

					// call function printRadio () to print the Appetizers
						var appetizer = printRadio();

						confirmation += appetizer;

					// call function printRadio () to print the sushi rolls
						var rolls = printCheck();

						confirmation += rolls;

						document.write(confirmation);
                         */


						} //closing if that validate email
						else{
							var message = "Email must contain a single @ except in the first and last position.";
							alert(message);
							}
						} //closing if that validate phone

						else{
							var message = "Phone number must be in one of the following formats:\n";
							message += "ddd-ddd-dddd\n";
							message += "dddddddddd\n";
							message += "(ddd)ddddddd\n";
							message += "(ddd)ddd-dddd";
							alert(message);
							}
						} //closing if that validate zip
						else{
							var message = "Zip code is not in corrected format! It has to be 5 digits numbers";
							alert(message);
							}
                                        return false;
					} //closing if that validate text, radio, and checkboxes
					return;
				} //closing submit function


			//
			function correctFormat(str)
			{
				var ans ="";
				var substrs = str.split (" ");
				for (var i=0; i<substrs.length; i++){
					var wd = substrs[i];
					var firstLetter = wd.charAt(0).toUpperCase();
					var restWord = wd.substring(1).toLowerCase();
					var newWord = firstLetter + restWord;
					ans += newWord + " ";
				 }
				 return ans.substring(0 , ans.length -1);
			}


			// Function to validate input text
				function validateText()
				{
					var transcribed = true;

					var notification = "";

					// validate customer text
					var customer = document.OrderForm.customer.value;
					if (customer.length == 0)
					{
						transcribed = false;
						notification += "Please enter your name.\n";
					}

					// validate address text
					var address = document.OrderForm.address.value;
					if (address.length == 0)
					{
						transcribed = false;
						notification += "Please enter your address.\n";
					}

					// validate city text
					var city = document.OrderForm.city.value;
					if (city.length == 0)
					{
						transcribed = false;
						notification += "Please enter your city.\n";
					}

					// validate state text
					var state = document.OrderForm.state.value;
					if (state.length == 0)
					{
						transcribed = false;
						notification += "Please enter your state.\n";
					}

					// validate zip text
					var zip = document.OrderForm.zip.value;
					if (zip.length == 0)
					{
						transcribed = false;
						notification += "Please enter your zip.\n";
					}

					// validate phone text
					var phone = document.OrderForm.phone.value;
					if (phone.length == 0)
					{
						transcribed = false;
						notification += "Please enter your phone.\n";
					}

					// validate email text
					var email = document.OrderForm.email.value;
					if (email.length == 0)
					{
						transcribed = false;
						notification += "Please enter your email.\n";
					}


					if (!transcribed)
					{
						alert(notification);
					}

					return transcribed;
				}


			// Function to validate Radio buttons
				function validateRadio()
				{
					var highlighted = false;

					if (document.OrderForm.appetizer[0].checked)
					{
						highlighted = true;
					}

					if (document.OrderForm.appetizer[1].checked)
					{
						highlighted = true;
					}

					if (document.OrderForm.appetizer[2].checked)
					{
						highlighted = true;
					}

					if (document.OrderForm.appetizer[3].checked)
					{
						highlighted = true;
					}


					if (!highlighted)
					{
						alert("The appetizer is missing!! Please select an appetizer.");
					}

					return highlighted;
				}


			// Function to validate Checkboxes
				function validateCheck()
				{
					var selected = false;

					if (document.OrderForm.rolls[0].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[1].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[2].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[3].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[4].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[5].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[6].checked)
					{
						selected = true;
					}

					if (document.OrderForm.rolls[7].checked)
					{
						selected = true;
					}

					if (!selected)
					{
						alert("Sushi Rolls is missing!! Please choose at least one sushi roll.");
					}

					return selected;
				}


			// Function to validate email format

				function validateEmail()
				{
					var email = document.OrderForm.email.value;
					var pass = true;

				//validate email
				var count =0 ;
					for (var i = 0;i < email.length; i++){
						var c = email.charAt(i);
						if(i == 0){
							if(c == '@'){
								return false;
							}
						}
						else if(i == (email.length)-1){
							if(c == '@'){
								return false;
							}
						}
						else
						{
							if (c=='@'){
							count++;
							}
						}
					}
						if (count ==1) return true;
						return false;

				}


			//Function to validate zip code in the 5-digit format

				function validateZip(zip)
				{
					var zip = document.OrderForm.zip.value;
					if(zip.length != 5)
					return false;

					var pass = true;
					for (var i = 0;i < zip.length; i++){
						var c = zip.charAt(i);
						if (!isDigit(c)){
							pass = false;
						}
					}
					return pass;
				}


			// Function validatePhone to make sure from all validation phone functions

				function validatePhone()
				{
					var phone = document.OrderForm.phone.value;
					if(isTenDigits(phone) || isTwelveAndBrackets(phone) || isTwelveAndDashes(phone) || isBracketsAndDash(phone))
					return true;

				return false;

				}


			// Function to validate phone in the 10-digit format

				function isTenDigits(phone)
				{
					if(phone.length != 10)
					return false;

					var pass = true;
					for (var i = 0;i < phone.length; i++){
						var c = phone.charAt(i);
						if (!isDigit(c)){
							pass = false;
						}
				}
					return pass;
				}


			// Function to validate phone in (xxx)xxxxxxx format

				function isTwelveAndBrackets(phone)
				{
					if(phone.length != 12)
						return false;

					var pass = true;

					for (var i = 0;i < phone.length; i++){
						var c = phone.charAt(i);
						var pos = i + 1;
						if(i == 0){
							if(c != '('){
								pass = false;
							}
						}
						else if(i == 4){
							if(c != ')'){
								pass = false;
							}
						}
						else {
							if (!isDigit(c)){
								pass = false;
							}
						}
					}
					return pass;
				}


			// Function to validate phone in xxx-xxx-xxxx format

				function isTwelveAndDashes(phone)
				{
					if(phone.length != 12)
						return false;

					var pass = true;

					for (var i = 0;i < phone.length; i++){
						var c = phone.charAt(i);
						var pos = i + 1;
						if(i == 3){
							if(c != '-'){
								pass = false;
							}
						}
						else if(i == 7){
							if(c != '-'){
								pass = false;
							}
						}
						else {
							if (!isDigit(c)){
								pass = false;
							}
						}
					}
					return pass;
				}


			// Function to validate phone in (xxx)xxx-xxxx format
			 	function isBracketsAndDash(phone)
				{
        			if (phone.length != 13)
            			return false;

        			var pass = true;

					for (var i = 0;i < phone.length; i++){
						var c = phone.charAt(i);
						var pos = i + 1;
							if(i == 0){
								if(c != '('){
									pass = false;
								}
							}
							else if(i == 4){
								if(c != ')'){
									pass = false;
								}
							}
							else if(i == 8){
								if(c != '-'){
									pass = false;
								}
							}
							else {
								if (!isDigit(c)){
									pass = false;
								}
							}
					}
					return pass;
  				}

				function isDigit(num) {
					if (num.length>1){return false;}
						var string="1234567890";
						if (string.indexOf(num)!=-1){
						return true;
					}
					return false;
				}


			// Function to print Radio buttons
				function printRadio()
				{
					var appetizer = "Appetizer: ";

					var choice1 = true;

					if (document.OrderForm.appetizer[0].checked)
					{
						appetizer += "Edamame";
						choice1 = false;
					}
					if (document.OrderForm.appetizer[1].checked)
					{
						if(choice1)
						{
							appetizer += "Spring Roll";
							choice1 = false;
						}
						else
						{
							appetizer += ", Spring Roll";
						}
					}

					if (document.OrderForm.appetizer[2].checked)
					{
						if(choice1)
						{
							appetizer += "Dynamite Shrimp";
							choice1 = false;
						}
						else
						{
							appetizer += ", Dynamite Shrimp";
						}
					}

					if (document.OrderForm.appetizer[3].checked)
					{
						if(choice1)
						{
							appetizer += "Vegtable Tampura";
							choice1 = false;
						}
						else
						{
							appetizer += ", Vegtable Tampura";
						}
					}

					return appetizer + "<br />";
				}


			// Function to print Checkboxes
				function printCheck()
				{
					var rolls = "Sushi Roll(s): ";

					var choice1 = true;

					if (document.OrderForm.rolls[0].checked)
					{
						rolls += "California Roll";
						choice1 = false;
					}
					if (document.OrderForm.rolls[1].checked)
					{
						if(choice1)
						{
							rolls += "Avocado Roll";
							choice1 = false;
						}
						else
						{
							rolls += ", Avocado Roll";
						}
					}


					if (document.OrderForm.rolls[2].checked)
					{
						if(choice1)
						{
							rolls += "Shrimp Tampura";
							choice1 = false;
						}
						else
						{
							rolls += ", Shrimp Tampura";
						}
					}


					if (document.OrderForm.rolls[3].checked)
					{
						if(choice1)
						{
							rolls += "Salmon Roll";
							choice1 = false;
						}
						else
						{
							rolls += ", Salmon Roll";
						}
					}


					if (document.OrderForm.rolls[4].checked)
					{
						if(choice1)
						{
							rolls += "Tuna Roll";
							choice1 = false;
						}
						else
						{
							rolls += ", Tuna Roll";
						}
					}


					if (document.OrderForm.rolls[5].checked)
					{
						if(choice1)
						{
							rolls += "Volcano Roll";
							choice1 = false;
						}
						else
						{
							rolls += ", Volcano Roll";
						}
					}


					if (document.OrderForm.rolls[6].checked)
					{
						if(choice1)
						{
							rolls += "Dragon Roll";
							choice1 = false;
						}
						else
						{
							rolls += ", Dragon Roll";
						}
					}


					if (document.OrderForm.rolls[7].checked)
					{
						if(choice1)
						{
							rolls += "Fire Roll";
							choice1 = false;
						}
						else
						{
							rolls += ", Fire Roll";
						}
					}

					return rolls;
				}
			</script>
	</head>
	<body>
		<form name="OrderForm" id='order' action='submitorder.php' method='post' accept-charset='UTF-8'>
			<h1>Order from Maki Sushi Resturant</h1>
			<p>
				<h4>Step 1: Enter your name, address, phone number, and email:</h4>
				<font face="Courier New">
					Name: &nbsp;&nbsp;&nbsp;<input name="customer" size="50" type="text" /><br />
					Address: <input name="address" size="50" type="text" /><br />
					City: &nbsp;&nbsp;&nbsp;<input name="city" size="15" type="text" />
					State: <select name="state">
  								<option value="PA">PA</option>
  								<option value="NY">NY</option>
  								<option value="NJ">NJ</option>
  								<option value="DE">DE</option>
  							</select>

					Zip: <input name="zip" size="5" type="text" /><br />
					Phone: &nbsp;&nbsp;<input name="phone" size="50" type="text" /><br />
					Email: &nbsp;&nbsp;<input name="email" size="50" type="text" /><br />
				</font>
			</p>
			<p>
				<h4>Step 2: Select the appetizer you want:</h4>
				<font face="Courier New">
					<input name="appetizer" type="checkbox" />Edamame
					<input name="appetizer" type="checkbox" />Spring Roll
					<input name="appetizer" type="checkbox" />Dynamite Shrimp
					<input name="appetizer" type="checkbox" />Vegtable Tampura
				</font>
			</p>
			<p>
				<h4>Step 3: Select the Sushi Rolls you want:</h4>
				<font face="Courier New">
					<input name="rolls" type="checkbox" />California Roll
					<input name="rolls" type="checkbox" />Avocado Roll
					<input name="rolls" type="checkbox" />Shrimp Tampura<br />
					<input name="rolls" type="checkbox" />Salmon Roll
					<input name="rolls" type="checkbox" />Tuna Roll
					<input name="rolls" type="checkbox" />Volcano Roll <br />
					<input name="rolls" type="checkbox" />Dragon Roll
					<input name="rolls" type="checkbox" />Fire Roll
				</font>
			</p>
			<input type="submit" value="Submit Order" onClick="doSubmit()" />
			<input type="button" value="Clear Entries" onClick="doClear()" />
		</form>
	</body>
</html>