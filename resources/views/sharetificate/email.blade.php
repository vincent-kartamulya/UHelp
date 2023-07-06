<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
<p>Hi, {{$name}}</p>
<p>Thank you for partipating {{$eventName}} on {{date('l, d F Y', strtotime($eventDate))}}.</p>
<p>Please find your e-certificate in the attachment!</p>
<p>Best regards,</p>
<p>{{$eventName}}'s Admin</p>
</body>
</html>
