// JavaScript Document



document.body.onload = function(){
		
		cartCountAjax();
		
	}
	


function _getId(id){
	
	return document.getElementById(id);
	
	
}// End of get element id function


/*=================Confirm Cart Modal==========================*/

var confirmModal = _getId('confirm-cart-update');
	confirmClose = confirmModal.getElementsByClassName('close-confirm')[0],
	confirmUpdate = confirmModal.getElementsByClassName('update-confirm')[0],
	confirmCancel = confirmModal.getElementsByClassName('cancel-confirm')[0];


	confirmClose.onclick = function(){
		
		
		confirmModal.style.display = 'none';
		
	}
	
	confirmUpdate.onclick = function(){
		
		
		productUpdate(savedUpdateForm);
		confirmModal.style.display = 'none';
		
	}
	
	confirmCancel.onclick = function(){
		
		
		confirmModal.style.display = 'none';
		
	}
	
	
/*=================Update Form====================================*/

var savedUpdateForm = '';

function confirmProductUpdate(prodUpdateF){
	
	
	 confirmModal.style.display = 'block';
	 savedUpdateForm = prodUpdateF;
	 
	 return false;
	
	
}



function productUpdate(updateForm){
	
	
	
	
	var updateField = updateForm.update_val.value;
		
	
		
	
	if(updateField == ''){
		
		
		
		var smEl = updateForm.getElementsByTagName('small')[0];
		
		if(smEl == undefined){
			
			var el = createEl();
			var updateIn = updateForm.update_val;
			el.innerHTML = 'value must be a number';
			updateIn.style.borderColor = 'red';
			updateForm.appendChild(el);
			updateInput();
		}
		
		return false;
		
		
	}else if(updateField  < 0){
		
		
		var smEl = updateForm.getElementsByTagName('small')[0];
		
		if(smEl == undefined){
			
			var el = createEl();
			var updateIn = updateForm.update_val;
			el.innerHTML = 'value must not be negative';
			updateIn.style.borderColor = 'red';
			updateForm.appendChild(el);
			updateInput();
			
		}
		
		return false;
		
		
	}else if(updateField > 0 ){
		
		
		updateCartAjax(updateForm);
		
	}else if(updateField == 0){
		
		updateForm.elements[1].setAttribute('name','remove_product');
		updateCartAjax(updateForm);
		return false;
		
	}
	return false;
	
	
	function createEl(){
		
		var el = document.createElement('small');
			el.style.display = 'block';
			el.style.width = 100+'%';
			el.style.color = 'red';
		return el;
		
	}
	
	function updateInput(){
		
		
		
		var updateIn = updateForm.update_val;
		
		updateIn.onclick = function(){
			
			
			var smEl = updateForm.getElementsByTagName('small')[0];
			
			if(smEl != undefined){
				
				updateIn.style.borderColor = '#CCC';
				updateForm.removeChild(smEl);
				
			}
			
			
		}
		
	}
	
}




/*==================Delete Summary Cart product=========================*/


var confirmsumModal = _getId('confirmsum-cart-update');
	confirmsumClose = confirmsumModal.getElementsByClassName('close-confirm')[0],
	confirmsumUpdate = confirmsumModal.getElementsByClassName('update-confirm')[0],
	confirmsumCancel = confirmsumModal.getElementsByClassName('cancel-confirm')[0];


	confirmsumClose.onclick = function(){
		
		
		confirmsumModal.style.display = 'none';
		
	}
	
	confirmsumUpdate.onclick = function(){
		
		
		cartSumRemoveAjax(savedSumForm);
		confirmsumModal.style.display = 'none';
		
	}
	
	confirmsumCancel.onclick = function(){
		
		
		confirmsumModal.style.display = 'none';
		
	}





var savedSumForm = '';


function deleteSumProduct(cartSumForm){
	
	savedSumForm = cartSumForm;
	confirmsumModal.style.display = 'block';
	return false;
	
	
}



// User notify Modal


	var confirmnotifyModal = _getId('confirmnotify-cart-update');
		confirmsumCancel = confirmnotifyModal.getElementsByClassName('cancel-confirm')[0];
	
		
	confirmsumCancel.onclick = function(){
		
		
		var docUrl = document.URL;
		var cartUrl = 'http://localhost/Turtrozz/webApzz/cafeT/public/cart/cart';
			confirmnotifyModal.style.display = 'none';
		
		if(docUrl == cartUrl){
			
			
			location.href = document.URL;
			
		}
		
		
	}



// Cart Summary ajax

function cartSumRemoveAjax(cartRemoveForm){
	
	
	var dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/manipulate_cart';
	
	
	var serverDataObj = '';
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',dest,false);
		requestObj.send(new FormData(cartRemoveForm));
		
	}
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
			
			
			
			responseObj = JSON.parse(requestObj.responseText);
			
			if(responseObj.action == "redirect"){
				
				
				cartCountAjax();
				autoClose();
				confirmnotifyModal.style.display = 'block';
				
				
			}
			
			function autoClose(){
				
				
				var auto = setTimeout(function(){
					
						var computedStyle = document.defaultView.getComputedStyle(confirmnotifyModal,null);
						
						var docUrl = document.URL;
						var cartUrl = 'http://localhost/Turtrozz/webApzz/cafeT/public/cart/cart';
						
						if(computedStyle.display == 'block'){
							
							confirmnotifyModal.style.display = 'none';
							
							if(docUrl == cartUrl){
								
								location.href = document.URL;
							}
							
							
							
							
						}
					
					},5000);
				
			}
			
			
			
		}// End of state check
		
	
	
	}// End of response

}// End of remove cart product from cart summary



var interval = '';
var countDown = 12;
autoInterval = '';
var cartResponseModal = _getId('cart-action-response'),
	closeBut = cartResponseModal.getElementsByClassName('close-cart')[0],
	continueShop = cartResponseModal.getElementsByClassName('continue-shop')[0],
	modalCloseCount = _getId('count-down'),
	cartCount = _getId('cart-count'),
	productImage = _getId('product-image'),
	productName = _getId('product-name'),
	productPrice = _getId('product-price'),
	productQuant = _getId('product-quantity'),
	cartItems = _getId('cart-items'),
	cartTotal = _getId('cart-total'),
	cartVforms = document.getElementsByClassName('mini-view-cart'),
	cartAddForms = document.getElementsByClassName('mini-add-to-cart'),
	cartQuickV = document.getElementsByClassName('quick-view');
	
	
	
	
	
	closeBut.onclick = function(){
		
		
			if(cartResponseModal.style.display == 'block'){
			
			if(interval != ''){
				
				clearTimeout(interval);
			}
			if(autoInterval != ''){
				
				clearInterval(autoInterval);
			}
			
			cartResponseModal.style.display = 'none';
			
		}
		
		
	}// End of onclick event
	
	continueShop.onclick = function(){
		
		if(cartResponseModal.style.display == 'block'){
			
			if(interval != ''){
				
				clearTimeout(interval);
			}
			
			if(autoInterval != ''){
				
				clearInterval(autoInterval);
			}
			cartResponseModal.style.display = 'none';
			
		}
		
	}// End of onclick event
	
	window.onclick = function(event){
		
		
		if(event.target == cartResponseModal){
			
			if(cartResponseModal.style.display == 'block'){
			
			if(interval != ''){
				
				clearTimeout(interval);
			}
			
			if(autoInterval != ''){
				
				clearInterval(autoInterval);
			}
			
			cartResponseModal.style.display = 'none';
			
		}
		
		}
	}// End of onclick event






/*==================Cart Summary Code======================*/


	var cartSumParent = _getId('display-cart'),
		cartSum = _getId('cart-sum');
	
	
		cartSumParent.onmouseover = function(){
			
			
			var response = cartSumPopulate();
				
					
					if(cartSum.innerHTML == ''){
						
						cartSum.className = 'animated fadeIn wow';
						cartSum.appendChild(response);
					}else{
						
						var element = document.getElementById('cart-container');
							cartSum.removeChild(element);
							cartSum.className = 'animated fadeIn wow';
							cartSum.appendChild(response);
							
						
					}
			
		}
	
		
		
		
function cartSumPopulate(){
	
	var destination = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/populate_cart';
	var dataTo = '';
	var serverDataObj = '';
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',destination,false);
		requestObj.send();
		
	}
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
			
			
			
			serverDataObj = JSON.parse(requestObj.responseText);
			
			
			if(serverDataObj[0].prod_none != undefined){
				
					
					var createCont = document.createElement('div');
						createCont.setAttribute('id','cart-container');
					var createEmptyP = document.createElement('p');
						createEmptyP.innerHTML = serverDataObj[1].prod_msg;
						createCont.appendChild(createEmptyP);
						
						dataTo = createCont;
						
					
				
			}else{
			
				dataTo = cartSumContainer();
			
			}
			
			
		}
		
		
		function cartSumContainer(){
			
			
			var cartSumCont = document.createElement('div');
				cartSumCont.setAttribute('id','cart-container');
				
				
				
				for(var prod = 0; prod < serverDataObj.length; prod++){
					
					cartSumCont.appendChild(createCartItemsDiv(prod));
					
				}
				
				cartSumCont.appendChild(createCartViewDiv());
				
				
				return cartSumCont;
				
			
			
		}// End of cart summary content container
		
		/*================ The cart summary cart content Code =======================S */
		
		function createCartItemsDiv(prod){
			
			var cartIelement = document.createElement('div');
				cartIelement.appendChild(createGraphicSec(prod));
				cartIelement.appendChild(createContentSec(prod));
				cartIelement.appendChild(floatsControl());
				
				return cartIelement;
				
			
			
		}// End of create cart Items div
		
		function createGraphicSec(prod){
			
			var graphicSec = document.createElement('section');
				graphicSec.className = 'cart-sum-graphic';
				graphicSec.appendChild(createP());
				
				
				
				function createP(){
					
					var contPara = document.createElement('p');
						contPara.appendChild(createA());
					
					
					function createA(){
						
						var contA = document.createElement('a');
							contA.appendChild(createImg());
						
						function createImg(){
							
							var id = 'thumb';
							var ext = '.jpg';
							var source = '/Turtrozz/webApzz/cafeT/public/imgs/appproducts/p_'+serverDataObj[prod].productID+id+ext;
							
							var contImg = document.createElement('img');
								contImg.setAttribute('src',source);
								
								return contImg;
							
						}// End of create image function
						
						return contA;
						
					}// End of creat anchor element function
					
					
					return contPara;
					
				}// End of create paragraph element
			
			return graphicSec;
			
		}// End of graphic section element
		
		
		
		
		function createContentSec(prod){
			
			
			var createContSec = document.createElement('section');
				createContSec.className = 'cart-sum-content',
				bEls = createBelements();
				
				for(var b = 0; b < bEls.length; b++){
					
					createContSec.appendChild(bEls[b]);
					
				}
			
				
				function createBelements(){
					
					
					var bElements = new Array();
						bElements[bElements.length] = _b1();
						bElements[bElements.length] = _b2();
						bElements[bElements.length] = _b3();
						
						
					
						function _b1(){
							
							
							
							var createB = document.createElement('b');
								createB.appendChild(createB_form());
								
							
							
							function createB_form(){
								
								var createF = document.createElement('form');
									createF.setAttribute('onsubmit','return deleteSumProduct(this)');
								createF.appendChild(input_1());
								createF.appendChild(input_2());
								createF.appendChild(input_3());
								createF.appendChild(input_4());
								
							
								function input_1(){
									
									var createIn_1 = document.createElement('input');
										createIn_1.setAttribute('type','hidden');
										createIn_1.setAttribute('value',serverDataObj[prod].productID);
										
										return createIn_1;
									
								}// End of input 1
								
								function input_2(){
									
									var createIn_2 = document.createElement('input');
										createIn_2.setAttribute('type','hidden');
										createIn_2.setAttribute('name','remove_product');
										createIn_2.setAttribute('value',serverDataObj[prod].productID);
										
										return createIn_2;
									
								}// End of input 1
								
								function input_3(){
									
									var createIn_3 = document.createElement('input');
										createIn_3.setAttribute('type','hidden');
										createIn_3.setAttribute('name','product_id');
										createIn_3.setAttribute('value',serverDataObj[prod].productID);
										
										return createIn_3;
									
								}// End of input 1
								
								
								function input_4(){
									
									var createIn_4 = document.createElement('input');
										createIn_4.setAttribute('type','submit');
										createIn_4.setAttribute('value','x');
										
										return createIn_4;
									
								}// End of input 1
							
							
							
								return createF;
							
							
							
							
							}// End of form element
							
							
							
							return createB;
							
						}// End of first bold element
						
						
						function _b2(){
							
							var createB_2 = document.createElement('b');
								createB_2.appendChild(_A());
								
								function _A(){
									
									var create_A = document.createElement('a');
										create_A.innerHTML = serverDataObj[prod].productName;
									return create_A;
									
								}
								
								
								return createB_2;
							
							
						}// End of first bold element
						
						
						function _b3(){
							
							var createB_3 = document.createElement('b');
								createB_3.innerHTML = serverDataObj[prod].prod_quant+' x '+serverDataObj[prod].listPrice;
								
								
								
								return createB_3;
							
							
						}// End of first bold element
					
					
					
					
					return bElements;
					
					
				}// End of b elements
			
			
			return createContSec;
			
		}// End of cart summary create content section
		
		
		function floatsControl(){
			
			var createStrong = document.createElement('strong');
				createStrong.className = 'clearfix';
				
			
			return createStrong;
		}
		
		/*================ The cart summary cart view Code =======================S */
		
		function createCartViewDiv(){
			
			var cartVelement = document.createElement('div');
				cartVelement.setAttribute('id','cart-view-check-content');
				cartVelement.appendChild(createCartV());
				cartVelement.appendChild(createCartC());
				cartVelement.appendChild(floatsControl());
				
				
				
			
			
			function createCartV(){
				
				var createV = document.createElement('section');
					createV.appendChild(createVform());
				
					function createVform(){
						
						var cartUrl = 'http://localhost/Turtrozz/webApzz/cafeT/public/cart/cart';
						var v_form = document.createElement('form');
							v_form.setAttribute('action',cartUrl);
							v_form.appendChild(input_1());
						
							function input_1(){
									
									var createIn_1 = document.createElement('input');
										createIn_1.setAttribute('type','submit');
										createIn_1.setAttribute('value','Viewcart');
										
										return createIn_1;
									
								}// End of input 1
							
						
						return v_form;
						
						
						
					}
				
				
				return createV;
				
				
			}// End of cart summary cart view section
			
			
			
			
			
			function createCartC(){
				
				var createC = document.createElement('section');
					createC.appendChild(createCform());
				
					function createCform(){
						
						var cartUrl = 'http://localhost/Turtrozz/webApzz/cafeT/public/checkout/checkout';
						var c_form = document.createElement('form');
							c_form.setAttribute('action',cartUrl);
							c_form.appendChild(input_1());
						
							function input_1(){
									
									var createIn_1 = document.createElement('input');
										createIn_1.setAttribute('type','submit');
										createIn_1.setAttribute('value','Checkout');
										
										return createIn_1;
									
								}// End of input 1
							
						
						return c_form;
						
						
						
					}
				
				
				return createC;
				
				
			}// End of cart summary cart checkout section
			
			
			return cartVelement;
			
		}// End of create cart view content element
		
		
	}// End of check if server response
	
	
	return dataTo;
	
	
}// End of populate cart summary function
		
		
		


/*=================Cart Manipulation Code==================*/


function cartView(){
		
		
		for(var f = 0; f < cartVforms.length; f++){
		
			
			cartAddForms[f].style.width = 50+'%';
			cartVforms[f].style.width = 50+'%';
			cartAddForms[f].elements[3].style.width = 80+'%';
			cartAddForms[f].elements[3].style.marginLeft = 10+'%';
			cartVforms[f].elements[1].style.display = 'inline-block';
			cartQuickV[f].style.bottom = 0;
			cartQuickV[f].style.top = 30+'px';
			
				
	
			
		}// End of for loop
		
	}



var url = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/manipulate_cart';

function cartAjax(cartForm){
	
	
	
	
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',url,false);
		requestObj.send(new FormData(cartForm));
		
	}
	
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
			
			
		
			
			
			updateCart();
			parseData();
			cartResponseModal.style.display = 'block';
			setAutoClose();
			countDown();
			cartView();
			
			
			
		}
		
		
		
	}// End of check if server response
	
	
	
	function updateCart(){
		
		
		var productObj = JSON.parse(requestObj.responseText);
		
		if(productObj.productName != undefined){
			
		var cartValue = cartCount.childNodes[0].nodeValue;
			parsedCartValue = parseInt(cartValue);
			
			cartCount.childNodes[0].nodeValue = productObj.numProducts;
			
		}
		
		
	};
	
	
	function parseData(){
		
		var productObject = JSON.parse(requestObj.responseText);
		
		
		imgSource = productImage.setAttribute('src','../../../public/imgs/appproducts/p_'+productObject.productID+'.jpg');
		
		productName.innerHTML = productObject.productName;
		productPrice.innerHTML = productObject.listPrice; 
		productQuant.innerHTML = productObject.productQuant;
		cartTotal.innerHTML = productObject.cartAmount;
		
		if(productObject.numProducts > 1){
			
			cartItems.innerHTML = 'There are '+productObject.numProducts+' items in your cart';
			
		}else{
			
			cartItems.innerHTML = 'There is 1 item in your cart';
			
		}
		
		
			
			
		
		
	}// End of parse data function
	
	
	function setAutoClose(){
		
		interval = setTimeout(function(){
			
			if(cartResponseModal.style.display == 'block'){
				
				cartResponseModal.style.display = 'none';
				clearInterval(autoInterval);
				
			}
			
		},15000);
		
		
	}// End of auto close cart modal
	
	
	function countDown(){
			
			
			countDown = 15;
			modalCloseCount.style.color = '#069';
			modalCloseCount.innerHTML = countDown;
			
			autoInterval = setInterval(function(){
				
				countDown--;
				modalCloseCount.innerHTML = countDown;
				
				
			},1000);
			
			
			
			
		};
		
	
		
		
		
		
	
	return false;
	
	
}// End of ajax cart function


function validateUpdateInput(validateForm){
	
	
	var updateField = validateForm.cart_quant.value;
		
	
		
	
	if(updateField == ''){
		
		
		
		var smEl = validateForm.getElementsByTagName('small')[0];
		
		if(smEl == undefined){
			
			var el = createEl();
			var updateIn = validateForm.cart_quant;
			el.innerHTML = 'value must be a number';
			updateIn.style.borderColor = 'red';
			validateForm.appendChild(el);
			updateInput();
			
		}
		
		return false;
		
		
	}else if(updateField  <= 0){
		
		
		var smEl = validateForm.getElementsByTagName('small')[0];
		
		if(smEl == undefined){
			
			var el = createEl();
			var updateIn = validateForm.cart_quant;
			el.innerHTML = 'value must not be negative or zero';
			updateIn.style.borderColor = 'red';
			validateForm.appendChild(el);
			updateInput();
			
		}
		
		return false;
		
		
	}else if(updateField > 0 ){
		
		
		cartAjax(validateForm);
		return false;
		
	}
	
	
	
	function createEl(){
		
		var el = document.createElement('small');
			el.style.display = 'block';
			el.style.width = 100+'%';
			el.style.color = 'red';
		return el;
		
	}
	
	function updateInput(){
		
		
		
		var updateIn = validateForm.cart_quant;
		
		updateIn.onclick = function(){
			
			
			var smEl = validateForm.getElementsByTagName('small')[0];
			
			if(smEl != undefined){
				
				updateIn.style.borderColor = '#CCC';
				validateForm.removeChild(smEl);
				
			}
			
			
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
	return false;
	
}// End of validate cart detail product input









function cartCountAjax(){
	
	
	var url1 = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/count_cart';
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',url1,false);
		requestObj.send();
		
	}
	
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
			
			var cartTot = parseInt(requestObj.responseText);
			
			if(cartTot > 0){
				
				cartView();
			}
			
			cartCount.innerHTML = requestObj.responseText;
			
			
		}
		
		
		
	}// End of check if server response
	
	
	
	return false;
	
	
}// End of ajax cart function





function updateCartAjax(updateF){
	
	
	
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',url,false);
		requestObj.send(new FormData(updateF));
		
	}
	
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
			
			
			var cartActionObj = JSON.parse(requestObj.responseText);
			
			if(cartActionObj.action == 'redirect'){
				
				location.href = "http://localhost/Turtrozz/webApzz/cafeT/public/cart/cart";
				
			}
			
			
			
		}
		
		
		
	}// End of check if server response
	
	
	return false;
	
	
}