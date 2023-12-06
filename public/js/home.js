const roleDropdown = document.getElementById('role');
const buyerForm = document.getElementById('buyer-form');
const laundryForm = document.getElementById('laundry-form');

roleDropdown.addEventListener('change', function() {
    const selectedRole = this.value;

    if (selectedRole === '1') {
        buyerForm.style.display = 'block';
        laundryForm.style.display = 'none';
    } else if (selectedRole === '2') {
        buyerForm.style.display = 'none';
        laundryForm.style.display = 'block';
    }
});

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
