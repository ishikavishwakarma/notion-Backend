<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            max-width: 100%;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin: 10px 0;
        }

     
    </style>
</head>

<body>
    <div class="container">
        <h3><strong>{{ $subject }}</strong> </h3>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Mobile:</strong> {{ $mobile }}</p>
        <p><strong>Details:</strong> {{ $details }}</p>

    </div>

   
</body>

</html>
