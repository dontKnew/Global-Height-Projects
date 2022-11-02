$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Please fill in your full name",
                    minlength: "your name must consist of at least 3 characters"
                },
                subject: {
                    required: "Please fill in subject",
                    minlength: "your subject must consist of at least 4 characters"
                },
                number: {
                    required: "Please fill in your mobile number",
                    minlength: "your Number must consist of at least 10 characters"
                },
                email: {
                    required: "Please fill in your email address"
                },
                message: {
                    required: "Please write the message",
                    minlength: "thats all? really?"
                }
            },
            submitHandler: function(form) {
//                 $(form).ajaxSubmit({
//                     type:"POST",
//                     data: $(form).serialize(),
//                     url:"https://xklsv.me/v2/xklsvme/contact-us",
//                     success: function() {
//                         $('#contactForm :input').attr('disabled', 'disabled');
//                         $('#contactForm').fadeTo( "slow", 1, function() {
//                             $(this).find(':input').attr('disabled', 'disabled');
//                             $(this).find('label').css('cursor','default');
//                             $('#success').fadeIn()
//                             $('.modal').modal('hide');
// 		                	$('#success').modal('show');
//                         })
//                     },
//                     error: function() {
//                         $('#contactForm').fadeTo( "slow", 1, function() {
//                             $('#error').fadeIn()
//                             $('.modal').modal('hide');
// 		                	$('#error').modal('show');
//                         })
//                     }
//                 })
            }
        })
    })
        
 })(jQuery)
})
