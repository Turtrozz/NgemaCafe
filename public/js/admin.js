// JavaScript Document


function _getId(id){
	
	return document.getElementById(id);
	
	
}// End of get element id function


var adminSubForm = "";



/*=================Admin Alert Modal==========================*/

var adminAlertModal = _getId('admin-action-alert');
	adminAlertClose = adminAlertModal.getElementsByClassName('close-confirm')[0],
	adminAlertUpdate = adminAlertModal.getElementsByClassName('update-confirm')[0],
	adminAlertCancel = adminAlertModal.getElementsByClassName('cancel-confirm')[0];


	adminAlertClose.onclick = function(){
		
		
		adminAlertModal.style.display = 'none';
		
	}
	
	adminAlertUpdate.onclick = function(){
		
		
		if(adminSubForm != undefined || adminSubForm != null){
			
			
			adminAlertModal.style.display = 'none';
			
			if(adminSubForm.product_edit != undefined || adminSubForm.product_edit != null){
				
				var editMeth = 'adminEdit';
				adminAjax(adminSubForm,editMeth)
				
			}else if(adminSubForm.product_add != undefined || adminSubForm.product_add != null){
				
				var editMeth = 'adminAdd';
				adminAjax(adminSubForm,editMeth)
				
			}else{
				
				var editMeth = 'adminDel';
				adminAjax(adminSubForm,editMeth)
				
			}
			
			
		}
		
		
	}
	
	adminAlertCancel.onclick = function(){
		
		
		adminAlertModal.style.display = 'none';
		
	}
	
	
	
	
/*=================Admin Response Modal==========================*/

var adminResModal = _getId('admin-action-change-response');
	adminResClose = adminResModal.getElementsByClassName('cancel-confirm')[0],
	

	adminResClose.onclick = function(){
		
		
		adminResModal.style.display = 'none';
		
	}
	
	

// Validate user product edit fields


if(_getId('admin-add-form') != null){
		
		var admin_addForm =_getId('admin-add-form'),
			admin_addFelms =  admin_addForm.elements,
			formAddSpanElements = admin_addForm.getElementsByTagName('span');
			productACField = admin_addForm.product_code,
			productANField =  admin_addForm.product_name,
			productAPField =  admin_addForm.product_price,
			productADField =  admin_addForm.product_description,
			
			
			
			/***************The code below validates the mail field****************************************/
			
			productACField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productACField.value == ''){
					
					var bElement = formAddSpanElements[0].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The code field must not be empty'
							productACField.style.borderColor = '#F00';
							formAddSpanElements[0].appendChild(bEl);
							
					}
					
			
					
				}else if(productACField.value.trim().length == 0){
					
					
					var bElement = formAddSpanElements[0].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product code cannot be spaces'
						productACField.style.borderColor = '#F00';
						formAddSpanElements[0].appendChild(bEl);
						
					}
					
					
				
					
					
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productACField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formAddSpanElements[0].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formAddSpanElements[0].removeChild(bEl);
							productACField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			
			/***************The code below validates the password field****************************************/
			
			productANField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productANField.value == ''){
					
					var bElement = formAddSpanElements[1].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The product name field must not be empty'
							productANField.style.borderColor = '#F00';
							formAddSpanElements[1].appendChild(bEl);
							
					}
					
			
					
				}else if(productANField.value.trim().length == 0){
					
					
					var bElement = formAddSpanElements[1].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product name cannot be spaces'
						productANField.style.borderColor = '#F00';
						formAddSpanElements[1].appendChild(bEl);
						
					}
					
					
				
					
					
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productANField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formAddSpanElements[1].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formAddSpanElements[1].removeChild(bEl);
							productANField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of product name field onclick event
			
			/***************The code below validates the first name field****************************************/
			
			productAPField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productAPField.value == ''){
					
					var bElement = formAddSpanElements[2].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The product price field must not be empty'
							productAPField.style.borderColor = '#F00';
							formAddSpanElements[2].appendChild(bEl);
							
					}
					
			
					
				}else if(productAPField.value.trim().length == 0){
					
					
					var bElement = formAddSpanElements[2].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product price cannot be spaces'
						productAPField.style.borderColor = '#F00';
						formAddSpanElements[2].appendChild(bEl);
						
					}
					
					
				
					
					
					}else{
						
						
						
						var regExp = /^[0-9]/;
					
							if(regExp.test(productAPField.value.trim()) == false){
								
								
							
								var bElement = formAddSpanElements[2].getElementsByTagName('b')[0];
							
								if(bElement == undefined){
							
									var bEl = createBel();
										bEl.innerHTML = 'Product price should be a number'
										productAPField.style.borderColor = '#F00';
										formAddSpanElements[2].appendChild(bEl);
										
								}
								
							}// End of regular test if else statement
						
						
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productAPField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formAddSpanElements[2].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formAddSpanElements[2].removeChild(bEl);
							productAPField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of product name field onclick event
			
			
			
			/***************The code below validates the last name field****************************************/
			
			productADField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productADField.value == ''){
					
					var bElement = formAddSpanElements[3].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The product description field must not be empty'
							productADField.style.borderColor = '#F00';
							formAddSpanElements[3].appendChild(bEl);
							
					}
					
			
					
				}else if(productADField.value.trim().length == 0){
					
					
					var bElement = formAddSpanElements[3].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product price cannot be spaces'
						productADField.style.borderColor = '#F00';
						formAddSpanElements[3].appendChild(bEl);
						
					}
					
					
				
					
					
					}else if(productADField.value.length < 20){
						
						
						
						
							
								var bElement = formAddSpanElements[3].getElementsByTagName('b')[0];
							
								if(bElement == undefined){
							
									var bEl = createBel();
										bEl.innerHTML = 'Product description should atleast be 20 characters'
										productADField.style.borderColor = '#F00';
										formAddSpanElements[3].appendChild(bEl);
										
								}
								
							
						
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productADField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formAddSpanElements[3].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formAddSpanElements[3].removeChild(bEl);
							productADField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of product name field onclick event
			
			
			
			/*************Below is a global function to the the form, this will be called on each field******/
			
			function createBel(){
				
				
				var bElement = document.createElement('b');
					bElement.style.color = '#F00';
					bElement.style.fontSize = '.9em';
				return bElement;
				
				
			}// End of create b element function
			
	
	
	/*========================Product Addition Validation+============================*/
	
	
	
	
	
	if(_getId('admin-edit-form') != null){
		
		var admin_UpForm =_getId('admin-edit-form'),
			admin_UpFelms = admin_UpForm.elements,
			formSpanElements = admin_UpForm.getElementsByTagName('span');
			productCField = admin_UpForm.product_code,
			productNField =  admin_UpForm.product_name,
			productPField =  admin_UpForm.product_price,
			productDField =  admin_UpForm.product_description,
			
			
			
			/***************The code below validates the mail field****************************************/
			
			productCField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productCField.value == ''){
					
					var bElement = formSpanElements[0].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The code field must not be empty'
							productCField.style.borderColor = '#F00';
							formSpanElements[0].appendChild(bEl);
							
					}
					
			
					
				}else if(productCField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[0].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product code cannot be spaces'
						productCField.style.borderColor = '#F00';
						formSpanElements[0].appendChild(bEl);
						
					}
					
					
				
					
					
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productCField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[0].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[0].removeChild(bEl);
							productCField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of mail field onclick event
			
			
			
			/***************The code below validates the password field****************************************/
			
			productNField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productNField.value == ''){
					
					var bElement = formSpanElements[1].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The product name field must not be empty'
							productNField.style.borderColor = '#F00';
							formSpanElements[1].appendChild(bEl);
							
					}
					
			
					
				}else if(productNField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[1].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product name cannot be spaces'
						productNField.style.borderColor = '#F00';
						formSpanElements[1].appendChild(bEl);
						
					}
					
					
				
					
					
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productNField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[1].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[1].removeChild(bEl);
							productNField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of product name field onclick event
			
			/***************The code below validates the first name field****************************************/
			
			productPField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productPField.value == ''){
					
					var bElement = formSpanElements[2].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The product price field must not be empty'
							productPField.style.borderColor = '#F00';
							formSpanElements[2].appendChild(bEl);
							
					}
					
			
					
				}else if(productPField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[2].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product price cannot be spaces'
						productPField.style.borderColor = '#F00';
						formSpanElements[2].appendChild(bEl);
						
					}
					
					
				
					
					
					}else{
						
						
						
						var regExp = /^[0-9]/;
					
							if(regExp.test(productPField.value) == false){
								
								
							
								var bElement = formSpanElements[2].getElementsByTagName('b')[0];
							
								if(bElement == undefined){
							
									var bEl = createBel();
										bEl.innerHTML = 'Product price should be a number'
										productPField.style.borderColor = '#F00';
										formSpanElements[2].appendChild(bEl);
										
								}
								
							}// End of regular test if else statement
						
						
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productPField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[2].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[2].removeChild(bEl);
							productPField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of product name field onclick event
			
			
			
			/***************The code below validates the last name field****************************************/
			
			productDField.onblur = function(){// Add the oblur event to the field
				
				
				
				if(productDField.value == ''){
					
					var bElement = formSpanElements[3].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
						
						var bEl = createBel();
							bEl.innerHTML = 'The product description field must not be empty'
							productDField.style.borderColor = '#F00';
							formSpanElements[3].appendChild(bEl);
							
					}
					
			
					
				}else if(productDField.value.trim().length == 0){
					
					
					var bElement = formSpanElements[3].getElementsByTagName('b')[0];
					
					if(bElement == undefined){
					
					var bEl = createBel();
						bEl.innerHTML = 'Product price cannot be spaces'
						productDField.style.borderColor = '#F00';
						formSpanElements[3].appendChild(bEl);
						
					}
					
					
				
					
					
					}else if(productDField.value.length < 20){
						
						
						
						
							
								var bElement = formSpanElements[3].getElementsByTagName('b')[0];
							
								if(bElement == undefined){
							
									var bEl = createBel();
										bEl.innerHTML = 'Product description should atleast be 20 characters'
										productDField.style.borderColor = '#F00';
										formSpanElements[3].appendChild(bEl);
										
								}
								
							
						
					}// End of outter if else statment
				
			}// End of product code field onblur event
			
			
			
			
			
			productDField.onclick = function(){// Add the onclic event to the mail field
				
						
						var bEl = formSpanElements[3].getElementsByTagName('b')[0];
						
						
						if(bEl != undefined){
							
							
							formSpanElements[3].removeChild(bEl);
							productDField.style.borderColor = '#0CF';
							
						}
							
						
					
				
				
			}// End of product name field onclick event
			
	}
	

// The product Delete code

	
	
	
	
	function ntsako(){
	
		alert('I run');
		return false;
	
	}
	
	
	/*==============================Admin products form submission=========================*/		
			
			function adminEdit(adminForm){
				
				window.alert('I get a call');
				
				if(adminForm.product_edit != undefined || adminForm.product_edit != null){
					
					
					var alertMessage = _getId('alert-message');
						alertMessage.innerHTML = 'You are about to edit '+adminForm.product_edit_name.value+' product, continue? ';
					adminSubForm = adminForm;
					adminAlertModal.style.display = 'block';
					
					
				}else if(adminForm.product_add != undefined || adminForm.product_add != null){
					
					
					var alertMessage = _getId('alert-message');
						alertMessage.innerHTML = 'You are about to edit add a new product, continue? ';
						adminSubForm = adminForm;
						adminAlertModal.style.display = 'block';
					
					
				}else{
					
					
					var alertMessage = _getId('alert-message');
						alertMessage.innerHTML = 'You are about to delete a product from the shop, continue? ';
						adminSubForm = adminForm;
						adminAlertModal.style.display = 'block';
					
					
				}
				
			
				
				
				return false;
				
				
			}// End of form admin edit validation function
			
			
			
			
			
			
function adminAjax(editForm,editMethod){
	
	
	
	
	var dest = "";
	
	if(editMethod == 'adminEdit'){
	
		dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/admin_edit_product';
		
	}else if(editMethod == 'adminAdd'){
		
		dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/admin_add_product';
		
	}else{
		
		
		dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/admin_del_product';
		
	}
	
	
	var serverDataObj = '';
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',dest,false);
		requestObj.send(new FormData(editForm));
		
	}
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
		
			
			var jsonResponse = JSON.parse(requestObj.responseText);
			
			if(jsonResponse.type == "product update"){
				
				if(jsonResponse.json_type == 'update success'){
					
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
						
						
					
				}else{
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
					
				}
				
				
			}else if(jsonResponse.type == "product addition"){
				
				
				if(jsonResponse.json_type == 'addition success'){
					
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
						
						
					
				}else{
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
					
				}
				
				
			}else if(jsonResponse.type == "product delete"){
				
				
				if(jsonResponse.json_type == 'delete success'){
					
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
						
						
					
				}else{
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
					
				}
				
				
			}
			
			
		}// End of state check
		
	
	
	}// End of response

}// End of remove cart product from cart summary
			
			
}