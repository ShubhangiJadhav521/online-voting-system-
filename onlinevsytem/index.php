<!DOCTYPE html>
<html>
    <head>
        <title>Online Voting System</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
<body>
    <center>
    <div id= "headerSection">
    <h1>Online Voting System</h1>
    
</div>
<hr>
<div id= "bodySection">
    <form action="api/login.php" method="POST">
        <h2>Login</h2>
        <input type ="number" name="moblie" placeholder="Enter Mobile Number"><br><br>
        <input type ="password" name="password" placeholder="Enter password"><br><br>
        <select id="dropbox" name="role">
            <option value="1"> voter</option>
            <option value="2">Group</option>
</select><br><br>
            <button id="loginbt" type="submit">Login</button><br><br>
            New User? <a href="routes/register.html">Register here</a>

</form>
</div>
</center>
</body>
</html>
