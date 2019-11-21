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

    $('#signup-button').click(function() {
        let username = $("#username").val();
        let password = $("#password").val();
        let email = $("#email").val();

        $.ajax({
            url: 'api.php',
            type: 'POST',
            data: {
                'ok-signup': '1',
                'email':email,
                'username':username,
                'password':password,
            },
            dataType: 'json',
            success: function() {

            },
            error: function(){
                
            }
        })
    })
})