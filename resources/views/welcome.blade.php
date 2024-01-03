<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('status'))
<a href="#" class="bottom-text-w3ls">{{session('status')}}</a>
@endif
</body>
</html>    