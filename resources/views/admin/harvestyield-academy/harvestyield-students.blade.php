<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        th {
            text-align: left;
            background-color: #212121;
            color: white;
            font-size: bold;
        }

        td,
        th {
            border: 1px solid #ddd;
            cellspacing: 0;
            padding: 7px;
        }

    </style>
</head>

<body>
    <div class="col-lg-12 text-center">
        <h2>HarvestYield Academy</h2>
        <p>Students' Details</p>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Ad No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Education</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->admission_no }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->user->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->education }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
