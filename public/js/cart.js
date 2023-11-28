console.log('ini kah yang benar?');
var subTotal = 0;
let subTotalContent = document.getElementById('price');
console.log(subTotalContent.textContent);
    // subTotalContent.textContent = subTotal;
let subTotalMoney = Number(subTotalContent.textContent);
let changeIt = new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
}).format(subTotalMoney);
subTotalContent.textContent = changeIt;

function addToCart(){
    var jsonParse = JSON.parse(service);
    console.log(jsonParse);
    console.log(authId);
    console.log('laundrySepatuName');
    console.log(laundrySepatuName);
    console.log(laundrySlug);

    $.ajax({
        url: '/addToCart',
        type: 'POST',
        data: {
            // _token: '{{ csrf_token() }}',  // Add this line
            service: jsonParse,
            userId: authId,
            laundrySepatuName: laundrySepatuName,
            laundrySlug: laundrySlug
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            alert('Success! The service has been added to the cart.');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            alert('There was an error adding the service to the cart.');
        }
    });

}

