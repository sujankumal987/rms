let total = 0;
$('#total').text(total);
$('.product-btn').on('click', function(e) {
        e.preventDefault();

        console.log('CALLING');

        const product = $(this);

        const id    = product.data('id');
        const price = product.data('price');
        const title = product.data('title');

        // Check if there is already a product
        const quantity = $('.product-table input[data-id=' + id + ']');

        if(quantity.length > 0) {
            // The product is in the table (already added)
            // So, increase quantity instead
            // const current_quantity = parseInt(quantity.val());

            // quantity.val(current_quantity + 1);


            const id = parseInt($(this).data('id'));

            // Get the input
            const quantity = $('.product-table input[data-id=' + id + ']');
            const current_quantity = parseInt(quantity.val());
            const price = Number(quantity.data('price'));


            quantity.val(current_quantity + 1);


            $('.total[data-id=' + id +']').text(price * (current_quantity + 1));

            total = total + price * (current_quantity + 1);
            $('#total').text(total);
            return; // stops running anything below
        }


        // If product is not on table, add it to table.

        let html = '<tr class="product-table">';
        html += '<td>' + id + '</td>';
        html += '<td>' + title +'</td>';
        html += '<td>Rs. ' + price +'</td>';
        html += '<td class="d-flex">';
        html += '<button data-id="' + id + '" class="decrease btn btn-primary" type="button">-</button>';
        html += '<input data-id="' + id + '" data-price="' + price + '" name="quantity" class="form-control qty" value="1" class="quantity">';
        html += '<button data-id="' + id + '" class="increase btn btn-primary" type="button">+</button>';
        html += '</td>';
        html += '<td>Rs. <span class="total" data-id="' + id +'">' + price +'</span></td>';
        html += '<td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-product"><i class="fas fa-pen-fancy"></i></button></td>';
        html += '</tr>';

        $('#product-table tbody').append(html);
        total = total + price;
        $('#total').text(total);

    });

    // Increase Decrease Product

    $('body').on('click', '.increase', function(e) {
        e.preventDefault();

        const id = parseInt($(this).data('id'));

        // Get the input
        const quantity = $('.product-table input[data-id=' + id + ']');
        const current_quantity = parseInt(quantity.val());
        const price = Number(quantity.data('price'));

        quantity.val(current_quantity + 1);
        total = total + price * (current_quantity + 1);



        $('.total[data-id=' + id +']').text(price * (current_quantity + 1));
    });

    $('body').on('click', '.decrease', function(e) {
        e.preventDefault();

        const id = parseInt($(this).data('id'));

        // Get the input
        const quantity = $('.product-table input[data-id=' + id + ']');
        const current_quantity = parseInt(quantity.val());
        const price = Number(quantity.data('price'));
        total = total + price * (current_quantity - 1);
        $('#total').text(total);




        if(current_quantity <= 1) {
            return; // Do nothing if quantity is 1 or low
        }

        quantity.val(current_quantity - 1);

        // Update subtotal
        $('.total[data-id=' + id +']').text(price * (current_quantity - 1));
    });

    // clear
    $("#btnClear").click(function(){
        $("#table-body").empty();
        $('#total').text(0);
      });
