<!DOCTYPE html>
<html>
 <head>
<title>asd</title>
</head>
<body>
<h1>about</h1>

@foreach($tasks as $index=>$task)
<ul>
    <li><a href="/task/{{$index}}">{{$task}}</li>
</ul>
@endforeach
</body>
</html>