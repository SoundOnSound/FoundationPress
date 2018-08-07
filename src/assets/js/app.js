import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

// Get all <li> with class of product and assign variable
let productItem = document.querySelectorAll('li.product');
// Loop all <li>
for( let i = 0; i < productItem.length; i++ ) {
  // Add card class to each item
  productItem[i].classList.add('card');
}

// Correctly assign last class to last li item on homepage
let addLastClass = document.querySelector('ul.columns-4 li.product:last-child, ul.columns-6 li.product:last-child');
addLastClass.classList.add('last');
