// JavaScript Document



function _getId(id){
	
	return document.getElementById(id);
	
	
}// End of get element id function



// PAyment Form validation


if(_getId('pay-form') != null){
	
	
	
	
		
		
		
		var pay_Form =_getId('pay-form'),
			formPayels =  pay_Form.getElementsByTagName('p');
			cardField = pay_Form.card_number,
			cvvField =  pay_Form.cvv_number;
			
			
			
			cardField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(cardField.value == ''){
					
					var bElement = formPayels[0].getElementsByTagName('small')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The field must not be empty'
							cardField.style.borderColor = '#F00';
							formPayels[0].appendChild(bEl);
							
					}
					
			
					
				}else if(cardField.value.trim().length == 0){
					
					
					var bElement = formPayels[0].getElementsByTagName('small')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Email cannot be spaces'
						cardField.style.borderColor = '#F00';
						formPayels[0].appendChild(bEl);
						
					}
					
					
				}else{
					
					
					var numPattern = /^[0-9]/;
					var numPattern2 = /^[0-9]{16}/;
					
					if(numPattern.test(cardField.value) == false){
						
						
						
						var bElement = formPayels[0].getElementsByTagName('small')[0];
					
						if(bElement == undefined){
							var bEl = createBel();
							bEl.innerHTML = 'Card Number must be numbers only';
							cardField.style.borderColor = '#F00';
							formPayels[0].appendChild(bEl);
						}
						
						
					}else if(numPattern2.test(cardField.value) == false){
						
						
						
						var bElement = formPayels[0].getElementsByTagName('small')[0];
					
						if(bElement == undefined){
							var bEl = createBel();
							bEl.innerHTML = 'Card number should be only 16 characters';
							cardField.style.borderColor = '#F00';
							formPayels[0].appendChild(bEl);
						}
						
						
					}
					
					
					
				}// End of outter if else statment
				
			}// End of mail field onblur event
			
			
			cardField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPayels[0].getElementsByTagName('small')[0];
						
						
						if(bEl != undefined){
							
							
							formPayels[0].removeChild(bEl);
							cardField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event

			
			
			
			
			cvvField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(cvvField.value == ''){
					
					
					var bElement = formPayels[4].getElementsByTagName('small')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The field must not be empty'
							cvvField.style.borderColor = '#F00';
							formPayels[4].appendChild(bEl);
							
					}
					
			
					
				}else if(cvvField.value.trim().length == 0){
					
					
					var bElement = formPayels[4].getElementsByTagName('small')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Cvv cannot be spaces'
						cvvField.style.borderColor = '#F00';
						formPayels[4].appendChild(bEl);
						
					}
					
					
				}else{
					
					
					var numPattern = /^[0-9]/;
					var numPattern2 = /^[0-9]{3}/;
					
					if(numPattern.test(cvvField.value.trim()) == false){
						
						
						
						var bElement = formPayels[4].getElementsByTagName('small')[0];
					
						if(bElement == undefined){
							var bEl = createBel();
							bEl.innerHTML = 'Cvv number must be numbers only';
							cvvField.style.borderColor = '#F00';
							formPayels[4].appendChild(bEl);
						}
						
						
					}else if(numPattern2.test(cvvField.value) == false){
						
						
						
						var bElement = formPayels[4].getElementsByTagName('small')[0];
					
						if(bElement == undefined){
							var bEl = createBel();
							bEl.innerHTML = 'Cvv number should be only 3 characters';
							cvvField.style.borderColor = '#F00';
							formPayels[4].appendChild(bEl);
						}
						
						
					}
					
					
					
				}// End of outter if else statment
				
			}// End of mail field onblur event
			
			
			cvvField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPayels[4].getElementsByTagName('small')[0];
						
						
						if(bEl != undefined){
							
							
							formPayels[4].removeChild(bEl);
							cvvField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event


			
			
			
			
			function createBel(){
				
				
				var bElement = document.createElement('small');
					bElement.style.color = '#F00';
					bElement.style.fontSize = '.9em';
				return bElement;
				
				
			}// End of create b element function
			
			
				
				
				

	
	
	
}



// USER LOGIN FORM


if(_getId('user_login_form') != null){
		
		var u_logForm =_getId('user_login_form'),
			formPels =  u_logForm.getElementsByTagName('p');
			umailField = u_logForm.user_log_mail,
			upassField =   u_logForm.user_log_pass,
			
			
			
			
			
			
			
			
			
			
			/***************The code below validates the mail field****************************************/
			
			umailField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(umailField.value == ''){
					
					var bElement = formPels[0].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The field must not be empty'
							umailField.style.borderColor = '#F00';
							formPels[0].appendChild(bEl);
							
					}
					
			
					
				}else if(umailField.value.trim().length == 0){
					
					
					var bElement = formPels[0].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Email cannot be spaces'
						umailField.style.borderColor = '#F00';
						formPels[0].appendChild(bEl);
						
					}
					
					
				}else{
					
					
					var emailPattern = /^[_a-zA-Z0-9\-]+(\.[_a-zA-Z0-9\-]+)*@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)*(\.[a-z]{2,3})$/;
					
					if(emailPattern.test(umailField.value) == false){
						
						
						
						var bElement = formPels[0].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
							var bEl = createBel();
							bEl.innerHTML = 'You must enter valid email format';
							umailField.style.borderColor = '#F00';
							formPels[0].appendChild(bEl);
						}
						
						
					}
					
					
					
				}// End of outter if else statment
				
			}// End of mail field onblur event
			
			
			
			
			
			umailField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formPels[0].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formPels[0].removeChild(bEl);
							umailField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			
			/***************The code below validates the password field****************************************/
			
			upassField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(upassField.value == ''){
					
					
					var bElement = formPels[1].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The field must not be empty'
							upassField.style.borderColor = '#F00';
							formPels[1].appendChild(bEl);
							
					}
					
					
				}else if(upassField.value.trim().length == 0){
					
					var bElement = formPels[1].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
						var bEl = createBel();
							bEl.innerHTML = 'Password should not include any space'
							upassField.style.borderColor = '#F00';
							formPels[1].appendChild(bEl);
							 
						}
					
				}else{
					
					var passPattern = /^.{8,}/;
					
					if(passPattern.test(upassField.value) == false){
						
						var bElement = formPels[1].getElementsByTagName('b')[0];
					
						if(bElement == undefined){
							
							var bEl = createBel();
							bEl.innerHTML = 'A minimum of 8 characters are required for your password';
							upassField.style.borderColor = '#F00';
							formPels[1].appendChild(bEl);
							 
						}
						
						
					}
					
					
				}
				
			}// End of mail field onblur event
			
			
			
			
			
			upassField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl =  formPels[1].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formPels[1].removeChild(bEl);
							upassField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			
			
			function createBel(){
				
				
				var bElement = document.createElement('b');
					bElement.style.color = '#F00';
					bElement.style.fontSize = '.9em';
				return bElement;
				
				
			}// End of create b element function
			
}














var url5 = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/log_user_in';

function cartLogAjax(loginForm){
	
	
	
	
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',url5,false);
		requestObj.send(new FormData(loginForm));
		
	}
	
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
			
			
		
			
			var structuredDataObj = JSON.parse(requestObj.responseText);
				
				if(structuredDataObj.login_status != undefined && structuredDataObj.login_status == true ){
					
					
					
					location.href = 'http://localhost/Turtrozz/webApzz/cafeT/public/registered/customer';
					
				}else{
				
					
					window.alert(structuredDataObj.user_msg);
					
				}
				
			
			
			
		}
		
		
		
	}// End of check if server response
	
	
	
	
		
	
	
	
	return false;
	
	
}// End of ajax cart function
