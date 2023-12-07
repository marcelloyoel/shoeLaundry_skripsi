console.log('test home js');
const x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    console.log(position);
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    console.log("Coords User: " + latitude + ',' + longitude);

    var csrf = $("#csrf-token").val();

    $.ajax({
        type: 'POST',
        url: "/getLocation",
        data: {
            // _token:         csrf,
            latitude: position.coords.latitude,
            longitude: position.coords.longitude
        },
        success: function(ajax) {
            console.log($.ajax);
            alert("Berhasil");
        },
        error: function(request, error) {
            console.log(error);
            alert("Gagal");
        }
    });
}

window.onload = function() {
    getLocation();
};
