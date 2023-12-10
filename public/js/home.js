console.log('home js');
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

    // Create a JavaScript object with latitude and longitude
    var locationData = {
        _token: csrf,
        latitude: latitude,
        longitude: longitude
    };

    $.ajax({
        type: 'POST',
        url: "/mapsLocation",
        // data: JSON.stringify(locationData), // Convert object to JSON string
        // contentType: 'application/json', // Set content type for JSON
        data: {
            _token:         csrf,
            latitude: latitude,
            longitude: longitude
        },
        success: function(ajax) {
            console.log($.ajax);
            alert("Managed to find the location");
        },
        error: function(request, error) {
            console.log(error);
            alert("Failed to find its location");
        }
    });
}

window.onload = function() {
    getLocation();
};
