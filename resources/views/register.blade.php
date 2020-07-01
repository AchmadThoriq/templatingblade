<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
<h1>Buat Account Baru!</h1>
            <h3>Sign Up Form</h3>

        <form action="welcome" method="POST" >
            @csrf
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" > <br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" > <br>

        
        <p>Gender :</p>

            <input type="radio" id="male" name="gender" value="male">  
            <label for="male">Male</label> <br>
            <input type="radio"id="female" name="gender" value="female">
            <label for="male">FeMale</label> <br>
            <input type="radio"id="Other" name="gender" value="Other"> 
            <label for="male">Other</label> 

        <p>Languange Spoken :</p>

            <input type="checkbox" id="indo" name="languange" value="indo">
            <label for="indo">Bahasa Indonesia</label> <br>
            <input type="checkbox" id="english" name="languange" value="english" >
            <label for="english">English</label> <br>
            <input type="checkbox" id="Other" name="languange" value="Other">
            <label for="Other">Other</label>


        <p>Nationality :</p>

            <select id="national" name="national" >
                <option value="Indonesia">Indonesia</option>
                <option value="Jepang">Jepang</option>
                <option value="Other">Other</option>
            </select>

            <p>Bio :</p>
            <textarea name="bio" rows="10" cols="30">
            </textarea> <br> <br>

            <input type="submit"value="Sign Up">

        </form>

</body>
</html>