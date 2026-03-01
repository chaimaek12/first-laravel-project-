<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <div class="leftside"> 
            <a href="{{ route('about') }}"> About </a>
            <a href="{{ route('home') }}"> home</a>
            <a href="">contact</a>
         </div>
    <h1>Home page</h1>
    <p>my name is {{ $name }} </p>
    <p>my age  {{ $age }}</p>
    @foreach ( $skills as  $skill  )
    <li>
    
        {{ $skill  }}
    </li>
        
    @endforeach
</body>
</html>