$(document).ready(function () {
    $("#btnRegister").click(function(e) {
        alert("Hi")
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'php/registers.php',
            data: {
                username:$('#username').val(),
                email:$('#email').val(),
            },
            success: function (response) {
                alert('Registered Successfully');
                window.location.href = "profile.html";
            }
        });
    });
});
