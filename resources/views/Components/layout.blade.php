{{-- This is a prop, a prop can be used to declare dynamic HTML content such as a title being different on each page. This prop makes it so each time {{ $title }} is found it asks for a title value which is passed in each page. --}}

{{-- This is a reusable file. Same as the card this can be used many times and saves copy pasting redundant code. --}} 

@props ([
    'title' => 'Painted'


])


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
        <style>
    nav {
        text-align: center;
        background-color: #f2f2f2;
        padding: 20px;
    }

    a {
        margin:0 100px;
        font-size: 20px;
        text-decoration: none;
        colour: #333;
    }

    .card {
        border: 1px solid #ccc;
        padding: 20px;
        margin: 20px;
        border-radius: 5px;
        background-color: #f3f3f3;
    }
    </style>
</head>
<body>



    <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contacts">Contacts</a>
    </nav>
    {{ $slot}}

</body>
</html>