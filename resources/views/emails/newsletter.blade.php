<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SuperoAgrobase Limited</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

</head>

<body>

    <div class="container">
        <div class="row">

            <p> {{ $newsLetterSubs['name'] }} has subscribed for our newsletter</p>
            <p> <b>Email:</b> {{ $newsLetterSubs['email'] }} </p>

            <p class="py-5 my-5">Reply: <a class="btn btn-secondary" href="mailto:{{ $newsLetterSubs['email'] }}">
                    {{ $newsLetterSubs['name'] }} </a>
            </p>

        </div>
    </div>


</body>

</html>
