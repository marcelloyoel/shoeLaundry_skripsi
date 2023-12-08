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
    var latitudeTest = JSON.stringify(position.coords.latitude);
    var longitudeTest = JSON.stringify(position.coords.longitude);

    console.log("Coords User: " + latitudeTest + ',' + longitudeTest);

    var csrf = $("#csrf-token").val();

    $.ajax({
        type: 'POST',
        url: "/getLocation",
        data: {
            _token:         csrf,
            latitude: latitudeTest,
            longitude: longitudeTest
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
