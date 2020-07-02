<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <fieldset>
    <!--body Website Form sing Up-->
    <h1>Buat Account Baru!</h1>
    <h4>Sing Up Form</h4>
    <form method="POST">
        
                <label for="finame">Name :</label><br>
                <input type="text" name="fname" id="finame">
                <br><br>
    
                <label for="laname">Last Name :</label><br>
                <input type="text" name="lname" id="laname">
                <br><br>
    
                <label>Gender :</label><br><br>
                <label>
                    <input type="radio" name="gender" value="male">Male<br>
                </label>
                <label>
                    <input type="radio" name="gender" value="famale">Famale<br>
                </label>
                <label>
                    <input type="radio" name="gender" value="other">Other
                </label> 
                <br><br>
    
                <label>Nationaly:</label><br>
                <select name="nationali">
                    <option value="indonesia">Indonesia</option>
                    <option value="singapore">Singapore</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="china">China</option>
                </select><br><br>
    
                <label>Laguage Spoken :</label><br>
                <input type="checkbox" name="laguage" value="Indonesia">Bahasa Indonesia<br>
                <input type="checkbox" name="laguage" value="inggris">Inggris<br>
                <input type="checkbox" name="laguage" value="other">Other<br>
                
                <label>Bio:</label><br>
                <textarea cols="30" rows="1" ></textarea><br>

                <button type="submit"><a href ="welcome1">Sing Up</button><br>
    </form>
</fieldset>
</body>
</html>