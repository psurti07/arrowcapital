function callAjax(form,url){
	$.ajax({
		url: `${base_url + url}`,
		type: "POST",
		data: form,
		dataType: "JSON",
		cache: false,
		contentType: false,
		processData:false,
		success: function (response) {
			if(response.success == true) {
				toastr.success(response.message);
				setTimeout(function() {
					location.reload();
				}, 1000);
			}
			else {
				toastr.error(response.message);
			}
		},
		error: function (jXHR, textStatus, errorThrown) {
			toastr.error(errorThrown, 'ERROR');
		}
	})
}
/* theme:cWpZTDBIUDVLM0ZvblpqTFcrOXlDVXJuSTg0NjBFcCtra2Q3OFlMeXMxaWVadXVVeW1BejVkWHNZaXhSTXZiSQ==
*/
$(document).ready(function(){
	$.validator.addMethod("filesize", function(value, element, param) {
		return this.optional(element) || (element.files[0].size <= param);
	}, "File size must be less than {0}.");
	$.validator.addMethod("customExtension", function(value, element) {
		var extension = value.split('.').pop().toLowerCase();
		// alert("File extension: " + extension);
		return this.optional(element) || /\.(jpeg|jpg|png|pdf|docx)$/i.test(value);
	}, "Invalid file extension.");
	$('.numeric-input').on('keydown', function(event) {
		if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
			event.preventDefault();
		}
	});
	$.validator.addMethod("customPANNumber", function(value, element) {
		// Use a regular expression to match the PAN card number pattern
		return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
	}, "Please enter a valid PAN card number");
	/* Profile Photo Validate starts */
	$("#submitForm11").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Profile Photo field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* Profile Photo Validate ends */
	/* Aadhar card validate starts */
	$("#submitForm12").validate({
		rules:{
			userfile_number:{
				required: true,
				digits:true
			},
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile_number:{
				required: 'Aadhaar Card Number field is required',
			},
			userfile:{
				required: 'Aadhaar Card Photo field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* Aadhar card validate ends */
	/* PAN card validate starts */
	$("#submitForm13").validate({
		rules:{
			userfile_number:{
				required: true,
				customPANNumber: true,
			},
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile_number:{
				required: 'PAN Card Number field is required',
			},
			userfile:{
				required: 'PAN Card Photo field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* Aadhar card validate ends */
	/* Light bill Validate starts */
	$("#submitForm14").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Address Proof - Light bill field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* Light bill Validate ends */
	/* cancel cheque Validate starts */
	$("#submitForm15").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Cancel Cheque field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* cancel cheque Validate ends */
	/* bank statement Validate starts */
	$("#submitForm16").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Bank Statement - Last 6 months field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* bank statement Validate ends */
	/* formsixteen Validate starts */
	$("#submitForm17").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Form 16 field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* form sixteen Validate ends */
	/* salary slip Validate starts */
	$("#submitForm18").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Salary Slip field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* salary slip Validate ends */
	/* business proof Validate starts */
	$("#submitForm19").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'Business Proof field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* business proof Validate ends */
	/* itreturn Validate starts */
	$("#submitForm20").validate({
		rules:{
			userfile:{
				required: true,
				customExtension: true,
				filesize: 4194304 // 4mb in bytes (1024 * 1024 * 4)
			}
		},
		messages:{
			userfile:{
				required: 'IT Return field is required',
				customExtension: 'Allowed file types are: JPG, JPEG, PNG, PDF, DOCX',
				filesize: 'Image size must be less than 4mb',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/uploaddocument';
			callAjax(formData,url)
		}
	})
	/* itreturn Validate ends */
	/* remarks Validate starts */
	$("#submitForm21").validate({
		rules:{
			remarks:{
				required: true,
			}
		},
		messages:{
			remarks:{
				required: 'Remarks field is required',
			}
		},
		errorPlacement: function (error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			let url = 'customer/profile/documentmsg';
			callAjax(formData,url)
		}
	})
	/* remarks Validate ends */
})

