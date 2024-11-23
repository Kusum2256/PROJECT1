document.querySelector('a[href="#"]').addEventListener('click', function() {
    alert('This feature is coming soon!');
});
document.getElementById('loginForm').addEventListener('submit', function(event) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');

    if (email === '' || password === '') {
        event.preventDefault();
        errorMessage.textContent = 'Please fill in all fields.';
    } else {
        errorMessage.textContent = '';
    }
});

document.getElementById("loginForm").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if (username === "" || password === "") {
        event.preventDefault();
        alert("Both fields are required.");
    }
});

document.getElementById("createAccountForm").addEventListener("submit", function(event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    if (password !== confirmPassword) {
        event.preventDefault();
        alert("Passwords do not match!");
    }
});


function joinNow() {
    alert("Redirecting you to the registration page!");
    window.location.href = "loginpage.php"; // Redirects to a registration page (create this page as needed)
}

document.querySelector('form').addEventListener('submit', function(e) {
    alert('Your content is being submitted!');
});

function validateFile() {
    const fileInput = document.getElementById('fileInput');
    const fileError = document.getElementById('fileError');
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;

    if (fileInput.files.length > 0) {
        const fileName = fileInput.value;

        if (!allowedExtensions.exec(fileName)) {
            fileError.textContent = "Invalid file type. Only .jpg, .png, and .pdf files are allowed.";
            fileInput.value = ''; // Clear the input
            return false; // Prevent form submission
        }

        fileError.textContent = ''; // Clear any previous errors
        return true; // Allow form submission
    }
    return true;

}



