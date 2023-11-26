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
                passwords:$('#passwords').val(),
            },
            success: function (response) {
                alert(response);
                window.location.href = "index.php";
            }
        });
    });
});
