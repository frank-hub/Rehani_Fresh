$(document).ready(function () {

    let specialTextTitle = $('.special-text').text();

    $('.product').on('mouseover', function () {
        let productName = $(this).find('.product-name').text();
        $('.special-text').text(productName);
    })

    $('.product').on('mouseout', function () {
        $('.special-text').text(specialTextTitle);
    })

})