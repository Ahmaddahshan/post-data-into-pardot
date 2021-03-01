<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Data into Pardot</title>
</head>
    <body>
        <h1>Post Data into Pardot Using PHP</h1>
        <form action="post-to-pardot.php" method="post">
            <div>
                <label for="txtFirstName">First Name</label>
                <input type="text" name="txtFirstName" id="txtFirstName" required>
            </div>

            <div>
                <label for="txtLastName">Last Name</label>
                <input type="text" name="txtLastName" id="txtLastName" required>
            </div>

            <div>
                <label for="txtEmail">Email:</label>
                <input type="email" name="txtEmail" id="txtEmail" required>
            </div>

            <div>
                <label for="txtPhone">Phone:</label>
                <input type="text" name="txtPhone" id="txtPhone" required>
            </div>

            <div>
                <input type="submit" name="submit" value="Send">
            </div>
        </form>
    </body>
</html>
