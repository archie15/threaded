import $ from "jquery"

// fixed header script
window.onscroll = function () {
    fixedHeader()
};

const header = document.querySelector('.header')

function fixedHeader() {
    if (window.pageYOffset > 0) {
        header.classList.add('header--fixed')
    } else {
        header.classList.remove('header--fixed')
    }
}

/**
 * header profile menu
*/
$(document).on('click', '.jsProfileMenuBtn', function (e) {
    e.preventDefault();

    var dropdown = $(this).parent();
    var open = $(this).parent().hasClass('open');
    if (open) {
        $(this).parent().removeClass('open');

    } else {
        $(this).parent().addClass('open');
    }
});


