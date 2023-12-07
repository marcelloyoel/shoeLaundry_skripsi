console.log('hello test');
console.log('masi jalan ga ya');

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

    var csrf = $("#csrf-token").val();

    $.ajax({
        type: 'POST',
        url: "{{ route('MapsController.calculateDistance') }}",
        data: {
            _token:         csrf,
            latitude: position.coords.latitude,
            longitude: position.coords.longitude
        },
        success: function(ajax) {
            console.log($.ajax);
        },
        error: function(request, error) {
            console.log(error);
        }
    });
}
window.onload = function() {
    getLocation();
};
