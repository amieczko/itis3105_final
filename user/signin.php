<?php

$current_dir = basename(dirname(__FILE__));
include("../header.php");

if (isset($_POST['fName']))
{
    if ($_POST['password']!=$_POST['confirmPassword'])
    {
        echo '<html> User name and confirm user name do not match</html>';

    }
    elseif ($_POST['age']<18)
    {
        echo '<html> Age must be above 18</html>';
    }
    else
    {

        sql_userSignup();

    }




}


?>
<!--particles.js-->
<!--<div id="particles-js" style="z-index:-100!important"></div>-->

<div class="login-page form-login">
    <div class="container-fluid form form-login">
        <div class="row logo-header">
            <div class="col-sm-6 text-center">
                <img class="logo "src="../site/img/logo-icon.png"/>
            </div>
            <div class="col-sm-6 text-center">
            <img class="logo-text"src="../site/img/logo-text.png"/>
            </div>
        </div>
        <!--Sign up-->
        <form class="register-form">
            <div class="row">
                <div class="col-md-6 col-xs-12 .visible-sm-block, hidden-sm">
                    <input type="text" placeholder="First Name" name="fName" required><br>
                    <input type="text" placeholder="Last Name" name="lName" required><br>
                    <input type="text" placeholder="User Name" name="userName"required><br>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="text" placeholder="Password" name="password"required><br>
                    <input type="text" placeholder="Confirm Password" name="confirmPassword"required><br>
                    <input type="text" placeholder="Age" name="age"required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <input type="text" placeholder="Phone Number" name="phoneNumber"required><br>
                    <label  class="control control--radio">Admin
                        <input type="checkbox" name="role" id="check-admin" value="1" required>
                        <div class="control__indicator"></div>
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <label  class="control control--radio" >User
                    <input type="checkbox" name="role" id="check-user" value="0"required>
                    <div class="control__indicator"></div>
                    </label>
                </div>
                <div class="col-sm-6">
                    <input type="email" placeholder="Email Address" name="email"required><br>
                    <input type="submit"  class="submit-button" value="Sign Up">
                </div>
            </div>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>


        <!--Login-->
        <form class="login-form">
        <input type="text" placeholder="username"/>
        <input type="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>

<?php include("../footer.php");?>