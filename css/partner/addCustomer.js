
$(document).ready(function () {
    // Fetch product data when the page loads
    $.ajax({
        url: 'get_products.php', // Replace with the actual PHP script to fetch product data
        method: 'GET',
        success: function (products) {
            // Populate product options
            $('#productList').html(products);
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });

    // Update price, total price, and offer when product selection changes
    $('#productList').on('change', function () {
        // Fetch price from the server using AJAX
        const selectedProduct = $(this).val();
        $.ajax({
            url: 'get_price.php', // Replace with the actual PHP script to fetch price
            method: 'POST',
            data: { product: selectedProduct },
            success: function (price) {
                // Display product price
                $('#price').val(price);
                // Fetch offer details
                fetchOffer(selectedProduct);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Function to fetch offer details
    function fetchOffer(product) {
        $.ajax({
            url: 'get_offer.php', // Replace with the actual PHP script to fetch offer
            method: 'POST',
            data: { product: product },
            success: function (discountPercentage) {
                // Placeholder logic for offer and price to pay
                // Replace this with your actual logic
                const totalPrice = parseFloat($('#totalPrice').val()) || 0;
                const offer = (discountPercentage / 100) * totalPrice;
                const priceToPay = totalPrice - offer;

                // Display calculated offer and price to pay
                $('#offer').val(offer);
                $('#priceToPay').val(priceToPay);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }

    // Update total price when quantity changes
    $('#productQuantity').on('input', function () {
        calculateTotal();
    });

    // Function to update total price
    function calculateTotal() {
        const price = parseFloat($('#price').val()) || 0;
        const quantity = parseInt($('#productQuantity').val()) || 0;
        const totalPrice = price * quantity;

        // Display total price
        $('#totalPrice').val(totalPrice);

        // Recalculate offer and price to pay
        fetchOffer($('#productList').val());
    }
});