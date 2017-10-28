<!doctype html>
<html>
	<head>
		<title>Registration</title>
	</head>
	
	<body>
		 <div class="container"> 
			<div class="" style="width:50%;height:600px;background-color:#27D9C6;margin-left:300px;padding-left:60px;">
				<h1 align="center";>Registration Form</h1>
				<!--form creation-->
				<form action="query.php" method="post" id="usrform">
					  Username:
					  <input type="text" name="username" value="">
					  <br><br>
					  Password:
					  <input type="text" name="password" value="">
					  <br><br>
					  Name:
					  <input type="text" name="name" value="">
					  <br><br>
					  Address:
					  <input type="text" name="address" value="">
					  <br><br>
					  Country:
						<select name="country">
						  <option value="srilanka">Sri Lanka</option>
						  <option value="india">India</option>
						  <option value="england">England</option>
						  <option value="australia">Australia</option>
						</select>
						<br><br>
						ZIP Code:
						<input type="text" name="zipcode" value="">
						<br><br>
						Email:
						<input type="text" name="email" value="">
						<br><br>
						Sex:
						<input type="radio" name="sex" value="male"> Male
						<input type="radio" name="sex" value="female"> Female
						<br></br>
						Language:
						<input type="radio" name="lang" value="english"> English
						<input type="radio" name="lang" value="nonenglish"> Non-English
						<br></br>
						About:
						<textarea rows="4" cols="50" name="about" form="usrform"></textarea>

						<br><br>
						<input type="submit" value="Submit">
				</form> 
			</div>
		</div>
	</body>
</html>