<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holi Cards</title>
    <style>
input[type=text]{
  width: 30%;
  padding: 12px 20px;
  
  margin-left:210px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #ddd;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-top:10px;
  margin-left:210px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>

</head>
<body background="bg1.jpg" style="background-size:1365px 640px;">

<h2 style="margin-top:240px;margin-left:310px;"><u>Holi Greeting Card</u></h2>

<form action="holi_card.php" method="get">
<div style="margin-top:45px;margin-left:220px;">
    <label for="name"><b>Your Name:</b></label>
    </div><br>
    <input type="text" id="name" name="name" placeholder="Enter your name.." required/>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>