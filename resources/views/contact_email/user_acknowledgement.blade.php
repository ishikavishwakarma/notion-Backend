
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You For Contacting NIB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .cta-button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #218838;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <p><strong>Dear {{ $name }},</strong></p>

            <p>We appreciate you getting in touch with us. Your inquiry has been received, and we will contact you as soon as possible. We value your interest in Notion Insurance Broker PVT LTD and look forward to assisting you. Feel free to contact us directly at <a href="tel:+07554911343">+0755-4911343</a> or <a href="tel:+919302182475">+91-9302182475</a> for any immediate requirements.</p>
        
        <a href="https://www.notioninsurance.com/" style="color: white" class="cta-button">Visit Our Website</a>

        <p>Best regards,<br>Your NIB Team</p>
        
        <img src="{{ $message->embed(public_path('images/contact-mail-NIB-logo.png')) }}" alt="NIB Logo" width="150px">
        
        <p><strong>NOTION INSURANCE BROKER PVT. LTD.</strong><br>
        <strong>Call:</strong> +0755-4911343 , +919302182475 <br>
        <strong>Address:</strong> Plot No. 1, 3rd Floor, Lalwani Complex, Vidya Nagar, Bhopal - 462026.<br>
        <strong>Email for Info:</strong> <a href="mailto:contact@notioninsurance.com">contact@notioninsurance.com</a><br>
        </p>

        <p class="footer">
            Follow us on:
            <a href="https://www.linkedin.com/in/notion-insurance-broker-628b45170/" target="_blank">LinkedIn</a>
        </p>
    </div>
</body>
</html>
