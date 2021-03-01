<?php
    if (isset($_POST['submit'])) {
        $txtFirstName = $_POST['txtFirstName'];
        $txtLastName = $_POST['txtLastName'];
        $txtEmail = $_POST['txtEmail'];
        $txtPhone = $_POST['txtPhone'];

        echo '<iframe src="https://go.pardot.com/l/000000/0000-00-00/0000000?
            txtFirstName='.urlencode($txtFirstName).'
            &txtLastName='.urlencode($txtLastName).'
            &txtEmail='.urlencode($txtEmail).'
            &txtPhone='.urlencode($txtPhone).'" width="1" height="1"></iframe>';
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Thank you</title>
  </head>
  <body>    
    <div>
      <h1>
        Thank you!
      </h1>
      <p>
        Your submission has been received.
      </p>
    </div>
  </body>
</html>