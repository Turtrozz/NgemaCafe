
new WOW().init();
 



// Sign up form validation



	
	
{	
	
	
	if(document.getElementById('sign-up-form') != null){
		
		var signUpForm = document.getElementById('sign-up-form'),
			signUpFelms = signUpForm.elements,
			formPelements = signUpForm.getElementsByTagName('p');
			mailField = signUpForm.user_r_mail,
			passField = signUpForm.user_r_pass,
			nameField = signUpForm.user_r_fname,
			lastNameField = signUpForm.user_r_lname,
			
			
			
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
			
			
			
			/***************The code below validates the password field****************************************/
			
			passField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(passField.value == ''){
					
					var bEl = createBel();
						bEl.innerHTML = 'The field must not be empty'
						passField.style.borderColor = '#F00';
						formPelements[1].appendChild(bEl);
					
					
				}else if(passField.value.trim().length == 0){
					
					
					
					var bEl = createBel();
						bEl.innerHTML = 'Password should not include any space'
						passField.style.borderColor = '#F00';
						formPelements[1].appendChild(bEl);
					
				}else{
					
					var passPattern = /^.{8,}/;
					
					if(passPattern.test(passField.value) == false){
						
						var bEl = createBel();
						bEl.innerHTML = 'password should be a minimum of 8 character';
						passField.style.borderColor = '#F00';
						formPelements[1].appendChild(bEl);
						
						
					}
					
					
				}
				
			}// End of mail field onblur event
			
			
			
			
			
			passField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPelements[1].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formPelements[1].removeChild(bEl);
							passField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			/***************The code below validates the first name field****************************************/
			
			nameField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(nameField.value == ''){
					
					var bEl = createBel();
						bEl.innerHTML = 'There field must not be empty'
						nameField.style.borderColor = '#F00';
						formPelements[2].appendChild(bEl);
					
					
				}else if(nameField.value.trim().length == 0){
					
					var bEl = createBel();
						bEl.innerHTML = 'First Name cannot be spaces'
						nameField.style.borderColor = '#F00';
						formPelements[2].appendChild(bEl);
					
				}
				
			}// End of name field onblur event
			
			
			
			
			
			nameField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPelements[2].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formPelements[2].removeChild(bEl);
							nameField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of name field onclick event
			
			
			
			
			/***************The code below validates the last name field****************************************/
			
			lastNameField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(lastNameField.value == ''){
					
					var bEl = createBel();
						bEl.innerHTML = 'There field must not be empty'
						lastNameField.style.borderColor = '#F00';
						formPelements[3].appendChild(bEl);
					
					
				}else if(lastNameField.value.trim().length == 0){
					
					var bEl = createBel();
						bEl.innerHTML = 'Last name cannot be spaces'
						lastNameField.style.borderColor = '#F00';
						formPelements[3].appendChild(bEl);
					
				}
				
			}// End of name field onblur event
			
			
			
			
			
			lastNameField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPelements[3].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formPelements[3].removeChild(bEl);
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
		
			
			function formFinalValidation(userSignUpF){
				
				
				registerUserAjax(userSignUpF);
				
				return false;
				 
				
			}// End of form final validation function
			
			
	
		}// End of check form exists in a given page document if statement
		
		
		
		
		
		
			
		
		
	
	
}// End of sign up form code block



function _getId(id){
	
	
	
	return document.getElementById(id);
	
	
}// End of get element id function



//The auto login registered customer modal


var autoLoginMod = _getId('auto-log-user'),
	autoClose = autoLoginMod.getElementsByClassName('close-confirm')[0];
	autoLog = autoLoginMod.getElementsByClassName('auto-log')[0],
	userMsg = _getId('log-alert');
	
	
	autoClose.onclick = function(){
	
		autoLoginMod.style.display = 'none';
		location.href = 'http://localhost/Turtrozz/webApzz/cafeT/public/registered/customer';
		
		
	}
	
	autoLog.onclick = function(){
	
		autoLoginMod.style.display = 'none';
		location.href = 'http://localhost/Turtrozz/webApzz/cafeT/public/registered/customer';
		
		
	}
	
	



{
	
	function returnUrl(){
		
		var serverUrl = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/';
		return serverUrl;
		
	}
	
	
	function registerUserAjax(userRegForm){
		
		
		
		
		
		var requestObject = defineHttpObject();
		var requestUrl = returnUrl()+'registerUser';
		
		sendData();
		
		
		
		
		
		
		
		function defineHttpObject(){
			
			
			var requestObj = new XMLHttpRequest();
			
			return requestObj;
			
		}// End of XMLHttpRequest definition
		
		function sendData(){
			
			requestObject.abort();
			requestObject.onreadystatechange = updateServerStatus;
			requestObject.open('post',requestUrl,false);
			requestObject.send(new FormData(userRegForm));
			
			
			
		}// End of send data to server function
		
		
		function updateServerStatus(){
			
			
			
			
			if(requestObject.readyState === 4 && requestObject.status == 200){
				
				
				
				
				var structuredDataObj = JSON.parse(requestObject.responseText);
				
				if(structuredDataObj.login_status != undefined && structuredDataObj.login_status == true ){
					
					
					userMsg.innerHTML = 'YOU\'RE IN,'+structuredDataObj.login_user_name;
					autoLoginMod.style.display = 'block';
					setAutoClose();
					
					
				}else{
					
					window.alert(requestObject.responseText);
					window.alert(structuredDataObj.user_msg);
					
				}
				
			}// End of check if server response status met
			
			
			
			function setAutoClose(){
		
				interval = setTimeout(function(){
			
			
				var computedStyle = document.defaultView.getComputedStyle(autoLoginMod,null);
				
				if(computedStyle.display == 'block'){
				
					
					
					autoLoginMod.style.display = 'none';
					location.href = structuredDataObj.login_url;
					
				}
			
		},8000);
		
		
	}// End of auto close cart modal
			
		}
		
		
		return false;
		
	}// End of register user Ajax
	
	
}// End of user accounts ajax code block



