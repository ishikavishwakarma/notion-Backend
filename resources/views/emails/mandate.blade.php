<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandate Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        /* .email-header {
            background-color: #0046be;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        } */
        .email-body {
            margin-top: 20px;
        }
        .email-body p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        p{
            font:size:16px;
        }
      
        /* .email-footer a {
            color: #0046be;
            text-decoration: none;
        } */

        .footer {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
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
    <div class="email-container">
        <div class="email-body">
            <p>Dear {{ $name }},</p>
            <p>We hope this email finds you well. Please find the attached Mandate Form PDF for your reference.</p>
            <p>Thank you for choosing Notion Insurance Broker Pvt. Ltd. We look forward to serving your insurance needs.</p>
        </div>

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
