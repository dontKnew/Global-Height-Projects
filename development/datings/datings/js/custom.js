$(window).on('load', function(){

	"use strict";
 
 
	/* ========================================================== */
	/*   Navigation Background Color                              */
	/* ========================================================== */
	
	$(window).on('scroll', function() {
		if($(this).scrollTop() > 450) {
			$('.navbar-fixed-top').addClass('opaque');
		} else {
			$('.navbar-fixed-top').removeClass('opaque');
		}
	});
 
	
	/* ========================================================== */
	/*   Hide Responsive Navigation On-Click                      */
	/* ========================================================== */
	
	  $(".navbar-nav li a").on('click', function(event) {
	    $(".navbar-collapse").collapse('hide');
	  });

	
	/* ========================================================== */
	/*   Navigation Color                                         */
	/* ========================================================== */
	
	$('#navbarCollapse').onePageNav({
		filter: ':not(.external)'
	});


	/* ========================================================== */
	/*   SmoothScroll                                             */
	/* ========================================================== */
	
	$(".navbar-nav li a, a.scrool").on('click', function(e) {
		
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;
		
		$('html,body').animate({scrollTop:target_top -70}, 1000);
			return false;
		
	});


	/* ========================================================== */
	/*   Newsletter                                               */
	/* ========================================================== */
	
	$('.newsletter-form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'email':$('input[name="nf_email"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p.newsletter_success_box').show();
					});
				});
				e.preventDefault();
			}
		});
	});		
	

	/* ========================================================== */
	/*   Register                                                 */
	/* ========================================================== */
	
	$('#register-form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'names':$('input[name="register_names"]').val(),
					'email':$('input[name="register_email"]').val(),
					'ticket':$('select[name="register_ticket"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p.register_success_box').show();
					});
				});
				e.preventDefault();
			}
		});
	})
	
	
	/* ========================================================== */
	/*   Contact                                                 */
	/* ========================================================== */
	
	$('#contact-form').each( function(){
		var form = $(this);
		//form.validate();
		form.submit(function(e) {
			if (!e.isDefaultPrevented()) {
				jQuery.post(this.action,{
					'names':$('input[name="contact_names"]').val(),
					'phone':$('input[name="contact_phone"]').val(),
					'email':$('input[name="contact_email"]').val(),
					'ticket':$('select[name="contact_ticket"]').val(),
					'message':$('textarea[name="contact_message"]').val(),
				},function(data){
					form.fadeOut('fast', function() {
						$(this).siblings('p.contact_success_box').show();
					});
				});
				e.preventDefault();
			}
		});
	})
});

	

	/* ========================================================== */
	/*   Popup-Gallery                                            */
	/* ========================================================== */
	$('.popup-gallery').find('a.popup1').magnificPopup({
		type: 'image',
		gallery: {
		  enabled:true
		}
	}); 
	
	$('.popup-gallery').find('a.popup2').magnificPopup({
		type: 'image',
		gallery: {
		  enabled:true
		}
	}); 
 
	$('.popup-gallery').find('a.popup3').magnificPopup({
		type: 'image',
		gallery: {
		  enabled:true
		}
	}); 
 
	$('.popup-gallery').find('a.popup4').magnificPopup({
		type: 'iframe',
		gallery: {
		  enabled:false
		}
	});  
 



	//toggle password

 
	const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
// toggle the type attribute
const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
password.setAttribute('type', type);
// toggle the eye slash icon
this.classList.toggle('fa-eye-slash');
});
 

//multiple image with pre
function readURL(input) {
	if (input.files && input.files[0]) {
  
	  var reader = new FileReader();
  
	  reader.onload = function(e) {
		$('.image-upload-wrap').hide();
  
		$('.file-upload-image').attr('src', e.target.result);
		$('.file-upload-content').show();
  
		$('.image-title').html(input.files[0].name);
	  };
  
	  reader.readAsDataURL(input.files[0]);
  
	} else {
	  removeUpload();
	}
  }
  
  function removeUpload() {
	$('.file-upload-input').replaceWith($('.file-upload-input').clone());
	$('.file-upload-content').hide();
	$('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
		  $('.image-upload-wrap').addClass('image-dropping');
	  });
	  $('.image-upload-wrap').bind('dragleave', function () {
		  $('.image-upload-wrap').removeClass('image-dropping');
  });
  