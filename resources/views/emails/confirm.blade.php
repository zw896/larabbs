<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Activate your account: </title>
</head>
<body>
  <h1>Thanks for signing up!</h1>

  <p>
    Please click the link below to activate your account:
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    (If this is not your own operation, please ignore this message.)
  </p>
</body>
</html>
