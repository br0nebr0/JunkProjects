$(function() {

    $("#SendEmail").validate({

        rules: {
            name: {
                required: true
            },
            phone: {
                required: false,
                minlength:11,
                maxlength:18,
                
            },
            email: {
                required: true,
                email: true
            },
        },


        messages: {
            name: {
                required: "Поле Имя обязательное для заполнения"
            },
            email: {
                required: "Поле E-mail обязательное для заполнения",
                email: "Введите пожалуйста корректный e-mail"
            }
        },
        focusCleanup: true,
        focusInvalid: false,
        invalidHandler: function(event, validator) {
            $(".js-form-message").text("Исправьте пожалуйста все ошибки.");
        },
        onkeyup: function(element) {
            $(".js-form-message").text("");
        },
        errorPlacement: function(error, element) {
            return true;
        },
        errorClass: "input_error",
        validClass: "input_success"
    });

});
