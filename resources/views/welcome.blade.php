<!DOCTYPE html>
<html>
<head>
    <title>I B C - International Biblestudy Club - Sign Up Form</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div>
        <h1 style="text-align:center;">I B C</h1>
        <h2 style="text-align:center;">International Biblestudy Club - Sign Up Form</h2>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <img src="public/images/International_Bible_Club_flyer_Nov-2019.JPG" class="responsive">
        </div>

        <div class="col-sm-2"></div>

        <div class="col-sm-5">
        
            <form action="store" method="POST">
                <div class="form-group">
                    <table cellpadding="10">
                        <tr>
                            <td><label for="fname">First name<sup style="color: red;">*</sup></label>
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Your first name" required></td>

                            <td><label for="lname">Last name<sup style="color: red;">*</sup></label>
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Your last name" required></td>
                        </tr>

                        <tr>
                            <td><label for="email">Email<sup style="color: red;">*</sup></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder=" info@example.com"required>
                            </td>

                            <td><label for="telephone">Telephone</label>
                                <input type="number" class="form-control" name="telephone" id="telephone" placeholder=" Your telephone number">
                            </td>

                        </tr>
                    </table>                     
                </div>

                <table><tr>
                    <td>
                        <div class="form-group">
                            <label for="age">Age - Please select your group:<sup style="color: red;">*</sup></label> <br>
                              <input type="radio" name="age" value="30" > 0 - 30<br>
                              <input type="radio" name="age" value="60"> 31 - 60<br>
                              <input type="radio" name="age" value="100"> 61 - 100<br>                      
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="gender">Gender</label><br>                      
                                <input type="radio"  name="gender" id="gender" >Male
                                <input type="radio" name="gender" id="gender">Female
                        </div>
                    </td>
                    </tr></table>


                <div class="form-group">
                    <label for="churchgoer">Are You Already Part of A Church?</label>

                    <div class="radio">
                        <label><input type="radio"  name="churchgoer" id="churchgoer"> I attend church
                        </label>

                        <label>
                            <input type="radio"  name="churchgoer" id="churchgoer">I don't attend church
                        </label>
                    </div>                                  
                </div>

                <div class="form-group">
                    <label for="churchgoer">Topics of interest (you may check more than one)...</label>

                    <div class="from-group">
                        <table>
                            <tr>
                                <td><input type="checkbox"  name="" id=""> Money / Financial Principles</td>
                                <td>&nbsp<input type="checkbox"  name="" id=""> The End-time Issues: Real or Fallacy </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"  name="" id=""> Dealing with forgiveness</td>
                                <td>&nbsp<input type="checkbox"  name="" id=""> Overcoming Loneliness </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"  name="" id=""> Technology</td>
                                <td>&nbsp<input type="checkbox"  name="" id=""> Other <input type="text" name=""></td>
                            </tr>                           
                        </table>
                    </div>  
                </div>

                <div>
                    <input type="checkbox" name="privacyOK" id="privacyOK"> Check to agree to our <a href="#">privacy policy</a>
                </div>
                <!-- <div class="form-group">
                    <textarea class="form-control">
                        
                    </textarea>
                </div> -->

                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                </div>

            </form>

        </div>      
        
    </div>

<!-- 
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
    </div> -->

</div>

</body>
</html>