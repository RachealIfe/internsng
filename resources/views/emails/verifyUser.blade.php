<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>{{$user->name}}, Welcome to Interns.ng </h2>
<br/>
Your registration was succesful. Please click the link below to verify your account.
<br/><br/>
<a href="https://interndev.shootfish.xyz/internsng/public//user/verify/{{$user->verifyUser->token}}">Verify Email</a>
</body>

</html>
