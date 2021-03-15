$(document).ready(function() {
 
    $('#password').keyup(function() {
        var password = $('#password').val();
        if (checkStrength(password) == false) {
            $('#sign-up').attr('disabled', true);
        }
    });
    $('#confirm-password').blur(function() {
        if ($('#password').val() !== $('#confirm-password').val()) {
            $('#popover-cpassword').removeClass('hide');
            $('#sign-up').attr('disabled', true);
        } else {
            $('#popover-cpassword').addClass('hide');
        }
    });



    function checkStrength(password) {
        var strength = 0;


        //If password contains both lower and uppercase characters, increase strength value.
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
            strength += 1;
            $('.low-upper-case').addClass('text-success');
            $('.low-upper-case i').removeClass('fa-times').addClass('fa-check');
            $('#popover-password-top').addClass('hide');


        } else {
            $('.low-upper-case').removeClass('text-success');
            $('.low-upper-case i').addClass('fa-times').removeClass('fa-check');
            $('#popover-password-top').removeClass('hide');
        }

        //If it has numbers and characters, increase strength value.
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
            strength += 1;
            $('.one-number').addClass('text-success');
            $('.one-number i').removeClass('fa-times').addClass('fa-check');
            $('#popover-password-top').addClass('hide');

        } else {
            $('.one-number').removeClass('text-success');
            $('.one-number i').addClass('fa-times').removeClass('fa-check');
            $('#popover-password-top').removeClass('hide');
        }

        //If it has one special character, increase strength value.
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            strength += 1;
            $('.one-special-char').addClass('text-success');
            $('.one-special-char i').removeClass('fa-times').addClass('fa-check');
            $('#popover-password-top').addClass('hide');

        } else {
            $('.one-special-char').removeClass('text-success');
            $('.one-special-char i').addClass('fa-times').removeClass('fa-check');
            $('#popover-password-top').removeClass('hide');
        }

        if (password.length > 5 && password.length < 9) {
            strength += 1;
            $('.six-character').addClass('text-success');
            $('.six-character i').removeClass('fa-times').addClass('fa-check');
            $('#popover-password-top').addClass('hide');

        } else {
            $('.six-character').removeClass('text-success');
            $('.six-character i').addClass('fa-times').removeClass('fa-check');
            $('#popover-password-top').removeClass('hide');
        }


        // If value is less than 2

        if (strength < 2) {
            $('#result').removeClass()
            $('#password-strength').addClass('progress-bar-danger');

            $('#result').addClass('text-danger').text('Very Weak');
            $('#password-strength').css('width', '10%');
        } else if (strength == 2) {
            $('#result').addClass('good');
            $('#password-strength').removeClass('progress-bar-danger');
            $('#password-strength').addClass('progress-bar-warning');
            $('#result').addClass('text-warning').text('Weak')
            $('#password-strength').css('width', '60%');
            return 'Week'
        } else if (strength == 4) {
            $('#result').removeClass()
            $('#result').addClass('strong');
            $('#password-strength').removeClass('progress-bar-warning');
            $('#password-strength').addClass('progress-bar-success');
            $('#result').addClass('text-success').text('Strong');
            $('#password-strength').css('width', '100%');

            return 'Strong'
        }

    }

});