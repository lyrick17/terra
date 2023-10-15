<!-- Profile -->
<div class="card p-3 p-sm-4 p-lg-5" id="profile">
    <form action="member-profile.php" method="post">

        <!-- This input type determines whether form is register -->
        <input type="hidden" id="formType" name="formType" value="register">

        <p class="text-center h1">Profile Details</p>
        <hr />

        <!-- FirstName and LastName -->
        <div class="row my-2">
            <div class="col-lg-6 form-outline  mb-2">
                <label class="form-label" for="profileFName">First Name:</label>
                
                
                <input type="text" 
                        id="profileFName" 
                        name="profileFName"
                        placeholder="First Name" 
                        class="form-control"
                        value="<?php echo $_SESSION['fname']; ?>"
                        readonly>
            </div>
            <div class="col-lg-6 form-outline  mb-2">
                <label class="form-label" for="profileLName">Last Name:</label>
                
                <input type="text" 
                        id="profileLName" 
                        name="profileLName"
                        placeholder="Last Name"
                        class="form-control" 
                        value="<?php echo $_SESSION['lname']; ?>"
                        readonly>
            </div>
        </div>
        <!-- Email -->
        <div class="form-outline  mb-2">
            <label class="form-label" for="profileEmail">Email:</label>
            
            <input type="email" 
                    id="profileEmail" 
                    name="profileEmail"
                    placeholder="Email"
                    class="form-control" 
                    value="<?php echo $_SESSION['email']; ?>"
                    readonly>
        </div>

        <!-- Registration Date -->
        <div class="form-outline  mb-2">
            <label class="form-label" for="profileDate">Date Registered:</label>
            
            <input type="email" 
                    id="profileDate" 
                    name="profileDate"
                    placeholder="Email"
                    class="form-control" 
                    value="<?php echo $_SESSION['registration_date']; ?>">
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