<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/register">
    @csrf

    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Email: <input type="email" name="email"><br>
    Phone: <input type="text" name="phone"><br>

    School:
    <input type="checkbox" name="school" value="Coding"> Coding
    <input type="checkbox" name="school" value="Media"> Media
    <br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br>

    English Level:
    <input type="range" name="english_level" min="0" max="100"><br>

    Campus:
    <select name="campus">
        <option value="Casablanca">Casablanca</option>
        <option value="Bruxel">Bruxel</option>
        <option value="Amsterdam">Amsterdam</option>
    </select>
    <br>

    Terms:
    <input type="checkbox" name="terms" value="1"> Accept Terms
    <br>

    <button type="submit">Register</button>
</form>
</body>
</html>