console.log('halo gais');
var subTotal = 0;
let totalMoney = 0;

let priceElements = document.getElementsByClassName('price');
for(let i = 0; i < priceElements.length; i++) {
    let price = Number(priceElements[i].textContent);
    let formattedPrice = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
    }).format(price);
    priceElements[i].textContent = formattedPrice;
}

function generateSummary(){
    let subTotalContent = document.getElementById('subtotal');
    subTotalContent.textContent = subTotal;
    let subTotalMoney = Number(subTotalContent.textContent);
    let changeIt = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
    }).format(subTotalMoney);
    subTotalContent.textContent = changeIt;

    let total = document.getElementById('total');
    total.textContent = subTotal;
    totalMoney = Number(total.textContent);
    let ubahDong = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
    }).format(totalMoney);
    total.textContent = ubahDong;
}

function generateSummaryPrice(){
    subTotal = 0;
    $('.item-checkbox:checked').each(function() {
        // console.log(this.attributes);
        var dataPrice = parseFloat(this.getAttribute('data-price')) * parseFloat(this.getAttribute('data-qty'));
        subTotal += dataPrice;
    });
    generateSummary();
}

function buttonDown(button, userId, serviceId){
    var inputElement = button.parentNode.querySelector('input[type=number]');
    if(inputElement.value > 1){
        // console.log(inputElement.value);
        // console.log(userId + ' hahaha');
        // Perform the step down action
        inputElement.stepDown();
        // console.log(inputElement.value);
        // console.log('di atas adalah setelah dikurangi');
        decreaseQuantityCart(userId,serviceId);
    }else{
        var url = "/deleteCart/" + serviceId + "/" + userId;
        window.location.href = url;
    }
}

function buttonUp(button, userId, item){
    var inputElement = button.parentNode.querySelector('input[type=number]');
    var jsonItem = JSON.stringify(item);
    // console.log(jsonItem);
    // Perform the step down action
    inputElement.stepUp();
    increaseQuantityCart(userId,jsonItem);
}



function decreaseQuantityCart(userId,serviceId){
    $.ajax({
        url: '/updateCartDecreaseQuantity',
        type: 'POST',
        data: {
            id: userId,
            item: serviceId
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            console.log(response);
            console.log(serviceId);
            console.log('#item-' + serviceId);
            $('#item-' + serviceId).attr('data-qty', response.newQuantity);
            generateSummaryPrice();
            // alert('Success! The service has been decreased in the cart.');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            alert('There was an error decreasing the service to the cart.');
        }
    });
}
function increaseQuantityCart(userId,jsonItem){

    $.ajax({
        url: '/updateCartIncreaseQuantity',
        type: 'POST',
        data: {
            id: userId,
            item: jsonItem
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            console.log(response);
            console.log(jsonItem);
            var belah = JSON.parse(jsonItem);
            console.log('#item-' + belah.id);
            $('#item-' + belah.id).attr('data-qty', response.newQuantity);

            generateSummaryPrice();
            // alert('Success! The service has been increased in the cart.');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            alert('There was an error when increase the service to the cart.');
        }
    });
}

// For each shop checkbox
$('.shop-checkbox').change(function() {
    var shopName = this.id.split('-')[1];
    $('.item-checkbox[data-shop="' + shopName + '"]').prop('checked', this.checked).trigger('change');
    generateSummaryPrice();
});

// For each item checkbox
$('.item-checkbox').change(function() {
    var shopName = $(this).data('shop');
    console.log($(this).data());
    var allChecked = $('.item-checkbox[data-shop="' + shopName + '"]').length === $('.item-checkbox[data-shop="' + shopName + '"]:checked').length;
    $('#shop-' + shopName).prop('checked', allChecked);
    generateSummaryPrice();
});




// For the select all checkbox
$('#select-all').change(function() {
    $('.shop-checkbox').prop('checked', this.checked).trigger('change');
    $('.item-checkbox').prop('checked', this.checked).trigger('change');
    generateSummaryPrice();
});

//For unselect when there's a 'uncheck'
$('.shop-checkbox, .item-checkbox').change(function() {
    var allChecked = $('.shop-checkbox').length === $('.shop-checkbox:checked').length && $('.item-checkbox').length === $('.item-checkbox:checked').length;
    $('#select-all').prop('checked', allChecked);
});


function generateInitial(){
    $('#select-all').prop('checked', true).trigger('change');
}

document.getElementById('checkout').addEventListener('click', function(){
    var shops = {};
    $('.item-checkbox:checked').each(function() {
        var id = $(this).attr('id').split('-')[1]; // Assuming the id is in the format "item-<id>"
        var shopName = $(this).data('shop');
        var price = $(this).data('price');
        var quantity = $(this).data('qty');
        var name = $(this).data('servicename');

        if (!shops[shopName]) {
            shops[shopName] = [];
        }

        shops[shopName].push({
            idService: id,
            price: price,
            quantity: quantity,
            name: name
        });
    });
    console.log(shops);

    document.getElementById('shopOrders').value = JSON.stringify(shops);
    document.getElementById('totalOrder').value = totalMoney;
});



generateInitial();
generateSummaryPrice();
