<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
            color: black;
            margin: 0;
            padding: 0;
        }

        .container {
            border: 20px solid tan;
            width: 750px;
            height: 563px;
            display: table;
            vertical-align: middle;
            margin: auto;
        }

        .logo {
            color: tan;
            font-size: 32px;
            margin: 20px;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            font-size: 32px;
            font-style: italic;
            margin-bottom: 20px;
        }

        .heading {
            font-size: 20px;
            font-weight: bold;
        }

        .text {
            font-size: 24px;
            font-weight: bold;
        }

        .date {
            font-size: 20px;
        }

        .reason {
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        An Organization
    </div>

    <div class="marquee">
        Certificate of Completion of Driving Course
    </div>

    <div class="assignment">
        This certificate is presented to
    </div>

    <div class="person">
        {{ $formData['firstname'] }}
        <br>
        <span class="heading">Licence no. : {{ $formData['license_number'] }}</span><br>
        <span class="text">on</span><br>
        <span class="date">{{ $formData['complete_time'] }}</span>
    </div>

    <div class="reason">
        For deftly defying the laws of gravity<br>and flying high
    </div>
</div>

</body>
</html>
