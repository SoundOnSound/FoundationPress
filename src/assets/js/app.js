import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();


// // Get all <li> with class of product and assign variable
// let productItem = document.querySelectorAll('li.product');
// // Loop all <li>
// for( let i = 0; i < productItem.length; i++ ) {
//   // Add card class to each item
//   productItem[i].classList.add('card');
// }

// let dashboard = document.querySelector('.woocommerce-MyAccount-navigation-link--dashboard');
// console.log(dashboard);
// let dashboardIcon = document.createElement('I')
// let fa = 'fas';
// let faClass = 'fa-tachometer-alt';
// dashboardIcon.classList.add(fa, faClass);
// dashboard.appendChild(dashboardIcon);

// Prevents link on Manufacturer menu item. Three vars is catch all for local and remote, desktop and mobile.
// let manufacturerLinkLocal = document.querySelector('#menu-item-128 a');
// let manufacturerLinkRemote = document.querySelector('#menu-item-146 a');
// let manufacturerLinkRemoteMobile = document.querySelector('#menu-item-161 a');
//
// const preventClick = [ manufacturerLinkLocal, manufacturerLinkRemote, manufacturerLinkRemoteMobile ];
//
// preventClick.forEach(function(link) {
//   if( link ) {
//     link.addEventListener('click', function(e) {
//       e.preventDefault();
//     });
//   }
// });

// manufacturerLink.addEventListener('click', function(e) {
//   e.preventDefault();
// });

// // Correctly assign last class to last li item on homepage
// let addLastClass = document.querySelector('ul.columns-4 li.product:last-child');
// // Check addLastClass is true to prevent error on pages that don't have addLastClass
// if( addLastClass ) {
//   addLastClass.classList.add('last');
// }
//
// let addLastClass6 = document.querySelectorAll('ul.columns-6 li.product:last-child');
//
// for( let i = 0; i < addLastClass6.length; i ++ ) {
//   addLastClass6[i].classList.add('last');
// }
// // Add button class to widget search submit for stlying purposes
// let productSearchSubmit = document.querySelector('.woocommerce-product-search button');
// if( productSearchSubmit ) {
//   productSearchSubmit.classList.add('button');
// }

// Assign coloured badges to product categories

// Get all product category headings
// let catHeading = document.querySelectorAll('h4.product_category_title');
// // Check catHeading is true to prevent error on pages that don't have headings
// if( catHeading ) {
//   // Loop the array result from above and build statement to assign style based on category
//   for( let i = 0; i < catHeading.length; i ++ ) {
//     if( catHeading[i].innerHTML == 'Uncategorised' ) {
//       catHeading[i].style.background = 'red';
//     } else if( catHeading[i].innerHTML == 'Equalizer' ) {
//       catHeading[i].style.background = 'blue';
//     } else if( catHeading[i].innerHTML == 'Plug-In' ) {
//       catHeading[i].style.background = 'yellow';
//     } else {
//       catHeading[i].style.background = 'green';
//     }
//   }
// }
