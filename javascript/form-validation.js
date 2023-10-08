// !!! Dynamic Form Validation for REGISTER !!! 

// TO BE ADDED:
//  - email regex
//  - password must be at least 8 characters - DONE

// checks all input textbox to see if they are empty or invalid by adding Event Listeners 
//  this will not work at the start, but rather would work when the user started using the textboxes
document.getElementById('registerFName').addEventListener("input", checkRegisterFName);
document.getElementById('registerLName').addEventListener("input", checkRegisterLName);
document.getElementById('registerEmail').addEventListener("input", checkRegisterEmail);
document.getElementById('registerPassword').addEventListener("input", checkRegisterPassword);
document.getElementById('registerConfirmPassword').addEventListener("input", checkRegisterPassword);
let checkRegisterTerms = document.querySelector("input[id=registerCheck]"); // terms and conditions checkbox

// VARIABLES as Logic Gates. Once these are all true, the user can Register
let regFNameFilled = (document.getElementById('registerFName').value != ""); // if empty, then true
let regLNameFilled = (document.getElementById('registerLName').value != "");
let regEmailFilled = (document.getElementById('registerEmail').value != "");
let regPasswordFilledMatched = false;
let regTermsChecked = (document.getElementById('registerLName').checked); 

// functions for checking each input text box
function checkRegisterFName() {
    let username = document.getElementById('registerFName').value;
    let errorElement = document.getElementById('registerFNameError');

    if (!username) {
        errorElement.innerHTML = " *required"; // automatically display the error message
        regFNameFilled = false;
    } else {
        errorElement.innerHTML = ""; // clear our the error message when textbox is not empty
        regFNameFilled = true;
    }
    allowRegister();
}

function checkRegisterLName() {
    let username = document.getElementById('registerLName').value;
    let errorElement = document.getElementById('registerLNameError');

    if (!username) {
        errorElement.innerHTML = " *required"; // automatically display the error message
        regLNameFilled = false;
    } else {
        errorElement.innerHTML = ""; // clear our the error message when textbox is not empty
        regLNameFilled = true;
    }
    allowRegister();
}

function checkRegisterEmail() {

    let email = document.getElementById('registerEmail').value;
    let errorElement = document.getElementById('registerEmailError');

    if (!email) {
        errorElement.innerHTML = " *required";
        regEmailFilled = false;
    } else { // EMAIL REGEX TO BE ADDED
        errorElement.innerHTML = "";
        regEmailFilled = true;
    }
    allowRegister();

    }

function checkRegisterPassword() {

    let password = document.getElementById('registerPassword').value;
    let cPassword = document.getElementById('registerConfirmPassword').value;
    let errorElement = document.getElementById('registerPasswordError');

    // check first if password textbox is empty and atleast 8 chars, 
    //  then once user started writing confirm password, automatically compare password and cPassword
    if (!password) {
        errorElement.innerHTML = " *required";
        regPasswordFilledMatched = false;
    } else if (password.length < 8) {
        errorElement.innerHTML = " *must be atleast 8 characters";
        regPasswordFilledMatched = false;
    } else if (cPassword && password != cPassword) {
        errorElement.innerHTML = " *passwords do not match";
        regPasswordFilledMatched = false;
    } else {
        errorElement.innerHTML = "";
        regPasswordFilledMatched = true;
    }
    allowRegister();
}

checkRegisterTerms.addEventListener('change', function() {
    let errorElement = document.getElementById('registerCheckError');

    // confirms if the checkbox is checked or not
    if (this.checked) {
        errorElement.innerHTML = "";
        regTermsChecked = true;
    } else {
        errorElement.innerHTML = " *please tick the checkbox";
        regTermsChecked = false;
    }
    allowRegister();
});

// function checks if all fields are ok to be passed to server and would allow the Register button to be clickable
function allowRegister() {
    console.log("yey");
    if (regFNameFilled && regLNameFilled && regPasswordFilledMatched && regTermsChecked) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}











// !!! Dynamic Form Validation for LOGIN !!! 

// checks all input textbox to see if they are empty or invalid by adding Event Listeners 
//  this will not work at the start, but rather would work when the user started using the textboxes
document.getElementById('loginUser').addEventListener("input", checkLoginUser);
document.getElementById('loginPassword').addEventListener("input", checkLoginPassword);

// VARIABLES as Logic Gates. Once these are all true, the user can Login
let logUserFilled = false;
let logPasswordFilled = false;

// functions for checking user and pass textbox
function checkLoginUser() {
    // validates user input textbox by checking
    //  if user textbox is EMPTY or NOT
    let user = document.getElementById('loginUser').value;
    let errorElement = document.getElementById('loginUserError');

    if (!user) {
        errorElement.innerHTML = " *required"; // automatically display the error message
        logUserFilled = false;
    } else {
        errorElement.innerHTML = ""; // clear our the error message when textbox is not empty
        logUserFilled = true;
    }

}

function checkLoginPassword() {
    // validates password input textbox by consecutively checking
    //  if pass textbox is EMPTY or NOT
    //                  is less than 8 characters or NOT
    //                  matches the confirm pass textbox

    let password = document.getElementById('loginPassword').value;
    let errorElement = document.getElementById('loginPasswordError');

    // check first if password textbox is empty and atleast 8 chars, 
    //  then once user started writing confirm password, automatically compare password and cPassword
    if (!password) {
        errorElement.innerHTML = " *required";
        logPasswordFilled = false;
    } else {
        errorElement.innerHTML = "";
        logPasswordFilled = true;
    }
}
