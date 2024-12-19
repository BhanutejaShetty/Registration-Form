$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        // Prevent default submission
        e.preventDefault();

        // Validate fields
        const name = $("#name").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const dob = $("#dob").val();
        const gender = $("#gender").val();
        const address = $("#address").val();

        if (!name || !email || !phone || !dob || !gender || !address) {
            alert("Please fill in all fields.");
            return false;
        }

        // Submit the form
        this.submit();
    });
});
