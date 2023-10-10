// Add event listener to toggle links
document.querySelectorAll('.toggle-link').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        var target = this.getAttribute('data-bs-target');
        document.querySelectorAll('.registerForm').forEach(function(form) {
            if (('#' + form.id) === target) {
                form.classList.add('show'); // Show the target form
            } else {
                form.classList.remove('show'); // Hide other forms
            }
        });
    });
});


window.onload = function() {
    let loginError = document.getElementById('loginError').innerHTML;
    let registerError = document.getElementById('registerError').innerHTML;
    if (loginError) {
        //document.querySelector('.toggle-link').click();
        document.getElementById('login').classList.add('show');
        document.getElementById('signup').classList.remove('show');
    } else if (registerError) {
        document.getElementById('signup').classList.add('show');
        document.getElementById('login').classList.remove('show');
    }

    let params = new URLSearchParams(window.location.search);

    if (params.get('login') == 'true') {
        document.getElementById('login').classList.add('show');
        document.getElementById('signup').classList.remove('show');
    }

};