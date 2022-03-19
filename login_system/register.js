$(document).ready(() => {
    
    $('#register-form').submit((event) => {
        event.preventDefault()

        let errors = 0
        let login, password, email, fullname, address

        if ($('#login') !== 'undefined' && $('#login').val().length > 4) {
            login = $('#login').val()
        } else {
            alert("Login is too short")
            errors += 1
        }

        if ($('#password') !== 'undefined' && $('#password').val().length > 5 && $('#password').val() === $('#password2').val()) {
            password = $('#password').val()
        } else {
            alert("Password is too short")
            errors += 1
        }

        if ($('#fullname') !== 'undefined' && $('#fullname').val().includes(' ')) {
            fullname = $('#fullname').val()
        } else {
            alert("Incorrect fullname")
            errors += 1
        }

        if ($('#email') !== 'undefined') {
            email = $('#email').val()
        } else {
            errors += 1
        }

        if ($('#address') !== 'undefined' && $('#address').val().length > 8) {
            address = $('#address').val()
        } else {
            alert("Invalid address")
            errors += 1
        }
        
        let country = $('#country').val()


        if (errors === 0) {
            $.ajax({
                url: "reg_handler.php",
                type: "POST",
                data: {
                    login,
                    password,
                    fullname,
                    email, 
                    address,
                    country
                },
                success: function(data) {
                    alert(data)
                }
            })
        }
    })
})




