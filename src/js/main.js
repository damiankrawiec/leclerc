$(function() {

    let $product = new Product('src/php/ajax.php');

    $product.getData('list');

    $('.basket').on('click', function() {

        let $next = $(this).next();

        $next.toggle( 'slow',function() {

            $product.getData('basket');

        });

    });

});