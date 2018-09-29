<?php
include 'db.php';
if(isset($_POST['bt-insert']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobby = implode(",",$_POST['hobby']); //In this case the hobby is an array

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Update Delete Data</title>
</head>
<body>
<center>
<h2>Insert</h2>
<from method="post">
<table>
<tr>
<td>Name</td><td><input type="text" name = "name" required /></td>
</tr>


<tr>
<td>Email</td><td><input type="email" name = "email" required /></td>
</tr>


<tr>
<td>Gender</td><td><input type="radio" name = "gender" value="male" />Male
<input type="radio" name = "gender" value="female" />Female

</td>
</tr>

<tr>
<td>Address</td><td><textarea name = "address" ></textarea></td>
</tr>

<tr>
<td>Hobby</td>
<td>
<input type = "checkbox" name = "hobby[]" value = "music" />Music
<input type = "checkbox" name = "hobby[]" value = "movies" />Movies
<input type = "checkbox" name = "hobby[]" value = "games" />Games
<input type = "checkbox" name = "hobby[]" value = "Travel" />Travel
</td>
</tr>
<tr>
<td>Country</td>
<td>
<select name = country>
<option value="India">India</option>
<option value="Australia">Australia</option>
<option value="USA">USA</option>
<option value="Japan">Japan</option>
</select>
</td>
</tr>

</table>
<input type = "submit" name="bt-insert" value  ="Insert"/>
</form>

    </center>
</body>
</html>