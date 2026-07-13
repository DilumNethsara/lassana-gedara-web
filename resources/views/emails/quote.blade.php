<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Quotation Request</title>

    <!-- Email-friendly styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #007bff;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 8px 0;
            font-size: 16px;
        }
        .content strong {
            color: #007bff;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .quote-details {
            margin-top: 20px;
            border-top: 2px solid #007bff;
            padding-top: 20px;
        }
        .quote-details p {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .quote-details strong {
            color: #333;
        }
        .list-item {
            line-height: 25px;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>New Quotation Request for {{$quoteDetails['Service']}}</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Dear Team,</p>
            <p>You have received a new quotation request from {{$quoteDetails['Title']}}{{$quoteDetails['Name']}}. Below are the details of the request:</p>

            <!-- Quote Details -->
            <div class="quote-details">
                @foreach($quoteDetails as $key => $value)
                <p><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> 
                    @if($key == 'Drawing_Requirements' && is_string($value)) 
                        @php
                            // Decode the JSON string to an array
                            $value = json_decode($value, true);
                        @endphp
                        <ul>
                            @foreach($value as $item)
                                <li class="list-item">{{ $item }}</li>
                            @endforeach
                        </ul>
                    @else
                        {{ $value }}
                    @endif
                </p>
            @endforeach
            </div>

            <p>If you need any further information, feel free to reach out to the client.</p>
        </div>

        
    </div>

</body>
</html>
