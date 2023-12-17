<!--<h1>Your Status</h1>
<p>{{ $details['message'] }}</p>--> 

<!DOCTYPE html>
<html>
<head>
    <title>Your Status</title>
</head>
<body>
    <h1>Congratulations!</h1>
    <p>{{ $details['message'] }}</p>
    @if(isset($details['loginLink']))
        <p> Please Login using the following link: <a href="{{ $details['loginLink'] }}">Login</a>
    <br>Thank you..</p>
    @endif
</body>
</html>

