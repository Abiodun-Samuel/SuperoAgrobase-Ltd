<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SuperoAgrobase Limited</title>
</head>

<body>
    <h3> Subject: {{ $ContactData['subject'] }} </h3>

    <p> <b>Name:</b> {{ $ContactData['name'] }}</p>
    <p> <b>Email:</b> {{ $ContactData['email'] }} </p>
    <p> <b> Phone Number:</b> {{ $ContactData['phone'] }} </p>
    <p> <b>Message:</b> {{ $ContactData['message'] }} </p>

    <p>Reply: <b> <a href="mailto:{{ $ContactData['email'] }}"> {{ $ContactData['name'] }} </a> </b>
    </p>

    <p>
        Check out our products <a href="https://products.superoagrobase.com">Click Here</a>
    </p>

</body>

</html>
