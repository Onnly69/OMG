

$(document).ready(() => {
    
    $('#login-form').submit((event) => {
    event.preventDefault()

    let login = $('#login').val()
    let password = $('#password').val()
    
        $.ajax({
         url: "log_handler.php",
            type: "POST",
            data: {
               login,
               password
         },
            success: function(data) {
                alert(data)
             }
        })
        
    })
})