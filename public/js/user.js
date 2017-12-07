

function _getId(id){
	
	
	
	return document.getElementById(id);
	
	
}// End of get element id function


// Check if the forgotpassword form is contained in a given page


if(document.getElementById('pass-forgot-form') != null || document.getElementById('pass-forgot-form') != undefined){
		
		var forgotForm = _getId('pass-forgot-form'),
			forgotFelms = forgotForm.elements,
			formPelements = forgotForm.getElementsByTagName('p');
			mailField = forgotForm.user_log_mail;
			
			
			
			
			/***************The code below validates the mail field****************************************/
			
			mailField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(mailField.value == ''){
					
					
					var bEl = createBel();
						bEl.innerHTML = 'The field must not be empty'
						mailField.style.borderColor = '#F00';
						formPelements[0].appendChild(bEl);
					
					
					
				}else if(mailField.value.trim().length == 0){
					
					
					var bEl = createBel();
						bEl.innerHTML = 'Email cannot be spaces'
						mailField.style.borderColor = '#F00';
						formPelements[0].appendChild(bEl);
					
					
				}else{
					
					
					var emailPattern = /^[_a-zA-Z0-9\-]+(\.[_a-zA-Z0-9\-]+)*@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)*(\.[a-z]{2,3})$/;
					
					if(emailPattern.test(mailField.value) == false){
						
						var bEl = createBel();
						bEl.innerHTML = 'You must enter valid email format';
						mailField.style.borderColor = '#F00';
						formPelements[0].appendChild(bEl);
						
						
					}
					
					
					
				}// End of outter if else statment
				
			}// End of mail field onblur event
			
			
			
			
			
			mailField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPelements[0].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formPelements[0].removeChild(bEl);
							mailField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			
			
			
			/*************Below is a global function to the the form, this will be called on each field******/
			
			function createBel(){
				
				
				var bElement = document.createElement('b');
					bElement.style.color = '#F00';
					bElement.style.fontSize = '.9em';
				return bElement;
				
				
			}// End of create b element function
			
			
			
}




function forgotvalidate(forgotPassForm){
	
	
	
	
	
	
	return false;
	
}// End of validate forgot password form




/*+++++++++++++++++++++++++++++++++ User Account Settings Page++++++++++++++++++++*/


/*==========================User Image upload Code================*/


// Modal

if(_getId('upload-profile-image') != null || _getId('upload-profile-image') != undefined){
	
	
var uploadModal = _getId('upload-profile-image'),
	uploadClose = uploadModal.getElementsByClassName('close-confirm')[0];
	uploadClose2 = uploadModal.getElementsByClassName('auto-log')[0];
	
	uploadClose.onclick = function(){
	
		uploadModal.style.display = 'none';
		
		
		
	}
	
	uploadClose2.onclick = function(){
	
		uploadModal.style.display = 'none';
		
		
		
	}
}


// Upload Modal Reveal

if(_getId('upload-image') != null || _getId('upload-image') != undefined ){
	
	uploadModReveal = _getId('upload-image');
	
	
	uploadModReveal.onclick = function(){
	
		uploadModal.style.display = 'block';
		
		
		
	} 
	
	
}



// About update


var uAboutForm = _getId('u-about-update');
var aboutSubP = _getId('about-sub');
var aboutField = _getId('about-text'),
	textCountUpdate = _getId('text-count');
	
	aboutField.onkeyup = function(){
		
		
		var fieldValue = aboutField.value;
			textCountUpdate.innerHTML = fieldValue.length;
			
			 if(fieldValue.length == 150){
				
	
				textCountUpdate.innerHTML = fieldValue.substring(0,150).length;
					
					
			}
			
			
		
	}// End of onkey up event
	
	aboutField.onkeypress = function(){
		
		
		var fieldValue = aboutField.value;
			
			
			 if(fieldValue.length == 150){
				
				aboutField.value = fieldValue.substring(0,149);
					
			}
			
			
		
	}// End of onkeypress event
	
	
	aboutField.onclick = function(){
		
		
		var bEl = aboutSubP.getElementsByTagName('b')[0];
						
						
			if(bEl != undefined){
							
							
				aboutSubP.removeChild(bEl);
				aboutField.style.borderColor = '#0CF';
							
			}
			
			
		
	}// End of onclick event


// Validate user about form

uAboutForm.onsubmit = function(){

	if(aboutField.value == ''){
		
	
		var bEltest = aboutSubP.getElementsByTagName('b')[0];
						
						
			if(bEltest == undefined){
							
							
				var ubEl = createBel();
				ubEl.innerHTML = 'Fill the form to update bio.';
				aboutField.style.borderColor = '#F00';
				aboutSubP.appendChild(ubEl);
			
							
			}
			
			return false;
	
		
	}else if(aboutField.value.trim().length == 0){
		
		
		
		var bEltest = aboutSubP.getElementsByTagName('b')[0];
						
						
			if(bEltest == undefined){
							
							
				var ubEl = createBel();
				ubEl.innerHTML = 'bio cannot be spaces.';
				aboutField.style.borderColor = '#F00';
				aboutSubP.appendChild(ubEl);
			
							
			}
			
			return false;
		
		
	}else{
		
		
		submitUabout(uAboutForm);
		
		return false;
		
		
	}
	
	function createBel(){
				
				
			var bElement = document.createElement('b');
			bElement.style.color = '#F00';
			bElement.style.fontSize = '.8em';
			return bElement;
			
			
			}// End of create b element function
	
	
	
	
	
	
	return false;
	
}




/*++++++++++++++++++Personal information data processing+++++++++++++++++++++++*/



var u_personal_pass = _getId('pass'),
	u_p_pass_show = _getId('pass-show');
	
	u_p_pass_show.onclick = function(){
		
		
		
		var attr = u_personal_pass.getAttribute('type');
		
		if(attr == 'password'){
			
			u_personal_pass.setAttribute('type','text');
			u_p_pass_show.innerHTML = 'Hide';
			
		}else{
			
			u_personal_pass.setAttribute('type','password');
			u_p_pass_show.innerHTML = 'Show';
			
		}
		
	
		
		return false;
		
	}// End of password show/hide button onclick event
	
	
	
	
	
// Validate user personal information Fields


if(_getId('u-personal-update') != null){
		
		var u_UpForm =_getId('u-personal-update'),
			u_UpFelms = u_UpForm.elements,
			formSpanElements =  u_UpForm.getElementsByTagName('span');
			mailField = u_UpForm.logged_user_new_mail,
			passField =  u_UpForm.logged_user_new_pass,
			nameField =  u_UpForm.logged_user_new_name,
			lastNameField =  u_UpForm.logged_user_new_lname,
			
			
			
			/***************The code below validates the mail field****************************************/
			
			mailField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(mailField.value == ''){
					
					var bElement = formSpanElements[2].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The field must not be empty'
							mailField.style.borderColor = '#F00';
							formSpanElements[2].appendChild(bEl);
							
					}
					
			
					
				}else if(mailField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[2].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Email cannot be spaces'
						mailField.style.borderColor = '#F00';
						formSpanElements[2].appendChild(bEl);
						
					}
					
					
				}else{
					
					
					var emailPattern = /^[_a-zA-Z0-9\-]+(\.[_a-zA-Z0-9\-]+)*@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)*(\.[a-z]{2,3})$/;
					
					if(emailPattern.test(mailField.value) == false){
						
						
						
						var bElement = formSpanElements[2].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
							var bEl = createBel();
							bEl.innerHTML = 'You must enter valid email format';
							mailField.style.borderColor = '#F00';
							formSpanElements[2].appendChild(bEl);
						}
						
						
					}
					
					
					
				}// End of outter if else statment
				
			}// End of mail field onblur event
			
			
			
			
			
			mailField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[2].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[2].removeChild(bEl);
							mailField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			
			/***************The code below validates the password field****************************************/
			
			passField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(passField.value == ''){
					
					
					var bElement = formSpanElements[3].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The field must not be empty'
							passField.style.borderColor = '#F00';
							formSpanElements[3].appendChild(bEl);
							
					}
					
					
				}else if(passField.value.trim().length == 0){
					
					var bElement = formSpanElements[3].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
						var bEl = createBel();
							bEl.innerHTML = 'Password should not include any space'
							passField.style.borderColor = '#F00';
							formSpanElements[3].appendChild(bEl);
							 
						}
					
				}else{
					
					var passPattern = /^.{8,}/;
					
					if(passPattern.test(passField.value) == false){
						
						var bElement = formSpanElements[3].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
							
							var bEl = createBel();
							bEl.innerHTML = 'password should be a minimum of 8 character';
							passField.style.borderColor = '#F00';
							formSpanElements[3].appendChild(bEl);
							 
						}
						
						
					}
					
					
				}
				
			}// End of mail field onblur event
			
			
			
			
			
			passField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl =  formSpanElements[3].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							 formSpanElements[3].removeChild(bEl);
							passField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			/***************The code below validates the first name field****************************************/
			
			nameField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(nameField.value == ''){
					
					var bElement = formSpanElements[0].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
							
					
							var bEl = createBel();
								bEl.innerHTML = 'There field must not be empty'
								nameField.style.borderColor = '#F00';
								formSpanElements[0].appendChild(bEl);
						
						}
					
					
				}else if(nameField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[0].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
					
							var bEl = createBel();
								bEl.innerHTML = 'First Name cannot be spaces'
								nameField.style.borderColor = '#F00';
								formSpanElements[0].appendChild(bEl);
						
						}
					
				}else{
					
					
					var regExp = /^[a-zA-Z]/;
					
					if(regExp.test(nameField.value) == false){
						
						
					
					var bElement = formSpanElements[0].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
							var bEl = createBel();
								bEl.innerHTML = 'First name should not contain numbers'
								nameField.style.borderColor = '#F00';
								formSpanElements[0].appendChild(bEl);
								
						}
						
					}// End of regular test if else statement
					
				}// End of outter if else statement
				
			}// End of name field onblur event
			
			
			
			
			
			nameField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[0].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[0].removeChild(bEl);
							nameField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of name field onclick event
			
			
			
			
			/***************The code below validates the last name field****************************************/
			
			lastNameField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(lastNameField.value == ''){
					
					
					
					var bElement = formSpanElements[1].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
							var bEl = createBel();
								bEl.innerHTML = 'There field must not be empty'
								lastNameField.style.borderColor = '#F00';
								formSpanElements[1].appendChild(bEl);
						}
					
				}else if(lastNameField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[1].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
							var bEl = createBel();
								bEl.innerHTML = 'Last name cannot be spaces'
								lastNameField.style.borderColor = '#F00';
								formSpanElements[1].appendChild(bEl);
								
						}
					
				}else{
					
					
					var regExp = /^[a-zA-Z]/;
					
					if(regExp.test(lastNameField.value) == false){
						
						
					
					var bElement = formSpanElements[1].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
							var bEl = createBel();
								bEl.innerHTML = 'Last name should not contain numbers'
								lastNameField.style.borderColor = '#F00';
								formSpanElements[1].appendChild(bEl);
								
						}
						
					}// End of regular test if else statement
					
				}// End of outter if else statement
				
			}// End of name field onblur event
			
			
			
			
			
			lastNameField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[1].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[1].removeChild(bEl);
							lastNameField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of last name field onclick event
			
			
			
			
			/*************Below is a global function to the the form, this will be called on each field******/
			
			function createBel(){
				
				
				var bElement = document.createElement('b');
					bElement.style.color = '#F00';
					bElement.style.fontSize = '.9em';
				return bElement;
				
				
			}// End of create b element function
			
			
			
			
			
			
			
			
			//This function will be called to validate data onsubmit
		
			
			function validate_p_update_form(up_pForm){
				
				
				var submitStatus = false;
				
				for(var input = 0; input < up_pForm.length;input++){
					
					
					if(up_pForm[input].value == ''){
						
						
						var bElement = formSpanElements[input].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
							var bEl = createBel();
								bEl.innerHTML = 'This field must filled before updating'
								up_pForm[input].style.borderColor = '#F00';
								formSpanElements[input].appendChild(bEl);
								
						}
						
						return false;
						break;
						
						
					}else if(up_pForm[input].value.trim().length == 0){
							
						
						var bElement = formSpanElements[input].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
					
							var bEl = createBel();
								bEl.innerHTML = 'This field should not be spaces'
								up_pForm[input].style.borderColor = '#F00';
								formSpanElements[input].appendChild(bEl);
								
						}	
						
						
						return false;
						break;	
							
					}else{
						
						if(input == 5){
							
							
							submitStatus = true;
							break;
							
						}
						
						
					}// End of if else statement
					
					
					
					
					
				}// End of for loop
				
				
				
					if(submitStatus == true){
					
					
						submitUabout(up_pForm);
						return false;
						
					}else{
					
						return false;
					
					}
				
			}// End of form final validation function
			
			
			
			
			
			
	
		}// End of check form exists in a given page document if statement
		










	





// Update user information ajax





function submitUabout(aboutUpF){
	
	
		var requestObject = defineHttpObject();
		
		if(aboutUpF.about_update_test != undefined || aboutUpF.about_update_test != null ){
			
			var requestUrl = returnUrl()+getRequestMethod('about');
			
		}else if(aboutUpF.personal_update_test != undefined || aboutUpF.personal_update_test != null){
			
			var requestUrl = returnUrl()+getRequestMethod('personal');
			
		}else{
			
			var requestUrl = returnUrl()+getRequestMethod();
			
		}
		
		sendData();
		
		

		
		function sendData(){
			
			requestObject.abort();
			requestObject.onreadystatechange = updateServerStatus;
			requestObject.open('post',requestUrl,false);
			requestObject.send(new FormData(aboutUpF));
			
			
			
		}// End of send data to server function
		
		
		function updateServerStatus(){
			
			
			
			
			if(requestObject.readyState === 4 && requestObject.status == 200){
				
				
				
				var jsonUpdate = JSON.parse(requestObject.responseText);
				
				if(jsonUpdate.id == "bio"){
					
					
					
					
					if(jsonUpdate.id_status == 'bio success'){
						
						aboutField.value = jsonUpdate.bio;
						aboutField.style.fontSize = '.9em';
						
					}else{
						
						
						window.alert(jsonUpdate.msg);
						
					}
					
				}else if(jsonUpdate.id == 'personal'){
					
				
				
					if(jsonUpdate.id_status == 'personal success'){
			
							
							window.alert('Personal information successfully updated');
						
						
						
					}else{
						
						
						window.alert(jsonUpdate.msg);
						
					}
						
					
				}else{
					
					
					window.alert(jsonUpdate.msg);
					location.href ='http://localhost/Turtrozz/webApzz/cafeT/public/home/defaultAction';
					
				}
				
				
			}// End of check if server response status met
			
			
			
		
		
	
			
		}// End of update server status function
		
		
		return false;
		
	}// End of register user Ajax
	
	
	
	
	
	
// define XMLHttpRequest function



function getRequestMethod(methodFlag){
	
	var method =''
	if(methodFlag == 'about'){
		
		method = 'update_user_about';
		return method;
		
	}else if(methodFlag == 'personal'){
		
		method = 'update_user_personal';
		return method;
	}else{
		
		
		method = 'deactivate_user';
		return method;
		
	}
	
	
	
}// End of get Request method
		
function defineHttpObject(){
			
			
			var requestObj = new XMLHttpRequest();
			
			return requestObj;
			
		}// End of XMLHttpRequest definition



function returnUrl(){
		
		var serverUrl = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/';
		return serverUrl;
		
	}




/*=================Confirm Account Deactivation Modal==========================*/

var deactivateSubForm = '';

var confirmDeactivationModal = _getId('deactivation-confirm');
	confirmDeactivateClose = confirmDeactivationModal.getElementsByClassName('close-confirm')[0],
	confirmDeactivate = confirmDeactivationModal.getElementsByClassName('update-confirm')[0],
	confirmCancel = confirmDeactivationModal.getElementsByClassName('cancel-confirm')[0];


	confirmDeactivateClose.onclick = function(){
		
		
		confirmDeactivationModal.style.display = 'none';
		
	}
	
	confirmDeactivate.onclick = function(){
		
		
		submitUabout(deactivateSubForm);
		confirmDeactivationModal.style.display = 'none';
		
	}
	
	confirmCancel.onclick = function(){
		
		
		confirmDeactivationModal.style.display = 'none';
		
	}



function deactivateAccount(deactivateForm){
	
	
	deactivateSubForm = deactivateForm;
	confirmDeactivationModal.style.display = 'block';
	
	
	return false;
	
	
}




