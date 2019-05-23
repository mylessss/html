<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <style>
          body{
            background-image: url("../../../images/space.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h2, p {
            font-family: 'Abel', sans-serif;
        }
        h2{
            font-size: 39px;
            letter-spacing: 11px;
             text-transform: uppercase;
             color: white;
             text-align: center;
        }
        p{
            font-size: 30px;
            color: white;
        }
        input[type=text] {
            
            font-size: 25px;
            border: 2px solid;
            
            font-family: 'Abel', sans-serif;
            
        }
        input[type='text']:hover {
            box-shadow :8px 8px 9px #ccf2ff;
          
        }
        input[type='text']:focus {
            background-color:#ffcccc;
           
        }
        input[type='number'] {
            font-size: 25px;
            border: 2px solid;
            
            font-family: 'Abel', sans-serif;
            
        }
        input[type='number']:hover {
            box-shadow :8px 8px 9px #ccf2ff;
        }
        input[type='number']:focus {
            background-color:#ffcccc;
           
        }
        input[type='email'] {
            font-size: 25px;
            border: 2px solid;
            
            font-family: 'Abel', sans-serif;
            
        }
        input[type='email']:hover {
            box-shadow :8px 8px 9px #ccf2ff;
        }
        input[type='email']:focus {
            background-color:#ffcccc;
           
        }
        body {
            text-align: center;
        }
        form {
            display: inline-block;
        }
        button {
            background-color: white;
            border: solid black 2px;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            -webkit-transition-duration: 1s; /* Safari */
            transition-duration: 1s;
            cursor: pointer;
            
        }
        button:hover {
            background-color: #b3d9ff;
            color: white;
        }
        a:link, a:visited {
            background-color: white;
            color: black;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: 'Abel', sans-serif;
            -webkit-transition-duration: 1s; /* Safari */
            transition-duration: 1s;
        }
        a:hover, a:active {
            background-color:#ffb3b3;
            color: white;
        }

        
        
        
    </style>
</head>







<body>

    
    <h2>Report an Alien Abduction</h2>
    <p>INCIDENT REPORT</p>
    <hr>
    <a href="search.html">What's my personal ID?</a>
    <br>
    <br>
    <br>
    
    <form action='incidentinclude.php' method="POST">
    <p>0 = false 1 = true*</p>
    <input type='number' name='IDpersonal' placeholder='Personal ID'>
        <br><br>
       
        <input type='number' name='dayOccur' placeholder='Day Occur (dd)'>
        <br><br>
        <input type='number' name='monthOccur' placeholder='Month Occur (mm)'>
        <br><br>
        <input type='number' name='yearOccur' placeholder='Year Occur (yyyy)'>
        <br><br>
        <input type='text' name='streetOccur' placeholder='Street Occur'>
        <br><br>
        <input type='text' name='cityOccur' placeholder='City Occur'>
        <br><br>
        <input type='text' name='stateOccur' placeholder='State Occur'>
        <br><br>
        <input type='text' name='zipOccur' placeholder='Zip Occur'>
        <br><br>
        <input type='text' name='countryOccur' placeholder='Country Occur'>
        <br><br>
        <p>describe the encounter </p>
        
            <p>1: see without tangible physical effects</p> 
            
            <p>2: a measurable physical effect on either animate or inanimate matter is manifested</p>
            
            <p>3: the presence of animated creatures is reported</p>
        <input type='text' name='classEncounter' placeholder='Class Encounter'>
        <br><br>
        <p>friendly = f </p>
            <p>neutral = n </p>
            <p>hostile = h </p>
            <p>not applicable = x </p>
        <input type='text' name='threatEncounter' placeholder='Threat Encounter'>
        <br><br>
        
        <input type='text' name='corroborated' placeholder='Corroborated*'>
        <br><br>
        <input type='text' name='usingPsychedelics' placeholder='Psychedelic Use*'>
        <br><br>
       
        
        
        
        <button type='submit' name='submit'>Submit</button>
    </form>

    
</body>
</html>