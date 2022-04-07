<!DOCTYPE html>
<html>
 <head>
<title>asd</title>
</head>
<body>
<h1>about</h1>

<form action="/contact" method="post">
    @csrf
    <input type="text" name="name" id="name">
    <input type="submit" value="send">
 

</form>
@if(isset($name))
        Welcome,{{$name}}
    @endif
</body>
</html>