$(document).ready(function() {
    $("#login-button").on('click', function() {
        let username = $("#username").val();
        let password = $("#password").val();

        // console.log(username, password);
        $.ajax({
            url:'api.php',
            type: 'POST',
            data: {
                'ok-login': '1',
                'username': username,
                'password': password
            }, 
            dataType: 'json',
            success: function() {
            //   console.log("Success");
            },
            error: function() {
            //   console.log("Error");
            }
        })
    })
})