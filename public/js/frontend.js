/*=============== SHOW MENU ===============*/
initializeQuantitiesFromLocalStorage();
calculateProductsQuantity();
updateCartItemsList();
updateCartPage();
orderKitchenCartItemsList();
cart_total_amount();
addProductsToCheckout();

$(document).ready(function () {
   const products = getProductsFromLocalStorage();
   if (products.length === 0) {
      $('#checkout-container').empty();

      $html = ``;
      $html += `<div class="text-start">`;
      $html += `<p class="fs-5">You have no items in your cart, so cannot checkout.</p>`;
      $html += `<a href="/shop" class="btn btn-dark rounded-0">Shop Now</a>`;
      $html += `</div>`;
      $('#checkout-container').html($html);
      $('#checkout-container').removeClass('d-none');
   } else {
      $('#checkout-container').removeClass('d-none');
   }
});
const showMenu = (toggleId, navId) => {
   const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId)

   toggle.addEventListener('click', () => {
      // Add show-menu class to nav menu
      nav.classList.toggle('show-menu')
      // Add show-icon to show and hide menu icon
      toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle', 'nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) => {
   const dropdownButton = item.querySelector('.dropdown__button')

   // 2. Select each button click
   dropdownButton.addEventListener('click', () => {
      // 7. Select the current show-dropdown class
      const showDropdown = document.querySelector('.show-dropdown')

      // 5. Call the toggleItem function
      toggleItem(item)

      // 8. Remove the show-dropdown class from other items
      if (showDropdown && showDropdown !== item) {
         toggleItem(showDropdown)
      }
   })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) => {
   // 3.1. Select each dropdown content
   const dropdownContainer = item.querySelector('.dropdown__container')

   // 6. If the same item contains the show-dropdown class, remove
   if (item.classList.contains('show-dropdown')) {
      dropdownContainer.removeAttribute('style')
      item.classList.remove('show-dropdown')
   } else {
      // 4. Add the maximum height to the dropdown content and add the show-dropdown class
      dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
      item.classList.add('show-dropdown')
   }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
   dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () => {
   // Validate if the media query reaches 1118px
   if (mediaQuery.matches) {
      // Remove the dropdown container height style
      dropdownContainer.forEach((e) => {
         e.removeAttribute('style')
      })

      // Remove the show-dropdown class from dropdown item
      dropdownItems.forEach((e) => {
         e.classList.remove('show-dropdown')
      })
   }
}

addEventListener('resize', removeStyle)


$(document).ready(function () {

   $(document).on('click', '#flatpacked_btn', function (e) {
      e.preventDefault();
      const row = $(e.target).closest('.row-class');
      row.find(`#flatpacked`).removeClass('d-none').addClass('d-block');
      row.find('#rigid').addClass('d-none');
      e.preventDefault();
   })

   $(document).on('click', '#rigid_btn', function (e) {
      const row = $(e.target).closest('.row-class');
      row.find('#rigid').removeClass('d-none').addClass('d-block');
      row.find('#flatpacked').addClass('d-none');
      e.preventDefault();
   });

   $('.collapse-heading').on('click', function () {
      var targetCollapse = $(this).attr('href');

      $('.collapse').not(targetCollapse).collapse('hide');
   });



   // Function to adjust card heights
   function adjustCardHeights() {
      var maxHeight = 0;
      // Loop through each card and find the maximum height
      $('.component-card-content').each(function () {
         var currentHeight = $(this).height();
         if (currentHeight > maxHeight) {
            maxHeight = currentHeight + 20;
         }
      });
      // Set the height of all card bodies to the maximum height
      $('.component-card-body').height(maxHeight);
   }

   // Call the function initially
   if ($(window).width() >= 768) {
      adjustCardHeights();
   } else {
      // Reset card heights to auto if screen size is larger than md
      $('.component-card-body').height('auto');
   }

   // Call the function whenever the window is resized
   $(window).resize(function () {
      // Check if screen size is md or smaller
      if ($(window).width() >= 768) {
         adjustCardHeights();
      } else {
         // Reset card heights to auto if screen size is larger than md
         $('.component-card-body').height('auto');
      }
   });
});




$(document).ready(function () {
   $("#openSidebar").click(function () {
      $("#sidebar").css("right", "0");
   });

   $("#closeSidebar").click(function () {
      $("#sidebar").css("right", "-310px");
   });

   $("#openSidebar-desktop").click(function () {
      $("#sidebar").css("right", "0");
   });

   // Close sidebar when clicking outside of it
   $(document).on("click", function (event) {
      if (!$(event.target).closest("#sidebar, #openSidebar, #openSidebar-desktop").length) {
         $("#sidebar").css("right", "-310px");
      }
   });
})


// $(document).ready(function () {
//    $('.cart-icon').click(function () {
//       $('#cartSidebar').toggleClass('open');
//    });

//    $('#cart-close-icon').click(function () {
//       $('#cartSidebar').removeClass('open');
//    });
// })

$(document).ready(function () {
   var isCartPopupShown = false;

   $("#cart-icon").click(function () {
      if (isCartPopupShown) {
         $("#cartSidebar").css("bottom", "-1000px");
      } else {
         $("#cartSidebar").css("bottom", "0");
      }
      isCartPopupShown = !isCartPopupShown;
   });

   // $("#cart-icon").click(function () {
   //    $("#cartSidebar").css("bottom", "0");
   // });

   $("#cart-close-icon").click(function () {
      $("#cartSidebar").css("bottom", "-1000px");
      isCartPopupShown = false;
   });

   // Close sidebar when clicking outside of it
   $(document).on("click", function (event) {
      if (!$(event.target).closest("#cartSidebar, #cart-icon").length) {
         $("#cartSidebar").css("bottom", "-1000px");
         isCartPopupShown = false;
      }
   });
})

// $(document).ready(function () {
//    $('#searchIcon').click(function () {
//       $('#searchPopup').toggle();
//    });

//    $(document).click(function (event) {
//       if (!$(event.target).closest('.searchPopup') && event.target.id !== 'searchIcon') {
//          $('#searchPopup').hide();
//       }
//    });

//    $('#close-search').click(function () {
//       $('#searchPopup').hide();
//    });

//    $('#searchIcon-desktop').click(function () {
//       $('#searchPopup').toggle();
//    });
// });


// function adjustTopPosition(isShown) {
//    var show = $(window).width() < 430 ? '55px' : '80px';
//    var hide = '100px';

//    $("#searchIcon, #searchIcon-desktop").click(function () {
//       if (isShown) {
//          $("#searchPopup").css("top", "-" + hide);
//       } else {
//          $("#searchPopup").css("top", show);
//       }
//       isShown = !isShown;
//    });

//    $("#closeSidebar, #close-search").click(function () {
//       $("#searchPopup").css("top", "-" + hide);
//    });
// }

$(document).ready(function () {
   var show = $(window).width() < 430 ? '55px' : '80px';
   var hide = '100px';
   var isSearchPopupShown = false;

   $("#searchIcon, #searchIcon-desktop").click(function () {
      if (isSearchPopupShown) {
         $("#searchPopup").css("top", "-" + hide);
      } else {
         $("#searchPopup").css("top", show);
      }
      isSearchPopupShown = !isSearchPopupShown;
   });

   $("#close-search").click(function () {
      $("#searchPopup").css("top", "-" + hide);
      isSearchPopupShown = false;
   });

   // Close sidebar when clicking outside of it
   $(document).on("click", function (event) {
      if (!$(event.target).closest("#searchPopup, #searchIcon, #searchIcon-desktop").length) {
         $("#searchPopup").css("top", "-100px");
         isSearchPopupShown = false;
      }
   });

   // // Call the function initially
   // adjustTopPosition(isSearchPopupShown);

   // // Call the function whenever the window is resized
   // $(window).resize(function () {
   //    adjustTopPosition(isSearchPopupShown);
   // });
})


function initializeQuantitiesFromLocalStorage() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);

   products.forEach(product => {
      const $quantityInput = $('#quantity' + product.id);
      // console.log($quantityInput);
      if ($quantityInput.length > 0) {
         $quantityInput.val(product.quantity);

      }
   });



}

$(document).ready(function () {
   initializeQuantitiesFromLocalStorage();
   updateCartItemsList();
   orderKitchenCartItemsList();
   updateCartPage();
   calculateProductsQuantity();
   addProductsToCheckout();
   cartTotalAmountCalculation();
   cart_total_amount();
});

function cartTotalAmountCalculation() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);

   let totalAmount = 0;
   products.forEach(product => {
      totalAmount += product.quantity * product.price;
   });

   let code = localStorage.getItem('discountCode');

   if (code) {
      $.ajax({
         url: check_code_route,
         type: "POST",
         data: {
            code: code
         },
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         success: function (response) {
            if (response.status === 'success') {
               if (response.result) {
                  var code = response.result.id;
                  var name = response.result.name;
                  var discount = parseFloat(response.result.percent_off);

                  $('#promoCode').val(code);

                  // Save discount code in localStorage
                  localStorage.setItem('discountCode', code);

                  var discountAmount = (totalAmount * discount) / 100;

                  $('#add_discount_details').html(`
                          <div class="row py-2">
                              <div class="col-6">
                                  <h6 class="fw-bold">Discount Percentage</h6>
                              </div>
                              <div class="col-6">
                                  <h6 class="text-end">${discount}%</h6>
                              </div>
                          </div>
                          <div class="row py-2">
                              <div class="col-6">
                                  <h6 class="fw-bold">Discount (${name})</h6>
                              </div>
                              <div class="col-6">
                                  <h6 class="text-end">-£${discountAmount.toFixed(2)}</h6>
                              </div>
                          </div>
                      `);

                  // Update total price after discount
                  var cartTotalAmountWithVAT = totalAmount - discountAmount;
                  $('#cartTotalAmount').text(
                     `£${(totalAmount).toFixed(2)}`);
                  $('#cartTotalAmountWithVAT').text(
                     `£${cartTotalAmountWithVAT.toFixed(2)}`);

               }
            } else {
               localStorage.removeItem('discountCode');
            }
         }
      });
   } else {
      $('#add_discount_details').html('');
      $('#cartTotalAmount').html(`£${(totalAmount).toFixed(2)}`);
      $('#cartTotalAmountWithVAT').html(`£${(totalAmount).toFixed(2)}`);
   }

}

function cart_total_amount() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);

   let totalAmount = 0;
   products.forEach(product => {
      totalAmount += product.quantity * product.price;
   });

   $('#itemsCount').html(`${products.length}`);
   $('#cartTotalAmount_side').html(`£${(totalAmount).toFixed(2)}`);
   $('#cartTotalAmount').html(`£${(totalAmount).toFixed(2)}`);
   $('#cartTotalAmountWithVAT').html(`£${(totalAmount).toFixed(2)}`);
}

function incQty(id) {

   console.log('increase quantity');
   console.log('---------------------------');
   console.log(id);

   const input = document.getElementById('quantity' + id);
   let currentValue = parseInt(input.value) || 0;
   input.value = currentValue + 1;
   totalQuantity++;

}


function decQty(id) {

   console.log('decrease quantity');
   console.log('---------------------------');
   console.log(id);
   const input = document.getElementById('quantity' + id);
   let decBtn = document.getElementById('dec-btn' + id);
   console.log(decBtn);
   let currentValue = parseInt(input.value) || 0;

   if (input.value > 0) {
      input.value = currentValue - 1;
   }

}



function increaseQuantity(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image) {
   console.log('increase quantity');
   console.log('---------------------------');
   var $qtde = $('#quantity' + id);
   var value = parseInt($qtde.val()) || 0;
   // if (value >= 10) {
   //    value = 10;
   //    $qtde.val(value);
   // } else {
   value++;
   // }
   $qtde.val(value);
   $('#minus' + id).prop("disabled", false);
   addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image, value);

}

function increaseQuantityInCartPage(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image) {

   console.log('increase Qty in cart page')
   console.log('---------------------------------------');
   console.log(`product code: ${productCode}, full_title: ${full_title}, price: ${price}, discount_price: ${discount_price}, discountP:${discount_percentage}, p_category: ${p_category}`);
   let products = localStorage.getItem('bko_cart')
   if (!products) {
      products = [];
   } else {
      products = JSON.parse(products)
   }

   const foundProduct = products.find(product => product.id == id);

   let value = foundProduct.quantity ? foundProduct.quantity : 0;
   // if (value >= 10) {
   //    value = 10;
   //    $qtde.val(value);
   // } else {
   value++;
   // }

   addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image, value);
   cartTotalAmountCalculation();
}

function inputQty(qty, id, productCode, full_title, price, discount_price, discount_percentage, p_category, image) {
   console.log("image: ", image);
   console.log('input QTY');
   console.log('---------------------ínput Qty-------------');
   console.log(`input qty: ${qty}`);
   // console.log(`product code: ${productCode}, full_title: ${full_title}, price: ${price}, discount_price: ${discount_price}, discountP:${discount_percentage}, p_category: ${p_category}`);

   qty = parseInt(qty);
   if (qty <= 0 || !qty) {
      removeFromCart(id, productCode);
   }


   // let products = localStorage.getItem('bko_cart');

   // if (!products) {
   //    products = [];
   //    console.log('cart empty in local storage');

   //    products.push({ id: id, productCode: productCode, quantity: value, full_title: full_title, price: price, discount_price: discount_price, discount_percentage: discount_percentage, p_category: p_category,image_path:image});

   //    localStorage.setItem('bko_cart', JSON.stringify(products));
   // } else {
   //    products = JSON.parse(products);
   //    const foundProduct = products.find(product => product.id == id);

   //    // value = foundProduct.quantity ? foundProduct.quantity : 0;
   //    // value=qty;
   //    console.log('updated qty ' +qty);

   // }

   addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image, qty);

   // cartTotalAmountCalculation();

}
// function decreaseQuantity(id, productCode, full_title, price, discount_price, discount_percentage, p_category) {
function decreaseQuantity(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image) {
   var $qtde = $('#quantity' + id);
   var value = parseInt($qtde.val()) || 0;
   if (value > 0) {
      value--;
      $qtde.val(value);
      if (value === 0) {
         $('#minus' + id).prop("disabled", true);
         removeFromCart(id, productCode);
      } else {
         // addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, value);
         addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image, value);
      }
   }
}

// function decreaseQuantityInCartPage(id, productCode, full_title, price, discount_price, discount_percentage, p_category) {
function decreaseQuantityInCartPage(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image) {
   let products = localStorage.getItem('bko_cart')
   if (!products) {
      products = [];
   } else {
      products = JSON.parse(products)
   }

   const foundProduct = products.find(product => product.productCode == productCode);
   let value = foundProduct.quantity ? foundProduct.quantity : 0;

   if (value > 0) {
      value--;
      if (value === 0) {
         removeFromCart(id, productCode);
      } else {
         // addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, value);
         addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image, value);
      }
   }
   cartTotalAmountCalculation();
}

function addToCart(id, productCode, full_title, price, discount_price, discount_percentage, p_category, image, value) {
   console.log('add to cart');
   console.log('---------------------');
   console.log(`image: ${image}, product code: ${productCode}, full_title: ${full_title}, price: ${price}, discount_price: ${discount_price}, discountP:${discount_percentage}, p_category: ${p_category}, value: ${value}`);
   let products = localStorage.getItem('bko_cart');
   console.log("stored in local storage: " + products);

   if (!products) {
      products = [];
   } else {
      products = JSON.parse(products);

   }

   const foundProductIndex = products.findIndex(product => product.productCode == productCode);

   if (foundProductIndex === -1 && value > 0) {
      products.push({ id: id, productCode: productCode, quantity: value, full_title: full_title, price: price, discount_price: discount_price, discount_percentage: discount_percentage, p_category: p_category, image_path: image });

   } else if (value > 0) {
      products[foundProductIndex].quantity = value;
   }
   console.log('before storing local storage products: ', products);
   localStorage.setItem('bko_cart', JSON.stringify(products));
   updateCartItemsList();
   updateCartPage();
   orderKitchenCartItemsList();
   calculateProductsQuantity();
   cart_total_amount();

   // $('#calculateProductsQuantity').html(totalQty);
   // $('#calculateProductsQuantity2').html(totalQty);
   // $('#calculateProductsQuantityBottom').html(totalQty);
}

function removeFromCart(id, productCode) {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);

   const foundProductIndex = products.findIndex(product => product.productCode == productCode);

   if (foundProductIndex !== -1) {
      products.splice(foundProductIndex, 1);
      localStorage.setItem('bko_cart', JSON.stringify(products));
   }

   // after removing make the quantity fields 0
   var $qtde = $('#quantity' + id);
   var value = parseInt($qtde.val()) || 0;
   if (value > 0) {
      value = 0;
      $qtde.val(value);
   }

   updateCartItemsList();
   updateCartPage();
   orderKitchenCartItemsList();
   calculateProductsQuantity();
   cart_total_amount();
}

function updateCartItemsList() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);

   const $cartItemsList = $('#cartItemsList');
   $cartItemsList.empty();

   products.forEach(product => {
      $cartItemsList.append(`
         <div class="mini-cart-item clearfix">
            <div class="mini-cart-img">
               <a href="#"><img src="https://bkonline.uk/public/imgs/products/${product.image_path}" alt="Image"></a>
               <span class="mini-cart-item-delete"><i class="icon-cancel" onclick="removeFromCart(${product.id}, '${product.productCode}')"></i></span>
            </div>
            <div class="mini-cart-info">
               <h6><a href="#">(${product.quantity}) X ${product.full_title}</a></h6>
            </div>
         </div>
      `);
   });
}

function orderKitchenCartItemsList() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);

   const $cartItemsList = $('#orderKitchenCartItemsList');
   $cartItemsList.empty();

   products.forEach(product => {
      // $cartItemsList.append(`<div class="col-12"><p class="text-black fw-bold m-0"><i class="ri-btn ri-delete-bin-line" onclick="removeFromCart(${product.id}, '${product.productCode}')" ></i>&nbsp; <small class="fw-normal">${product.quantity} x ${product.full_title}</small></p></div>`);

      // $cartItemsList.append(`<li class="text-black fw-bold  list-group-item"><i class="ri-btn ri-delete-bin-line" onclick="removeFromCart(${product.id}, '${product.productCode}')" ></i>&nbsp; <small class="fw-normal">(${product.quantity}) x ${product.full_title}</small></li>`);
      $cartItemsList.append(`
         <li>
            <div class="top-rated-product-item clearfix">
                  <div class="top-rated-product-img">
                     <a href="#"><img src="https://bkonline.uk/public/imgs/products/${product.image_path}" class="border border-default" alt="#"></a>
                  </div>
                  <div class="top-rated-product-info">
                     <h6><a href="#">(${product.quantity}) x ${product.full_title}</a></h6>
                     <div class="product-price">
                        <h5 class="fw-bold">£${product.price}</h5>
                     </div>
                  </div>
            </div>
         </li>
      `);

   });
}
function clearShoppingCart() {
   localStorage.removeItem('bko_cart');
   const $cartContainer = $('#cartContainer');
   $cartContainer.empty();

   const $emptyCart = $('#emptyCart');
   $emptyCart.html(`You have no items in your cart, so you cannot checkout.`);
   // const $cartTableBody = $('#productCartTableBody');
   // $cartTableBody.empty();
   // $cartTableBody.html(`
   //     <td colspan="5" class="text-center py-5">No items in cart</td>
   //    `);


   // const $orderSummaryCard = $('#orderSummaryCard');
   // $orderSummaryCard.empty();

   // $orderSummaryCard.html(`

   //    <div class="card-header bg-white">
   //                      <h5 class="mb-0 fw-bold text-primary">ORDER SUMMARY</h5>
   //                  </div>
   //                  <div class="card-body">
   //                      <div class="d-flex justify-content-between mb-2">
   //                          <span>Items</span>
   //                          <span id="itemsCount">0</span>
   //                      </div>
   //                      <div class="d-flex justify-content-between mb-2">
   //                          <span>Sub Total</span>
   //                          <span id="cartTotalAmount">£0</span>
   //                      </div>

   //                      <hr>
   //                      <div class="d-flex justify-content-between fw-bold">
   //                          <span>Total</span>
   //                          <span id="cartTotalAmountWithVAT">£0</span>
   //                      </div>
   //                  </div>
   //    `);

}

$(document).ready(function () {
   // Button par click hone par function call karen
   $('#clearShoppingCart').click(function () {
      clearShoppingCart();
   });
});

function updateCartPage() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return;
   }

   products = JSON.parse(products);
   console.log('update card page');
   console.log('---------------------------------------------');
   console.log("products stored: ", products);

   const $cartTableBody = $('#productCartTableBody');
   $cartTableBody.empty();

   var cartTableHtml = ``;
   products.forEach(product => {
      cartTableHtml += `
      <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                            <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">
                                                Sample Product Name
                                            </a></h4>
                                        </td>
                                        <td class="cart-product-price">00.00</td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal">00.00</td>
                                    </tr>
      `;
//       cartTableHtml += `
//                             <tr class="border-bottom" >
//                             <td class="py-3">
//                                 <div class="d-flex align-items-center">
//                                     <div class="me-3">
//                                         <span class="remove-btn" onClick="removeFromCart('${product.id}', '${product.productCode}')">&times;</span>
//                                     </div>
//                                     <div class="me-3">
//                                         <img src="https://bkonline.uk/public/imgs/products/${product.image_path}" alt="Kitchen" class="product-image img-fluid border border-primary" style="max-width: 70px; height: auto; object-fit: cover;">
//                                     </div>
//                                     <div>
//                                         <h5 class="mb-1 fw-bold">${product.full_title}</h5>
//                                         <a href="javascript:void(0)" data-productId="${product.id}" class="openCompareModel text-decoration-underline text-danger" style="font-size: 12px;" data-toggle="modal" data-target="#myModal">Compare</a>&nbsp;&nbsp;<a href="javascript:void(0)" data-productId="${product.id}" class="openChangeStyleModal text-decoration-underline text-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#cart-items-modal" data-product-id="${product.id}">Change Style</a>
//                                     </div>
//                                 </div>
//                             </td>
//                             <td class="py-3 text-center align-middle" style="min-width: 50px;">£${(product.price).toFixed(2)}</td>
//                             <td class="py-3 px-3 text-center align-middle">
//                              <div class="d-flex flex-lg-row flex-column align-items-center border border-dark justify-content-center " style="max-width: 200px; width: 100%;">
//     <button class="border-0 btn btn-quantity" onClick="decreaseQuantityInCartPage('${product.id}', '${product.productCode}')">-</button>
//     <input type="text" class="border-0 form-control text-center mx-2 flex-grow-1" value="${product.quantity}" oninput="inputQty(this.value, '${product.id}', '${product.productCode}')">
//     <button class="border-0 btn btn-quantity" onClick="increaseQuantityInCartPage('${product.id}', '${product.productCode}')">+</button>
// </div>

//                             </td>
//                             <td class="py-3 text-end pe-4 align-middle">£${(product.quantity * product.price).toFixed(2)}</td>
//      </tr>
//       `;
      //  <p class="text-muted mb-0">Color: gray | Assembly: Rigid</p>
      // cartTableHtml += `<tr>`;
      // cartTableHtml += `<td>`;
      // cartTableHtml += `<i class='fas fa-times' onclick="decreaseQuantityInCartPage('${product.id}', '${product.productCode}', '${product.full_title}', ${product.price}, ${product.discount_price}, ${product.discount_percentage}, '${product.p_category}')"></i>`;
      // cartTableHtml += `<i class='ri-btn ri-add-line' ${product.price == 0 ? 'disabled' : ''} onclick="increaseQuantityInCartPage('${product.id}', '${product.productCode}', '${product.full_title}', ${product.price}, ${product.discount_price}, ${product.discount_percentage}, '${product.p_category}')"></i>`;
      // cartTableHtml += `<i class='ri-btn ri-delete-bin-line' onclick="removeFromCart(${product.id}, '${product.productCode}')"></i>`;
      // cartTableHtml += `</td>`;
      // cartTableHtml += `<td><figure><img class="product-image px-0 mx-2 img-fluid" src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="Product Image" style="height: 50px; width: 50px; object-fit: cover;"></figure>${product.full_title}&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" data-productId="${product.id}" class="openCompareModel text-decoration-underline text-danger" style="font-size: 12px;" data-toggle="modal" data-target="#myModal">Compare</a>&nbsp;&nbsp;<a href="javascript:void(0)" data-productId="${product.id}" class="openChangeStyleModal text-decoration-underline text-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#cart-items-modal" data-product-id="${product.id}">Change Style</a></td>`;
      // cartTableHtml += `<td>£${(product.price).toFixed(2)}</td>`;
      // cartTableHtml += `<td>${product.quantity}</td>`;
      // cartTableHtml += `<td class='text-end'>£${(product.quantity * product.price).toFixed(2)}</td>`;
      // cartTableHtml += `</tr>`;

      $cartTableBody.html(cartTableHtml);
   });

   // products.forEach(product => {
   //    cartTableHtml += `<tr>`;
   //    // Remove/X button column
   //    cartTableHtml += `<td class="align-middle text-center" style="width: 40px;">`;
   //    cartTableHtml += `<span class="text-secondary fw-bold cursor-pointer" style="font-size: 18px; cursor: pointer;" onclick="removeFromCart(${product.id}, '${product.productCode}')">×</span>`;
   //    cartTableHtml += `</td>`;

   //    // Product column with image and details
   //    cartTableHtml += `<td class="align-middle">`;
   //    cartTableHtml += `<div class="d-flex bg-danger justify-content-start align-items-center">`;
   //    cartTableHtml += `<div class="product-image me-3" style="width: 80px; min-width: 80px;">`;
   //    cartTableHtml += `<img src="https://bkonline.uk/public/imgs/products/Highline-Base1727814394_66fc5afa31d81.jpg" alt="Product Image" style="width: 100%; height: auto; object-fit: contain;">`;
   //    cartTableHtml += `</div>`;
   //    cartTableHtml += `<div>`;
   //    cartTableHtml += `<p class="mb-1 fw-medium">${product.full_title}</p>`;
   //    cartTableHtml += `<p class="text-muted mb-1 small">Color not specified</p>`;
   //    cartTableHtml += `<div class="mt-1">`;
   //    cartTableHtml += `<a href="javascript:void(0)" data-productId="${product.id}" class="compare-link text-danger me-2" style="font-size: 12px;">Compare</a>`;
   //    cartTableHtml += `<a href="javascript:void(0)" data-productId="${product.id}" class="change-style-link text-primary" style="font-size: 12px;">Change Style</a>`;
   //    cartTableHtml += `</div>`;
   //    cartTableHtml += `</div>`;
   //    cartTableHtml += `</div>`;
   //    cartTableHtml += `</td>`;

   //    // Price column
   //    cartTableHtml += `<td class="align-middle text-start" style="width: 100px;">£${(product.price).toFixed(2)}</td>`;

   //    // Quantity column with +/- buttons
   //    cartTableHtml += `<td class="align-middle" style="width: 120px;">`;
   //    cartTableHtml += `<div class="d-flex border rounded">`;
   //    cartTableHtml += `<button class="btn btn-sm border-0 px-2" style="background: none;" onclick="decreaseQuantityInCartPage('${product.id}', '${product.productCode}', '${product.full_title}', ${product.price}, ${product.discount_price}, ${product.discount_percentage}, '${product.p_category}')">-</button>`;
   //    cartTableHtml += `<input type="text" class="form-control border-0 text-center p-0" value="${product.quantity}" style="width: 40px; min-width: 40px;">`;
   //    cartTableHtml += `<button class="btn btn-sm border-0 px-2" style="background: none;" onclick="increaseQuantityInCartPage('${product.id}', '${product.productCode}', '${product.full_title}', ${product.price}, ${product.discount_price}, ${product.discount_percentage}, '${product.p_category}')">+</button>`;
   //    cartTableHtml += `</div>`;
   //    cartTableHtml += `</td>`;

   //    // Subtotal column
   //    cartTableHtml += `<td class='align-middle text-end' style="width: 100px;">£${(product.quantity * product.price).toFixed(2)}</td>`;
   //    cartTableHtml += `</tr>`;
   // });
   console.log('cart table html', cartTableHtml);
   $cartTableBody.html(cartTableHtml);
}

function createProductCard(product, type, cart_product_id = null, cart_product_code = null) {
   var productCard = `<div class="${type === 'left' ? 'col-lg-12' : 'col-lg-6'} mb-3">`;
   productCard += `<div class="card">`;
   productCard += `<div class="card-body text-center">`;
   productCard += `<div class="container-fluid">`;
   productCard += `<div class="row">`;
   productCard += `<div class="col-lg-6">`;
   productCard += `<figure><img class="product-image px-0" style=""  src="${product.image_path ? product_BIU + '/' + product.image_path : product_BIU + '/images/no-image-available.jpg'}" alt="${product.full_title}" style="height: 120px;object-fit: cover;"></figure>`;
   productCard += `</div>`;
   productCard += `<div class="col-lg-6">`;
   productCard += `<div class="text-start">`;
   productCard += `<a href="${APP_URL + '/shop/by-product/' + product.slug + '/' + product.serial_number}" class="text-start text-decoration-underline fs-5 fw-bold">${product.short_title}</a>`;
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `<div class="col-12">`;
   productCard += `<div class="container-fluid">`;
   productCard += `<div class="row justify-content-center">`;
   if (type === 'left') {
      productCard += `<div class="col-12">`;
      productCard += `<p class="fs-5 fw-bold mt-lg-2">£${product.price}</p>`;
      productCard += `</div>`;
   } else {
      productCard += `<div class="col-6">`;
      productCard += `<button class="btn btn-dark rounded-0" id="replaceProduct" onclick="replaceProduct('${product.id}', '${product.product_code}', '${product.full_title}', ${product.price}, ${product.discounted_price}, ${product.discounted_percentage}, '${product.parent_category.slug}', ${cart_product_id}, '${cart_product_code}')">Replace</button>`;
      productCard += `</div>`;
      productCard += `<div class="col-6">`;
      productCard += `<p class="fs-5 fw-bold mt-lg-2">£${product.price}</p>`;
      productCard += `</div>`;
   }
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `<div class="container-fluid">`;
   if (product.style) {
      productCard += `<div class="row">`;
      productCard += `<div class="col-4 p-0 d-md-flex d-none">`;
      productCard += `<p class="category-text text-start text-uppercase m-0 pt-1"><small>Style</small></p>`;
      productCard += `</div>`;
      productCard += `<div class="col-md-8 col-sm-12 p-0 text-center">`;
      productCard += `<p class="category-value fw-semibold py-1 mb-2"><small>${product.style.name}</small></p>`;
      productCard += `</div>`;
      productCard += `</div>`;
   }
   if (product.colour) {
      productCard += `<div class="row">`;
      productCard += `<div class="col-4 p-0 d-md-flex d-none">`;
      productCard += `<p class="category-text text-start text-uppercase m-0 pt-1"><small>Colour</small></p>`;
      productCard += `</div>`;
      productCard += `<div class="col-md-8 col-sm-12 p-0 text-center">`;
      productCard += `<p class="category-value fw-semibold py-1 mb-2"><small>${product.colour.trade_colour ? product.colour.trade_colour : product.colour.name}</small></p>`;
      productCard += `</div>`;
      productCard += `</div>`;
   }
   if (product.assembly) {
      productCard += `<div class="row">`;
      productCard += `<div class="col-4 p-0 d-md-flex d-none">`;
      productCard += `<p class="category-text text-start text-uppercase m-0 pt-1"><small>Assembly</small></p>`;
      productCard += `</div>`;
      productCard += `<div class="col-md-8 col-sm-12 p-0 text-center">`;
      productCard += `<p class="category-value fw-semibold py-1 mb-2"><small>${product.assembly.name}</small></p>`;
      productCard += `</div>`;
      productCard += `</div>`;
   }
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `</div>`;
   productCard += `</div>`;
   return productCard;
}

$(document).ready(function () {
   $(document).on("click", ".openCompareModel", function (e) {
      e.preventDefault();
      var productId = $(this).data('productid');

      console.log(productId)

      $.ajax({
         url: compare_route,
         method: 'POST',
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         data: {
            productId: productId,
         },
         success: function (response) {
            if (response.status === 'success') {
               var products = response.products;
               var initial_product = response.product;
               var compareProducts = $('#compareProducts');
               var cart_Product = $('#cart_Product');

               compareProducts.empty();
               cart_Product.empty();

               var productCardHtml = createProductCard(initial_product, 'left');
               cart_Product.append(productCardHtml);

               // Loop through each product and generate the product card
               if (products.length === 0) {
                  compareProducts.append('<p>No products to compare</p>');
               } else {
                  products.forEach(function (product) {
                     var productCardHtml = createProductCard(product, 'right', initial_product.id, initial_product.product_code);
                     compareProducts.append(productCardHtml);
                  });
               }
               $('#myModal').modal('show');
            }
         },
         error: function (xhr, status, error) {
            // Handle the error response
         }
      });
   });

   // Event delegation for hiding modal
   $(document).on("click", ".hideCompareModel", function (e) {
      e.preventDefault();
      $('#myModal').modal('hide');
   });

   $(document).on("click", ".openChangeStyleModal", function (e) {
      e.preventDefault();
      var _this = $(this);
      var productId = _this.data('product-id');
      var parentCategoryId = _this.data('parent-category-id');
      var productQty = _this.data('product-qty');
      var _URL = "/get-category-products";
      var _html = '';

      $.ajax({
         url: _URL,
         type: "POST",
         data: {
            product_id: productId,
         },
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         success: function (response) {
            if (response.status === 'success') {
               if (response.products.length > 0) {
                  const $cartTableBody = $('#changeStyleTableBody');
                  $cartTableBody.empty();

                  var cartTableHtml = ``;
                  var productDetails = response.product_details;
                  var _baseURL = response.base_url;

                  cartTableHtml += `
                     <div class="col-lg-12 col-md-12 col-sm-12 order-sm-1 order-xs-1">
                        <select class="form-control order-component-dropdown select-2 fw-bold" data-dropdown-type="base-cabinets-section">`;

                  response.products.forEach(product => {
                     cartTableHtml += `<option class="fw-bold" 
                                    value="${product.id}" 
                                    data-product-short-title="${product.short_title}" 
                                    data-product-fullname="${product.full_title}" 
                                    data-product-image="${product.image_path ? `${_baseURL}imgs/products/${product.image_path}` : `${_baseURL}images/no-image-available.jpg`}" 
                                    data-product-price="${product.price}" 
                                    data-product-parent-category-slug="${product.ParentCategory?.slug || ''}" 
                                    data-product-discountedprice="${product.discounted_price}" 
                                    data-product-assembly-name="${product.assembly?.name || ''}" 
                                    data-product-discountedpercentage="${product.discounted_percentage || 0}" 
                                    data-product-code="${product.product_code}" 
                                    data-product-dimensions="${product.dimensions}" 
                                    data-product-style="${product.style?.name || ''}" 
                                    data-product-colour="${product.colour?.trade_colour || product.colour?.name || ''}" 
                                    data-product-id="${product.id}">
                                       ${product.full_title} &nbsp;&nbsp;(£${product.price})
                                 </option>`;
                  });

                  cartTableHtml += `</select>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 base-cabinets-section order-sm-2 order-xs-2 mt-4">
                        <div class="card bg-light p-0 border border-warning" style="border-radius: 0; border: none">
                           <div class="bg-warning card-header px-0 py-0">
                                 <div class="py-2 text-center product-short-title-container w-100">
                                    <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                                       ${productDetails.short_title}
                                    </a>
                                 </div>
                           </div>
                           <div class="card-body text-center">
                                 <div class="container-fluid">
                                    <div class="row">
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 p-0">
                                             <figure class="my-0" style="margin-bottom: 0px !important;">
                                                <img class="product-image px-0" style="height: 200px !important"  style="margin-bottom: 0px !important; object-fit:contain" 
                                                   src="${productDetails.image_path ? `${_baseURL}imgs/products/${productDetails.image_path}` : `${_baseURL}images/no-image-available.jpg`}"
                                                   alt="Card image cap">
                                             </figure>
                                       </div>
                                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 border border-default">
                                             <div class="container-fluid">
                                                <div class="row">
                                                   <div class="col-4 p-0 d-md-flex d-none">
                                                         <p class="category-text text-start text-dark text-uppercase m-0 pt-1"><small class="fw-bold">Product Code</small></p>
                                                   </div>
                                                   <div class="col-md-8 col-sm-12 p-0 text-center">
                                                         <p class="category-value fw-semibold py-1 mb-2 text-dark"><small>${productDetails.product_code}</small></p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-4 p-0 d-md-flex d-none">
                                                         <p class="category-text text-start text-dark text-uppercase m-0 pt-1"><small class="fw-bold">Dimensions</small></p>
                                                   </div>
                                                   <div class="col-md-8 col-sm-12 p-0 text-center">
                                                         <p class="category-value fw-semibold py-1 mb-2 text-dark"><small>${(productDetails.dimensions != null) ? productDetails.dimensions : ''}</small></p>
                                                   </div>
                                                </div>
                                                ${productDetails.style ? `<div class="row">
                                                   <div class="col-4 p-0 d-md-flex d-none"><p class="category-text text-start text-dark text-uppercase m-0 pt-1"><small class="fw-bold">Style</small></p></div>
                                                   <div class="col-md-8 col-sm-12 p-0 text-center"><p class="category-value fw-semibold py-1 mb-2 text-dark"><small>${productDetails.style.name}</small></p></div>
                                                </div>` : ''}
                                                ${productDetails.colour ? `<div class="row">
                                                   <div class="col-4 p-0 d-md-flex d-none"><p class="category-text text-start text-dark text-uppercase m-0 pt-1"><small class="fw-bold">Colour</small></p></div>
                                                   <div class="col-md-8 col-sm-12 p-0 text-center"><p class="category-value fw-semibold py-1 mb-2 text-dark"><small>${productDetails.colour.trade_colour || productDetails.colour.name}</small></p></div>
                                                </div>` : ''}
                                                ${productDetails.assembly ? `<div class="row">
                                                   <div class="col-4 p-0 d-md-flex d-none"><p class="category-text text-start text-dark text-uppercase m-0 pt-1"><small class="fw-bold">Assembly</small></p></div>
                                                   <div class="col-md-8 col-sm-12 p-0 text-center"><p class="category-value fw-semibold py-1 mb-2 text-dark"><small>${productDetails.assembly.name}</small></p></div>
                                                </div>` : ''}
                                             </div>
                                             <div class="row justify-content-center border-top border-default">
                                                <div class="col-12">
                                                   <p class="fs-5 fw-bold text-dark">
                                                         ${productDetails.price == 0 ? 'Out of Stock' : '£' + productDetails.price}
                                                   </p>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center product-counter">
                                                   <input id="minus${productDetails.id}" class="minus border bg-dark text-light p-0" type="button" value="-"
                                                         onclick="decreaseQuantity('${productDetails.id}', '${productDetails.product_code}', '${productDetails.full_title}', ${productDetails.price}, ${productDetails.discounted_price}, ${productDetails.discounted_percentage || 0}, '${productDetails.ParentCategory?.slug || ''}')" />
                                                   <input id="quantity${productDetails.id}" class="quantity border border-black text-center" type="text" value="0" name="quantity" disabled />
                                                   <input ${productDetails.price == 0 ? 'disabled' : ''} id="plus${productDetails.id}" class="plus border bg-dark text-light p-0" type="button" value="+" max="10"
                                                         onclick="increaseQuantity('${productDetails.id}', '${productDetails.product_code}', '${productDetails.full_title}', ${productDetails.price}, ${productDetails.discounted_price}, ${productDetails.discounted_percentage || 0}, '${productDetails.ParentCategory?.slug || ''}')" />
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  `;




                  // cartTableHtml += `<tr>`;
                  // cartTableHtml += `<td>`;
                  // cartTableHtml += `<select class="form-control">`;
                  // response.products.forEach(product => {
                  //    // cartTableHtml += `<td>`;
                  //    // cartTableHtml += `<i class='ri-btn ri-subtract-line' onclick="decreaseQuantityInCartPage('${product.id}', '${product.productCode}', '${product.full_title}', ${product.price}, ${product.discount_price}, ${product.discount_percentage}, '${product.p_category}')"></i>`;
                  //    // cartTableHtml += `<i class='ri-btn ri-add-line' onclick="increaseQuantityInCartPage('${product.id}', '${product.productCode}', '${product.full_title}', ${product.price}, ${product.discount_price}, ${product.discount_percentage}, '${product.p_category}')"></i>`;
                  //    // cartTableHtml += `<i class='ri-btn ri-delete-bin-line' onclick="removeFromCart(${product.id}, '${product.productCode}')"></i>`;
                  //    // cartTableHtml += `</td>`;
                  //    cartTableHtml += `<option>${product.full_title}&nbsp;&nbsp; (£${product.price})</option>`;
                  //    // cartTableHtml += `<td>£${product.price}</td>`;
                  //    // cartTableHtml += `<td>${product.quantity}</td>`;
                  //    // cartTableHtml += `<td class='text-end'>£${product.quantity * product.price}</td>`;
                  // });
                  // cartTableHtml += `</select>`;
                  // cartTableHtml += `</td>`;
                  // cartTableHtml += `<td>£</td>`;
                  // cartTableHtml += `<td></td>`;
                  // cartTableHtml += `</tr>`;

                  $cartTableBody.html(cartTableHtml);
               }
            }
         }
      });
   });

});

function replaceProduct(id, productCode, full_title, price, discount_price, discount_percentage, p_category, cart_product_id, cart_product_code) {
   console.log(id, productCode, full_title, price, discount_price, discount_percentage, p_category, cart_product_id, cart_product_code);
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      products = [];
   } else {
      products = JSON.parse(products)
   }

   const foundProductIndex = products.findIndex(product => product.id == cart_product_id);
   if (foundProductIndex !== -1) {
      const quantity = products[foundProductIndex].quantity;
      products.splice(foundProductIndex, 1);
      console.log(products)
      if (quantity >= 0) {
         products.push({ id: id, productCode: productCode, quantity: quantity, full_title: full_title, price: price, discount_price: discount_price, discount_percentage: discount_percentage, p_category: p_category });
         localStorage.setItem('bko_cart', JSON.stringify(products));
      }
   }

   updateCartItemsList();
   updateCartPage();
   orderKitchenCartItemsList();
   calculateProductsQuantity();
   cartTotalAmountCalculation();
   cart_total_amount();

   $('#myModal').modal('hide');
}
// let totalQuantity = 0;

function calculateProductsQuantity() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return 0;
   }

   products = JSON.parse(products);


   // totalQuantity = products.length; // Add this line to calculate the total quantity of products


   let totalQty;
   let totalPrice;
   totalQty = products.reduce((total, product) => {
      return total + product.quantity;
   }, 0);
   totalPrice = products.reduce((total, product) => {
      return total + (product.quantity * product.price);
   }, 0);
   console.log("total Qty: " + totalQty);

   $('#calculateProductsQuantity').html(totalQty);
   $('#calculateProductsQuantity2').html(totalQty);
   $('.calculateProductsQuantityBottom').html(totalQty);
   $('.calculateProductsPriceBottom').html(totalPrice.toFixed(2));
}

function getProductsFromLocalStorage() {
   let products = localStorage.getItem('bko_cart');
   if (!products) {
      return [];
   }
   return JSON.parse(products);
}

function addProductsToCheckout() {
   const products = getProductsFromLocalStorage();
   const itemsForCheckout = document.getElementById('items_for_checkout');

   if (!itemsForCheckout) {
      return;
   }

   itemsForCheckout.innerHTML = '';

   // const inputId = document.createElement('input');
   // inputId.type = 'hidden';
   // inputId.name = `products`;
   // inputId.value = products;
   // itemsForCheckout.appendChild(inputId);

   products.forEach((product, index) => {
      const inputId = document.createElement('input');
      inputId.type = 'hidden';
      inputId.name = `items[${index}][id]`;
      inputId.value = product.id;

      const inputQuantity = document.createElement('input');
      inputQuantity.type = 'hidden';
      inputQuantity.name = `items[${index}][quantity]`;
      inputQuantity.value = product.quantity;

      itemsForCheckout.appendChild(inputId);
      itemsForCheckout.appendChild(inputQuantity);
   });
}

function isValidEmail(email) {
   // Regular expression to validate email address
   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   return emailRegex.test(email);
}

$(document).ready(function () {
   // Function to check if all required inputs are filled within nav-checkout1 section
   let next1Clicked = false;
   let next2Clicked = false;
   let next3Clicked = false;
   function validateInputs(num) {
      var isValid = true;

      if (num === 1) {
         // Iterate over each required input within nav-checkout1 section
         $('#nav-checkout1 input[required]').each(function () {
            // If input is empty, add error message and mark it as invalid
            if (!$(this).val()) {
               $(this).addClass('is-invalid');
               $(this).siblings('.error-message').remove();
               const errorMessage = '<div class="error-message mt-1"><small class="text-danger">This field is required.</small></div>';
               const existingErrorMessage = $(this).siblings('.error-message');
               if (existingErrorMessage.length > 0) {
                  existingErrorMessage.replaceWith(errorMessage);
               } else {
                  $(this).after(errorMessage);
               }
               isValid = false;
            } else if ($(this).attr('type') === 'email' && !isValidEmail($(this).val())) {
               $(this).addClass('is-invalid');
               $(this).siblings('.error-message').remove();
               const errorMessage = '<div class="error-message mt-1"><small class="text-danger">Please enter a valid email address.</small></div>';
               const existingErrorMessage = $(this).siblings('.error-message');
               if (existingErrorMessage.length > 0) {
                  existingErrorMessage.replaceWith(errorMessage);
               } else {
                  $(this).after(errorMessage);
               }
               isValid = false;
            }
         });
      } else if (num === 2) {
         // Iterate over each required input within nav-checkout2 section
         $('#nav-checkout2 input[required]').each(function () {
            // If input is empty, add error message and mark it as invalid
            if (!$(this).val()) {
               $(this).addClass('is-invalid');
               $(this).siblings('.error-message').remove();
               const errorMessage = '<div class="error-message mt-1"><small class="text-danger">This field is required.</small></div>';
               const existingErrorMessage = $(this).siblings('.error-message');
               if (existingErrorMessage.length > 0) {
                  existingErrorMessage.replaceWith(errorMessage);
               } else {
                  $(this).after(errorMessage);
               }
               isValid = false;
            } else if ($(this).attr('type') === 'email' && !isValidEmail($(this).val())) {
               $(this).addClass('is-invalid');
               $(this).siblings('.error-message').remove();
               const errorMessage = '<div class="error-message mt-1"><small class="text-danger">Please enter a valid email address.</small></div>';
               const existingErrorMessage = $(this).siblings('.error-message');
               if (existingErrorMessage.length > 0) {
                  existingErrorMessage.replaceWith(errorMessage);
               } else {
                  $(this).after(errorMessage);
               }
               isValid = false;
            }
         });
      } else if (num === 3) {
         // Iterate over each required input within nav-checkout3 section
         $('#nav-checkout3 input[required]').each(function () {
            // If input is empty, add error message and mark it as invalid
            if (!$(this).val()) {
               $(this).addClass('is-invalid');
               $(this).siblings('.error-message').remove();
               const errorMessage = '<div class="error-message mt-1"><small class="text-danger">This field is required.</small></div>';
               const existingErrorMessage = $(this).siblings('.error-message');
               if (existingErrorMessage.length > 0) {
                  existingErrorMessage.replaceWith(errorMessage);
               } else {
                  $(this).after(errorMessage);
               }
               isValid = false;
            } else if ($(this).attr('type') === 'email' && !isValidEmail($(this).val())) {
               $(this).addClass('is-invalid');
               $(this).siblings('.error-message').remove();
               const errorMessage = '<div class="error-message mt-1"><small class="text-danger">Please enter a valid email address.</small></div>';
               const existingErrorMessage = $(this).siblings('.error-message');
               if (existingErrorMessage.length > 0) {
                  existingErrorMessage.replaceWith(errorMessage);
               } else {
                  $(this).after(errorMessage);
               }
               isValid = false;
            }
         });
      }

      return isValid;
   }

   // Click event handler for Next button
   $('#checkout-next1').click(function () {
      // Validate inputs within nav-checkout1 section
      next1Clicked = true;
      var valid = validateInputs(1);

      // If all inputs are filled, proceed to next step
      if (valid) {
         $('#nav-checkout-tab2').attr('disabled', false).click();
      }
   });
   // Click event handler for Next button
   $('#checkout-next2').click(function () {
      // Validate inputs within nav-checkout1 section
      next2Clicked = true;
      var valid = validateInputs(2);

      // If all inputs are filled, proceed to next step
      if (valid) {
         $('#nav-checkout-tab3').attr('disabled', false).click();
      }
   });
   // Click event handler for Next button
   $('#checkout-next3').click(function () {
      // Validate inputs within nav-checkout1 section
      next3Clicked = true;
      var valid = validateInputs(3);

      // If all inputs are filled, proceed to next step
      if (valid) {
         $('#checkout-form').submit();
      }
   });

   // Change event handler for inputs within nav-checkout1 section
   $('#nav-checkout1 input[required]').keyup(function () {
      if (next1Clicked) {
         // Remove error message and validation class when input value changes
         if ($(this).val()) {
            $(this).removeClass('is-invalid');
            $(this).siblings('.error-message').remove();
         } else {
            $(this).addClass('is-invalid');
            $(this).siblings('.error-message').remove();
            const errorMessage = '<div class="error-message mt-1"><small class="text-danger">This field is required.</small></div>';
            const existingErrorMessage = $(this).siblings('.error-message');
            if (existingErrorMessage.length > 0) {
               existingErrorMessage.replaceWith(errorMessage);
            } else {
               $(this).after(errorMessage);
            }
         }
      }
   });

   // Change event handler for inputs within nav-checkout2 section
   $('#nav-checkout2 input[required]').keyup(function () {
      if (next2Clicked) {
         // Remove error message and validation class when input value changes
         if ($(this).val()) {
            $(this).removeClass('is-invalid');
            $(this).siblings('.error-message').remove();
         } else {
            $(this).addClass('is-invalid');
            $(this).siblings('.error-message').remove();
            const errorMessage = '<div class="error-message mt-1"><small class="text-danger">This field is required.</small></div>';
            const existingErrorMessage = $(this).siblings('.error-message');
            if (existingErrorMessage.length > 0) {
               existingErrorMessage.replaceWith(errorMessage);
            } else {
               $(this).after(errorMessage);
            }
         }
      }
   });

   // Change event handler for inputs within nav-checkout3 section
   $('#nav-checkout3 input[required]').keyup(function () {
      if (next3Clicked) {
         // Remove error message and validation class when input value changes
         if ($(this).val()) {
            $(this).removeClass('is-invalid');
            $(this).siblings('.error-message').remove();
         } else {
            $(this).addClass('is-invalid');
            $(this).siblings('.error-message').remove();
            const errorMessage = '<div class="error-message mt-1"><small class="text-danger">This field is required.</small></div>';
            const existingErrorMessage = $(this).siblings('.error-message');
            if (existingErrorMessage.length > 0) {
               existingErrorMessage.replaceWith(errorMessage);
            } else {
               $(this).after(errorMessage);
            }
         }
      }
   });
});

$(document).ready(function () {
   const products = getProductsFromLocalStorage();
   if (products.length === 0) {
      $('#checkout-container').empty();

      $html = ``;
      $html += `<div class="text-start">`;
      $html += `<p class="fs-5">You have no items in your cart, so cannot checkout.</p>`;
      $html += `<a href="/shop" class="btn btn-dark rounded-0">Shop Now</a>`;
      $html += `</div>`;
      $('#checkout-container').html($html);
      $('#checkout-container').removeClass('d-none');
   } else {
      $('#checkout-container').removeClass('d-none');
   }
});


$(document).ready(function () {
   // Function to adjust card heights
   function adjustCardHeights() {
      var maxHeight = 0;
      // Loop through each card and find the maximum height
      $('.about-card-content').each(function () {
         var currentHeight = $(this).height();
         if (currentHeight > maxHeight) {
            maxHeight = currentHeight + 20;
         }
      });
      // Set the height of all card bodies to the maximum height
      $('.about-card-body').height(maxHeight);
   }

   // Call the function initially
   if ($(window).width() >= 500) {
      adjustCardHeights();
      // console.log('adjustCardHeights')
   } else {
      // Reset card heights to auto if screen size is larger than md
      $('.about-card-body').height('auto');
   }

   // Call the function whenever the window is resized
   $(window).resize(function () {
      // Check if screen size is md or smaller
      if ($(window).width() >= 768) {
         adjustCardHeights();
      } else {
         // Reset card heights to auto if screen size is larger than md
         $('.about-card-body').height('auto');
      }
   });
});


// Products Filter
$(document).ready(function () {
   $(document).on('change', '.order-component-dropdown', function (e) {
      // Get the selected option
      var selectedOption = $(this).find('option:selected');
      var dropdownType = $(this).data('dropdown-type');
      // Access data-product-id from the selected option
      var productId = selectedOption.data('product-id');
      var fullTitle = selectedOption.data('product-fullname');
      var shortTitle = selectedOption.data('product-short-title');
      var productImage = selectedOption.data('product-image');
      var price = selectedOption.data('product-price');
      var parentCategorySlug = selectedOption.data('product-parent-category-slug');
      var discountedPrice = selectedOption.data('product-discountedprice');
      var assemblyName = selectedOption.data('product-assembly-name');
      var styleName = selectedOption.data('product-style');
      var discountedPercentage = selectedOption.data('product-discountedpercentage');
      var productCode = selectedOption.data('product-code');
      var productDimensions = selectedOption.data('product-dimensions');
      var productColour = selectedOption.data('product-colour');
      var _html = `
         <div class="card bg-light p-0 border border-warning" style="border-radius: 0; border: none">
            <div class="bg-warning card-header px-0 py-0">
               <div class="py-2 text-center product-short-title-container w-100">
                     <a href="#" class="product-short-title fw-bold text-decoration-underline fs-4">
                        ${shortTitle}
                     </a>
               </div>
            </div>
            <div class="card-body text-center">
               <div class="modal fade" id="productModal${productId}" tabindex="-1"
                     aria-labelledby="productModalLabel${productId}"
                     aria-hidden="true">
                     <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content" style="border-radius: 0; border-top: 3px solid #ebc266; border-bottom: 3px solid #ebc266">
                           <div class="modal-header border-bottom border-light">
                                 <h1 class="fs-5 fw-bold text-dark border-bottom border-dark">
                                    ${fullTitle}
                                 </h1>
                                 <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                                 <div class="container-fluid">
                                    <div class="row">
                                       <div class="col-lg-8 col-md-8 col-8 border-bottom border-warning bg-light">
                                             <img src="${productImage}"
                                                class="img-fluid product-image" style="height: 300px;" />
                                       </div>
                                       <div class="col-lg-4 col-md-4 col-4 text-start text-dark">
                                             <div>
                                                <h6 class="fs-6 fw-bolder text-dark">Styling</h6>
                                                <ul style="list-style: none; padding: 0">
                                                   ${styleName ? `<li>
                                                         <p class="mb-0">
                                                            <small class="fw-bold text-uppercase text-dark">Assembly:</small> ${styleName}
                                                         </p>
                                                   </li>` : ''}
                                                   ${assemblyName ? `<li>
                                                         <p class="mb-0">
                                                            <small class="fw-bold text-uppercase text-dark">Assembly:</small> ${assemblyName}
                                                         </p>
                                                   </li>` : ''}
                                                   ${productColour ? `<li>
                                                         <p class="mb-0">
                                                            <small class="fw-bold text-uppercase text-dark">Colour:</small> ${productColour}
                                                         </p>
                                                   </li>` : ''}
                                                </ul>
                                             </div>
                                             <div>
                                             <h6 class="fs-6 fw-bolder text-dark">Dimensions</h6>
                                             <ul style="list-style: none; padding: 0">
                                                ${productDimensions ? `<li>
                                                      <p class="mb-0">
                                                         <small class="fw-bold text-uppercase text-dark">Dimensions:</small> ${productDimensions}
                                                      </p>
                                                </li>` : ''}
                                             </ul>
                                             </div>
                                             <div>
                                             <h6 class="fs-6 fw-bolder text-dark">Range Specification</h6>
                                             <p class="mb-0">
                                                <small>
                                                      ${parentCategorySlug ? parentCategorySlug : 'N/A'}
                                                </small>
                                             </p>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           <div class="modal-footer"></div>
                        </div>
                     </div>
               </div>

               <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-6 p-0">
                           <figure class="my-0" style="margin-bottom: 0px !important;">
                                 <img class="product-image px-0" style="height: 200px !important" 
                                    style="margin-bottom: 0px !important;object-fit:contain"
                                    src="${productImage}"
                                    alt="Card image cap" data-bs-toggle="modal"
                                    data-bs-target="#productModal${productId}">
                           </figure>
                        </div>
                        <div class="col-6 border border-default">
                           <div class="container-fluid">
                                 <div class="row">
                                    <div class="col-12 p-0">
                                       <p class="mt-2 text-start"><small class="fw-bold text-dark">Product Code: ${productCode}</small></p>
                                       <p class="text-start">
                                             <small
                                                class="fw-bold text-dark">Product Dimensions: ${productDimensions}</small>
                                       </p>
                                    </div>
                                 </div>
                                 ${styleName ? `<div class="row">
                                       <div class="col-4 p-0 d-md-flex d-none">
                                          <p class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                             <small class="fw-bold">Style</small>
                                          </p>
                                       </div>
                                       <div class="col-md-8 col-sm-12 p-0 text-center">
                                          <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                             <small>${styleName}</small>
                                          </p>
                                       </div>
                                 </div>` : ''}
                                 ${productColour ? `<div class="row">
                                       <div class="col-4 p-0 d-md-flex d-none">
                                          <p class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                             <small class="fw-bold">Colour</small>
                                          </p>
                                       </div>
                                       <div class="col-md-8 col-sm-12 p-0 text-center">
                                          <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                             <small>${productColour}</small>
                                          </p>
                                       </div>
                                 </div>` : ''}
                                 ${assemblyName ? `<div class="row">
                                       <div class="col-4 p-0 d-md-flex d-none">
                                          <p class="category-text text-start text-dark text-uppercase m-0 pt-1">
                                             <small class="fw-bold">Assembly</small>
                                          </p>
                                       </div>
                                       <div class="col-md-8 col-sm-12 p-0 text-center">
                                          <p class="category-value fw-semibold py-1 mb-2 text-dark">
                                             <small>${assemblyName}</small>
                                          </p>
                                       </div>
                                 </div>` : ''}
                           </div>
                           <div class="row justify-content-center border-top border-default">
                                 <div class="col-12">
                                    <p class="fs-5 fw-bold text-dark">
                                       ${price == 0 ? 'Out of Stock' : '£' + price}
                                    </p>
                                 </div>
                                 <div
                                    class="col-12 d-flex justify-content-center product-counter">
                                    <input id="minus${productId}"
                                       class="minus border bg-dark text-light p-0"
                                       type="button" value="-"
                                       onclick="decreaseQuantity('${productId}', '${productCode}', '${fullTitle}', ${price}, ${discountedPercentage}, ${discountedPercentage ?? 0}, '${parentCategorySlug}')" />
                                    <input id="quantity${productId}"
                                       class="quantity border border-black text-center"
                                       type="text" value="0" name="quantity"
                                       disabled />
                                    <input id="plus${productId}"
                                       class="plus border bg-dark text-light p-0"
                                       type="button" value="+" type="number"
                                       max="10"
                                       ${price == 0 ? 'disabled' : ''}
                                       onclick="increaseQuantity('${productId}', '${productCode}', '${fullTitle}', ${price}, ${discountedPercentage}, ${discountedPercentage ?? 0}, '${parentCategorySlug}')" />
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      `;
      $('.' + dropdownType).html(_html);
   });
});