<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Holi Greetings</title>
    <style>

    .myname{
        position:absolute;
        margin-top:400px;
        margin-left:760px;
        animation: card 6s infinite;
        
    }
    .holi{
        text-align:center;
        animation: title 6s infinite;
    }
    @keyframes card{
        0%  { color:blue;}
       25% { color:red;transform:scale(1.5);}
      50% { color:green;transform:scale(0.9);}
      75% { color:purple;transform:scale(1.5);}
      100%{ color:blue;transform:scale(1);}
    }
    @keyframes title{
        0%  { color:purple;}
       25% { color:green;transform:scale(1.6);}
      50% { color:blue;transform:scale(0.9);}
      75% { color:red;transform:scale(1.6);}
      100%{ color:purple;transform:scale(1);}
    }
    </style>
</head>
<body background="bg2.jpg" style="background-size:1365px 640px;">
<h2 class="holi">Wishing you all a very happy holi</h2>
    <h1 class="myname">From <?php echo $_GET['name']; ?> ....</h1>
</body>
</html>