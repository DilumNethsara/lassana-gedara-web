<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .email-details {
            margin-top: 20px;
            padding: 15px;
            background: #fafafa;
            border-radius: 5px;
        }
        p {
            font-size: 16px;
            color: #555;
            margin: 8px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <h2>New Contact Inquiry</h2>
        <p>Hello,</p>
        <p>You have received a new inquiry from a potential client. Here are the details:</p>

        <div class="email-details">
            <p><strong>Name:</strong> {{ $contactDetails->username }}</p>
            <p><strong>Phone:</strong> {{ $contactDetails->phone }}</p>
            <p><strong>Email:</strong> {{ $contactDetails->email }}</p>
            <p><strong>Company:</strong> {{ $contactDetails->company ?? 'Not Provided' }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contactDetails->message }}</p>
        </div>

        <p>To respond, you can reply directly to this email.</p>

        {{-- <div class="footer">
            <p>Thank you,</p>
            <p><strong>Your Company Name</strong></p>
            <p><a href="https://yourcompanywebsite.com">www.yourcompanywebsite.com</a></p>
        </div> --}}
    </div>

</body>
</html>
