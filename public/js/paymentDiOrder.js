console.log('wkwk malas');

var totalHargaAjax = document.getElementById('totalHarga').value;
console.log(totalHargaAjax);

function generateToken() {
    $.ajax({
        url: '/generateToken',
        type: 'POST',
        data: {
            price: totalHargaAjax
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            tokenHasil = response;
            window.snap.pay(tokenHasil, {
                onSuccess: function(result){
                  /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                    document.getElementById('btnPayment').disabled=true;
                    document.getElementById('btnCancel').disabled=true;
                    document.getElementById('paymentStatus-hidden').value=1;
                    document.getElementById('submitForm').submit();
                },
                onPending: function(result){
                  /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result){
                  /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                onClose: function(){
                  /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            alert('There was an error generating the transaction token.');
            // token = 0;
        }
    });

    // return token;
}

document.getElementById('btnPayment').addEventListener('click', function(){
    generateToken();
});
document.getElementById('btnCancel').addEventListener('click', function(){
    document.getElementById('btnPayment').disabled=true;
    document.getElementById('btnCancel').disabled=true;
    document.getElementById('paymentStatus-hidden').value=-99;
    document.getElementById('submitForm').submit();
});
