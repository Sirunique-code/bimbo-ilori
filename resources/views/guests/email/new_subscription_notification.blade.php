<!DOCTYPE html>
<html>
<head>
    <title>New Newsletter Subscriber</title>
</head>
<body>
    <h1>New Subscriber Alert!</h1>
    <p>A new user has subscribed to the newsletter:</p>
    <p><strong>Email:</strong> {{ $subscriber->email }}</p>
    <p><strong>Subscribed On:</strong> {{ $subscriber->created_at }}</p>
</body>
</html>