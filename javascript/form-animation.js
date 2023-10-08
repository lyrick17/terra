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