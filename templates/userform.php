<!-- Register -->
<div class="card p-3 p-sm-4 p-lg-5 registerForm collapse show" id="signup">
    <form action="register.php" method="post">

        <!-- This input type determines whether form is register -->
        <input type="hidden" id="formType" name="formType" value="register">

        <p class="text-center h3">Welcome to Terra!</p>
        <p class="text-center">take a journey with other people</p>

        <!-- span element for handling server side register ERRORS -->
        <span id="registerError" class="text-danger text-center" style="font-size: 12px; font-style: italic;"><?php echo $registerError; ?></span>

        <!-- FirstName and LastName -->
        <div class="row my-2">
            <div class="col-lg-6 form-outline  mb-2">
                <label class="form-label" for="registerFName">First Name:</label>
                
                <!-- span element for handling Firstname ERRORS -->
                <span id="registerFNameError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>

                <input type="text" 
                        id="registerFName" 
                        name="registerFName"
                        placeholder="First Name" 
                        class="form-control"
                        value="<?php if (isset($_POST['registerFName'])) echo $_POST['registerFName'] ?>">
            </div>
            <div class="col-lg-6 form-outline  mb-2">
                <label class="form-label" for="registerLName">Last Name:</label>
                
                <!-- span element for handling FName ERRORS -->
                <span id="registerLNameError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>
                <input type="text" 
                        id="registerLName" 
                        name="registerLName"
                        placeholder="Last Name"
                        class="form-control" 
                        value="<?php if (isset($_POST['registerLName'])) echo $_POST['registerLName'] ?>">
            </div>
        </div>
        <!-- Username -->
        <!--<div class="form-outline  mb-2">
            <label class="form-label" for="registerUsername">Username:</label>
            <input type="text" 
                    id="registerUsername"
                    name="registerUsername" 
                    placeholder="Username"
                    class="form-control" 
                    value="">
        </div>-->

        <!-- Email -->
        <div class="form-outline  mb-2">
            <label class="form-label" for="registerEmail">Email:</label>
            
            <!-- span element for handling EMAIL ERRORS -->
            <span id="registerEmailError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>
            <input type="email" 
                    id="registerEmail" 
                    name="registerEmail"
                    placeholder="Email"
                    class="form-control" 
                    value="<?php if (isset($_POST['registerEmail'])) echo $_POST['registerEmail'] ?>">
        </div>
        <!-- Password -->
        <div class="form-outline  mb-2">
            <label class="form-label" for="registerPassword">Password:</label>
            
            <!-- span element for handling PASSWORD ERRORS -->
            <span id="registerPasswordError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>
            <input type="password" 
                    id="registerPassword" 
                    name="registerPassword"
                    placeholder="Password"
                    class="form-control">
        </div>
        <!-- Confirm Password -->
        <div class="form-outline mb-2">
            <label class="form-label" for="registerConfirmPassword">Confirm Password:</label>
            <input type="password" 
                    id="registerConfirmPassword" 
                    name="registerConfirmPassword"
                    placeholder="Confirm Password"
                    class="form-control" >
        </div>
        <!-- Checkbox -->
        <div class="form-check">
            <label class="form-check-label" for="registerCheck">
                <input class="form-check-input mb-3" type="checkbox" value="" id="registerCheck" aria-describedby="registerCheckHelpText" required />
                I have read and agree to the terms
            </label>
            <span id="registerCheckError" class="text-danger" style="font-size: 12px; font-style: italic;"></span>
        </div>

        <!-- Submit button -->
        <input type="submit" 
                id="submit" 
                name="submit" 
                class="btn btn-primary btn-block mb-3 px-5" 
                value="Register"
                disabled>
        <div>
            Already have an account? 
            <a href="#login" role="button" data-bs-toggle="collapse" data-bs-target="#login" aria-expanded="false" aria-controls="login" class="toggle-link">Log In</a>
        </div>
    </form>
</div>


<!-- Login -->
<div class="card p-3 p-sm-4 p-lg-5 registerForm collapse" id="login">
    <form action="register.php" method="post">

        <!-- This input type determines whether form is register -->
        <input type="hidden" id="formType2" name="formType2" value="login">

        <p class="text-center h3">Log In to Terra</p>
        <p class="text-center">take a journey with other people</p>

        <!-- span element for handling login ERRORS -->
        <span id="loginError" class="text-danger text-center" style="font-size: 12px; font-style: italic;"><?php echo $loginError; ?></span>
        
        <!-- Username / Email -->
        <div class="form-outline  mb-2">
            <label class="form-label" for="loginUser">Email:</label>

            
            <input type="text" id="loginUser" name="loginUser" class="form-control" placeholder="Email">
        </div>
        <!-- Password -->
        <div class="form-outline  mb-2">
            <label class="form-label" for="loginPassword">Password:</label>

            <input type="password" id="loginPassword" name="loginPassword" class="form-control" placeholder="Password">
        </div>
        <!-- Checkbox -->
        <div class="mb-2">
            <a href="#">Forgot Password?</a>
        </div>

        <!-- Submit button -->
        <input type="submit" 
                id="submitLogin" 
                name="submitLogin" 
                class="btn btn-primary btn-block mb-3 px-5" 
                value="Log In">
        <div>
            New to Terra? 
            
            <a href="#" role="button" data-bs-toggle="collapse" data-bs-target="#signup" aria-expanded="false" aria-controls="signup" class="toggle-link">Sign Up</a>
        </div>
    </form>
</div>