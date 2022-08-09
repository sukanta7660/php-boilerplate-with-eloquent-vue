printError = (elementId, message) => {
    document.getElementById(elementId).innerHTML = message;
}

validateForm = (e) => {
    let name = document.getElementById('name').value
    let email = document.getElementById('email').value
    let contact = document.getElementById('contactNo').value
    let password = document.getElementById('password').value
    let confirmPassword = document.getElementById('confirmPassword').value

    let {nameError, emailError, contactError, passwordError, confirmPasswordError} = true;

    if (name === '') {
        printError('nameError', 'Please enter your name');
    }else {
        let regex = /^[a-zA-Z\s]+$/;
        if (regex.test(name) === false) {
            printError('nameError', 'Please enter a valid name');
        }else {
            printError('nameError', '');
            nameError = false;
        }
    }

    if (email === '') {
        printError('emailError', 'Please enter your email');
    }else {
        let regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError('emailError', 'Please enter a valid email address');
        }else {
            printError('emailErr', '');
            emailError = false;
        }
    }

    if(contact === '') {
        printError('contactError', 'Please enter your mobile number');
    } else {
        let regex = /^[1-9]\d{9}$/;
        if(regex.test(contact) === false) {
            printError("contactError", 'Please enter a valid 10 digit mobile number');
        } else{
            printError('contactError', '');
            contactError = false;
        }
    }

    if (password === '') {
        printError('passwordError', 'Please enter a password');
    }else {
        let regex = /^.{5,15}$/;
        if (regex.test(password) === false) {
            printError('passwordError', 'Password length must be between 5-15 characters');
        }else {
            printError('passwordError', '');
            passwordError = false;
        }
    }

    if (confirmPassword === '') {
        printError('confirmPasswordError', 'Confirm password must');
    }else {
        if (password !== confirmPassword) {
            printError('confirmPasswordError', 'Password and confirm password must be same');
        }else {
            printError('confirmPasswordError', '');
            confirmPasswordError = false;
        }
    }

    if((nameError || emailError || contactError || passwordError || confirmPasswordError) === true) {
        return false;
    }else {
        return false;
    }
}


checkAvailability = () => {
    const url = $('#email').data('url');
    jQuery.ajax({
        url: url,
        data:'email='+$('#email').val(),
        type: 'POST',
        success:function(data){
            $('#user-availability-status').html(data);
        },
        error:function (){}
    });
}