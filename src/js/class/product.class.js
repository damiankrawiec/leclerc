class Product extends Display{

    constructor($url = '') {

        super();

        this.url = $url;

    }

    getData($type) {

        $.ajax({
            type: "POST",
            url: this.url,
            dataType: 'json',
            data: {
                type: $type
            },
            success: super.displayProduct

        }).done(function ($data) {

            console.log($data);

        }).fail(function ($err) {

            console.log($err);

        });

    }

}