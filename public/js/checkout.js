let subTotalContent = document.getElementById('subtotal');
// subTotalContent.textContent = subTotal;
let subTotalMoney = Number(subTotalContent.textContent);
let changeIt = new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
}).format(subTotalMoney);
subTotalContent.textContent = changeIt;

let total = document.getElementById('total');
total.textContent = subTotalMoney;
let totalMoney = Number(total.textContent);
let ubahDong = new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
}).format(totalMoney);
total.textContent = ubahDong;

console.log(jumlahToko);

function validasiForm(){
	for (let index = 1; index <= jumlahToko; index++) {
        if(document.getElementById('merkSepatu-' + index).value === "") return "Nama Merk Sepatu Tidak Boleh Kosong!";
	    else if(document.getElementById('jenisSepatu-' + index).value === "") return "Jenis Sepatu Tidak Boleh Kosong!";
	    else if(document.getElementById('address-' + index) === "") return "Jenis Produk Tidak Boleh Kosong!";
    }
    return true;
}

function alertMain(alertText){
	window.scrollTo(0, 0);
	$("#alert-main").remove();
	$(".alertNih").prepend('<div class="alert alert-warning" id="alert-main" role="alert">'+alertText+'</div>');
}

// function orderButton(){
//     var validasi = validasiForm();
//     if(validasi == true){
//         document.getElementById('submitForm').submit();
//     }else{
//         alertMain(validasi);
//     }
// }
let totalHargaAjax = document.getElementById('totalJs').value;

function generateToken() {
    var token = 0;

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
            token = response;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            // alert('There was an error generating the transaction token.');
            token = 0;
        }
    });

    return token;
}


document.getElementById('orderButton').addEventListener('click', function(){
    // var validasi = validasiForm();
    var validasi = true;
    if(validasi == true){
        var token = generateToken();
        if(token != 0){
            console.log('ini tokennya');
            console.log(token);
            asalajayangpentinggagal();
            document.getElementById('submitForm').submit();
        }
    }else{
        alertMain(validasi);
    }
});
