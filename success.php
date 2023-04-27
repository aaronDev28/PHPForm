<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
</head>
<body>



<?php
session_start();
		$to = $_POST['email'];
		$bcc = 'aaron@yaliio.com';
		$subject = 'Confirmation of Form Submission';
		$message = 'Thank you for submitting the form. Here is the information you provided: ' . "\r\n\r\n" .
			'Name: ' . $_POST['name'] . "\r\n" .
			'Phone Number: ' . $_POST['phone'] . "\r\n" .
			'Email: ' . $_POST['email'] . "\r\n" .
			'Location: ' . $_POST['location'] . "\r\n" .
			'Age: ' . $_POST['age'] . "\r\n" .
			'University: ' . $_POST['university'] . "\r\n\r\n" .
			'Thank you!';
		$headers = 'From: aaron@yaliio.com' . "\r\n" .
			'Bcc: ' . $bcc . "\r\n";

      $mail_result = mail($to, $subject, $message, $headers);
	?>

<div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Thank you for filling the form, <?php echo $_POST['name']; ?>.</p>
        <?php
if ($mail_result) {
  echo '<p>A confirmation email has been sent to ' . $_POST['email'] . '.</p>';
} else {
  echo '<p>Error: The confirmation email could not be sent.</p>';
  error_log('Error: The confirmation email could not be sent.');
}
        ?>
      </div>


      

</body>
</html>