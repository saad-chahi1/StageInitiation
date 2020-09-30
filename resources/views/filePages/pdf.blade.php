<!DOCTYPE html>
<html>
<head>
	<title>pdf</title>
</head>
<body>
    <h2>{{$detail->titre}}</h2>
    <p>
    	<iframe src="{{url('storage/'.$detail->fichier)}}" style="width: 100% ; height: 600px;"></iframe>
    </p>
</body>
</html>