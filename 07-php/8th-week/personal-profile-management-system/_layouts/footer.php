<script>
    function clearForm(event) {
        var formElements = document.getElementById("registrationForm").elements;
        for (var i = 0; i < formElements.length; i++) {
            if (formElements[i].type !== "button" && formElements[i].type !== "submit") {
                formElements[i].value = "";
            }
        }
        event.preventDefault();
    }
</script>
<script>
    const passwordField = document.getElementById("password2");
    const togglePassword = document.querySelector(".password-toggle-icon i");

    togglePassword.addEventListener("click", function() {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
        }
    });
</script>
</body>

</html>