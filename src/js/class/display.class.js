class Display {

    constructor() {

    }

    displayProduct($data) {

        let $products = $data['products'];

        let $col = '';
        let $class = 'basket-detail';
        if($data['type'] === 'list') {
            $col = ' col-md-6 col-lg-4 col-xl-2'
            $class = 'product-list';
        }

        let $display = '';
        for(let $i in $products) {

            $display += '<div class="col-12' + $col + '">';

                $display += '<div class="product">';

                    $display += '<div><img src="img/' + $products[$i].image + '"></div>';

                    $display += '<div class="fs-4">' + $products[$i].name + '</div>';

                    $display += '<div class="clearfix p-2">';

                    $display += '<span class="text-warning float-start fw-bold">' + parseFloat($products[$i].price).toFixed(2) + ' zł</span>';

                    $display += '<button class="btn btn-primary float-end"><i class="fa-solid fa-cart-shopping"></i> <i class="fa-solid fa-plus"></i></button>';

                    $display += '</div>';

                $display += '</div>';

            $display += '</div>';

        }

        $('.' + $class).html($display);

    }

}