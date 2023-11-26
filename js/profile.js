$(document).ready(function () {
    $("#btnSave").click(function(e) {
        alert("Hi")
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'php/update_profile.php',
            data: {
                username:$('#username').val(),
                email:$('#email').val(),
            },
            success: function (response) {
                alert(response);
                
            }
        });
    });
});
