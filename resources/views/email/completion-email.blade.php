<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                margin-top:40px;
                color: tan;
                text-align:center;
                font-family: Georgia, serif;
               font-size: 24px;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
                font-family: Georgia, serif;
                text-align: center;
            }
            .assignment {
                margin: 20px;
                color: black;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
                padding-bottom: 10px;
                color: black;
                font-family: Georgia, serif;
                text-align: center;
                            }
            .heading{
                font-size: 20px;
                text-align:center;
                color: black;
                font-family: Georgia, serif;
                text-align: center;
            }

            .text{
                font-size: 28px;
                text-align:center;
                font-weight:500;
                color: black;
                font-family: Georgia, serif;
                text-align: center;
                
            }

            .date{
                font-size: 20px;
                text-align:center;
                color: black;
                font-family: Georgia, serif;
                text-align: center;
            }
            .reason {
                margin: 20px;
                color: black;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
            <!-- <img src="{{ asset('asset/images/logo.png') }}" /> -->
                An Organization
            </div>

            <div class="marquee">
                Certificate of Completion of Driving Course
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                {{  $formData['firstname'] }} {{  $formData['lastname'] }}
                <br>
            <span class="heading">Licence no. : {{ $formData['license_number'] }} </span><br>
            <span class="text">on</span><br>
            <span class="date">{{ $formData['complete_time'] }}</span>
            </div>

            <div class="reason">
                For deftly defying the laws of gravity<br/>
                and flying high
            </div>
        </div>
    </body>
</html>