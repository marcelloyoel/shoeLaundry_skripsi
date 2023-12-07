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
