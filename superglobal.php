<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admission Form</h1>

    <form action="save.php" method="post" enctype="multipart/form-data">

   <select name="course_name" id="" multiple>

    <option value="0">Select your course</option>

   <option value="wp" selected> Fullstack WP Developement
   </option>
   
   <option value="Laravel">Full Stack Laravel Developer</option>

   </select>

   <input type="submit" value="Submit">

    <!--<input type="search" name="search_data" id="">

    <input type="datetime-local" name="" id="">
     
    <input type="range" name="price_range" min ="1" max="100" id="">

   

    <input type="reset" value="reset">
    
    <label for="username">User Name</label>
    <input type="text" name="username" id=""> </br> </br>

    <label for="email">User email</label>   

    <input type="email" name="email" id=""> </br> </br>

    <label for="password">Password</label>

    <input type="password" name="password" id=""> </br> </br>

    <label for="shortdes">Short Description</label>

    <textarea name="shortdes" id="" cols="30" rows="10"> 

    </textarea> </br> </br>
                           
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="male" id=""> Male
 
    <input type="radio" name="gender" value="female" id=""> female
    <input type="radio" name="gender" value="other" id=""> other </br> </br> 
    <label for="bestteacher">Best Teacher</label>

    <input type="checkbox" name="bestteacher[]" value= "hadi" id=""> Hadi
    <input type="checkbox" name="bestteacher[]" value= "noman" id=""> noman 
    <input type="checkbox" name="bestteacher[]" value= "maruf" id=""> maruf </br></br>

    <label for="Course Fee">Course Fee</label>
    <input type="number" name="coursefee" id=""> </br></br>
    <label for="cell">Write Your Cell number</label>

    <input type="tel" name="cell" id=""> </br></br>

    <label for="birthDate">birth Date</label>
    <input type="date" name="birthdate" id=""> </br></br>

    <label for="color">Write Your Best Color</label>
    
    <input type="color" name="color" id=""> </br></br>

    <label for="classtime">Class Time</label>
    <input type="time" name="classtime" id=""> </br></br>

    <label for="websiteurl">Web Site URL</label>

    <input type="url" name="websiteurl" id=""> </br></br>
     
    <label for="month">Month </label>

    <input type="month" name="course_start_month" id="">

    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_PORT']?>">

    <label for="image">Upload Your Photo</label>

    <input type="file" src="image" id="">

    
   


     </form>

</body>
</html>