<Doctype html!>
<html>
<head>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form action="data.php" method="POST">
        
        <table>

      
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
                </tr>
                <tr>
        <!--  <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>    
        </tr> -->
            <td>Password</td>
            <td><input type="text" name="password"></td>
            </tr>
        <tr>
        <td><button type="submit">Register</button></td>
        </tr>
    
</table>
<div class="g-recaptcha" data-sitekey="6LeQdtwUAAAAADojzvhOzSdCt3iQuaq-X1grRu0b" ></div>
</form>
<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer> -->
    </script>
</body>
</html>
