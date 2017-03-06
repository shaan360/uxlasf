
<html>
<head>
	<title>user form</title>
</head>
<body>
<form action="" method="post" name="frm1">
Enter User ID : <input type="text" size="30" maxlength="50" name="txtid"><br>
Enter Password: <input type="password" name="txtpass" size="30" maxlength="30"><br>
Select Gender : <input type="radio" name="rdgender" value="Male" checked="checked">Male<input type="radio" name="rdgender" value="Female">Female<br>
Select Course : <select name="drpcourse"><option value="C++">C++</option><option value="C#" selected="selected">C#</option></select><br>
Select Facilities: <select name="facilities" size="3" multiple="multiple"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select><br>
Address: <textarea cols="30" rows="5" name="txtaddress"></textarea>
<br>
Select Picture <input type="file" name="pic"><br>
<input type="checkbox" value="Agree">I Agree<br>
<input type="submit" value="Save Record" name="btnsave"><input type="reset" name="clr" value="Clear Form">
</form>

</body>
</html>
