import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
$('.toggle').on('click', function() {
    $('.navbar-mobile').css('right', '0');
})
$('.close-toggle').on('click', function() {
    $('.navbar-mobile').css('right', '-200px');
})
