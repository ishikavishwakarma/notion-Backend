{{-- <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Mandate Letter</title>

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h2 {
				font-weight: 250;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-size: 13px;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}
			
			p {
				color: #000;
				text-align:left;
				font-size: 15px;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
				font-size: 15px;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
		<style> 
			input[type=text] {
			  border: none;
			  width: 50%;
			  border-bottom: 2px solid black;
			  font-size: 12px;
			}
		</style>
        <style> 
			input[type=date] {
			  border: none;
			  width: 50%;
			  border-bottom: 2px solid black;
			  font-size: 12px;
			}
		</style>
		<style> 
			input[type=email] {
			  border: none;
			  width: 50%;
			  border-bottom: 2px solid black;
			  font-size: 12px;
			}
		</style>
        <style> 
			input[type=submit] {
			  background-color: blue;
			  font-size: 15px;
			  border: none;
			  color: white;
			  text-decoration: none;
			  cursor: pointer;
			}
		</style>
	</head>

	<body>
	<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">

	
				
                                 
                                  
									 
									
									<img src="{{ public_path('images\contact-mail-NIB-logo.png') }}" alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>
								<td>
									<br>
									<b>Broker Code : IRDA/ DB 693/17</b>
									<br>
									<b>GSTIN : 23AAFCN3874P1ZX</b>
									<br>
									<b>CIN : U66010MP2016PTC041677</b>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<b>Address : Plot No. 1, 3rd Floor, Lalwani Complex, Vidya Nagar, Bhopal - 462026</b>
								<br>
									<b>Contact : 0755-4911343, +919302182475</b>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</table>				
					<h2><u>MANDATE LETTER TO ACT AS AN INSURANCE BROKER</u></h2>				
					<h4><u>TO WHOMSOEVER IT MAY CONCERN</u></h4>
					<lable><sub sytle="size:4px;" ><u style="text-decoration-style: double;"><b>Exclusive Mandate</b></u></sub></lable><br>
					<p>
					<lable>I / We hereby appoint M/s Notion Insurance Broker Pvt. Ltd. as my insurance broker in connection with my General/Life Insurance requirements till &nbsp;&nbsp;{{$mandate->date}}.</lable><br>
					<lable>M/s Notion Insurance Broker Pvt. Ltd. is hereby authorized to negotiate directly with any or multiple insurance companies on my/our behalf, regarding my/our present and future insurance requirements. </lable><br>
					<lable>This letter will remain in force until cancelled in writing by me/us.</lable><br>
					
					<lable>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	: {{ $mandate->name }}</lable><br>
					<lable>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mandate->address }}</lable><br>
					<lable>M. No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mandate->mobile_number }} </lable><br>
					<lable>Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $mandate->email }}</lable></p>
					<lable>Signature &nbsp;&nbsp;	 
						<img src="{{ public_path('storage/' . $mandate->signature_file) }}" alt="b" width="200">
						
					</lable><br>
		</div>
		<br></br>
	</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Mandate Letter</title>
		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h2 {
				font-weight: 250;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-size: 13px;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}
			
			p {
				color: #000;
				text-align:left;
				font-size: 15px;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
				font-size: 15px;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/* New Styles for alignment */
			.align-left {
				text-align: left;
				width: 50%;
				display: inline-block;
				font-size: 15px;
				padding: 5px 0;
			}

			.signature-section {
				text-align: left;
				margin-top: 20px;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="{{ public_path('images\contact-mail-NIB-logo.png') }}" alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>
								<td>
									<br>
									<b>Broker Code : IRDA/ DB 693/17</b>
									<br>
									<b>GSTIN : 23AAFCN3874P1ZX</b>
									<br>
									<b>CIN : U66010MP2016PTC041677</b>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<b>Address : Plot No. 1, 3rd Floor, Lalwani Complex, Vidya Nagar, Bhopal - 462026</b>
									<br>
									<b>Contact : 0755-4911343, +919302182475</b>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>				

			<h2><u>MANDATE LETTER TO ACT AS AN INSURANCE BROKER</u></h2>				
			<h4><u>TO WHOMSOEVER IT MAY CONCERN</u></h4>
			<label><sub style="size:4px;"><u style="text-decoration-style: double;"><b>Exclusive Mandate</b></u></sub></label><br>
			<p>
				<label>I / We hereby appoint M/s Notion Insurance Broker Pvt. Ltd. as my insurance broker in connection with my General/Life Insurance requirements till &nbsp;&nbsp;{{$mandate->date}}.</label><br>
				<label>M/s Notion Insurance Broker Pvt. Ltd. is hereby authorized to negotiate directly with any or multiple insurance companies on my/our behalf, regarding my/our present and future insurance requirements.</label><br>
				<label>This letter will remain in force until cancelled in writing by me/us.</label><br>
			</p>

			<!-- Aligning Name, Address, Mobile, and Email -->
			<div  style="text-align: left">
				<label><b>Name:</b> {{ $mandate->name }}</label><br>
				<label><b>Address:</b> {{ $mandate->address }}</label><br>
				<label><b>M. No:</b> {{ $mandate->mobile_number }}</label><br>
				<label><b>Email Id:</b> {{ $mandate->email }}</label>
			</div>

			<!-- Signature Section -->
			<div class="signature-section">
				<label><b>Signature:</b></label><br>
				<img src="{{ public_path('storage/' . $mandate->signature_file) }}" alt="b" width="200">
			</div>
		</div>
	</body>
</html>


