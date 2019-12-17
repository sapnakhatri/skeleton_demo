$(function () {
    /***************Alert JS**************************************************/
    function createAlert(title, details, severity, appendToId) {

        var alertClasses = ["alert", "float-right",'fadeInUp','animated' ,"col-md-6","customshadow","mt-2", "alert-dismissible"];
        alertClasses.push("alert-" + severity.toLowerCase());


        var msg = $("<div />", {
            "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
        });

        if (title) {
            var msgTitle = $("<b />", {
                html: title+"<br/>"
            }).appendTo(msg);
        }
        if (details) {
            var msgDetails = $("<small />", {
                html: details
            }).appendTo(msg);

        }

        var msgClose = $("<span />", {
            "class": "close", // you need to quote "class" since it's a reserved keyword
            "data-dismiss": "alert",
            html: "&times;"
        }).appendTo(msg);

        $('#' + appendToId).prepend(msg);
         setTimeout(function () {
            msg.addClass("fadeOutDown");
           setTimeout(function () {
                msg.remove();
            }, 1000);
        }, 5000);

    }
    /***************Phone Validation**************************************************/

    jQuery.validator.addMethod("phoneno", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
    }, "Please specify a valid phone number");
    /*****************************Form validation********************************************************* */

    $("form[name='subscription']").validate({
        errorElement: 'div',
        errorClass: 'error',
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            cellphone: {
                required: true,
                phoneno: true
            },
            optin: { required: true },
        },
        // Specify validation error messages
        messages: {
            cellphone: {
                phoneno: "Please provide  a valid phone number",
                required: "Please provide phone number"
            },
            optin: { required: "Please accept opt-in" },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        errorPlacement: function (error, element) {

            if (element.attr("type") == "checkbox") {
                error.insertBefore(element);
            } else {
                error.insertAfter(element);

            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: '/save',
                type: 'POST',
                datatype: 'json',
                data: $(form).serializeArray(),
                success: function (data) {
                    createAlert(data.title, data.msg, data.status, 'message');
                }
            });
            return false;
        }
    });
});