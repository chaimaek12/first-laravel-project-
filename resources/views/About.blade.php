<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <div>
         <div class="leftside"> 
            <a href="{{ route('about') }}"> About </a>
            <a href="{{ route('home') }}"> home</a>
            <a href="">contact</a>
         </div>
         <div class="rightside"><h1>Aboutttttttttttttttttttttt</h1></div>
         <div></div>
          <p>my name is {{ $name }} </p>
     </div>
</body>
</html>
