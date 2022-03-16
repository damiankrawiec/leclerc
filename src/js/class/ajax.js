class Ajax {

    constructor($url = '') {

        this.url = $url;

    }

    getData() {

        $.ajax({
            method: 'post',
            url: this.url,
            dataType: 'json'
        })
        .done(function ($data) {

            this.displayData($data);

        })
        .fail(function ($err) {
            console.log($err);
        });
    }

    displayData($products) {

        console.log($products)

    }

}