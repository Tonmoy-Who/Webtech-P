document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");
    // Feature 1: Form Validation
    function validateForm() {
        const firstName = document.getElementById("fname").value;
        const lastName = document.getElementById("lname").value;
        const email = document.getElementById("email").value;
        const donationAmount = document.querySelector('input[name="amount"]:checked');

        if (!firstName || !lastName || !email || !donationAmount) {
            alert("Please fill in all required fields.");
            return false;
        }

        // Feature 2: Email Validation
        if (!validateEmail(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        return true;
    }

    // Email Validation Function
    function validateEmail(email) {
        const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return regex.test(email);
    }

    // Feature 3: Donation Amount Check
    document.querySelectorAll('input[name="amount"]').forEach((radioButton) => {
        radioButton.addEventListener('change', function () {
            const otherAmountField = document.getElementById('other_amount');
            if (this.value.toLowerCase() === 'other') {
                otherAmountField.style.display = 'block';
                otherAmountField.required = true;
            } else {
                otherAmountField.style.display = 'none';
                otherAmountField.required = false;
            }
        });
    });

    // Feature 4: Recurring Donation Fields
    const recurringCheckbox = document.querySelector('input[name="recurring"]');
    const monthlyAmount = document.querySelector('input[name="monthly_amount"]');
    const monthsInput = document.querySelector('input[name="months"]');

    recurringCheckbox.addEventListener('change', function () {
        if (this.checked) {
            monthlyAmount.style.display = 'inline-block';
            monthsInput.style.display = 'inline-block';
            monthlyAmount.required = true;
            monthsInput.required = true;
        } else {
            monthlyAmount.style.display = 'none';
            monthsInput.style.display = 'none';
            monthlyAmount.required = false;
            monthsInput.required = false;
        }
    });

    // Feature 5: Select State and Country Default Options
    document.getElementById("state1").selectedIndex = 0;
    document.getElementById("country").selectedIndex = 0;
    document.getElementById("state2").selectedIndex = 0;

    // Feature 6: Confirm Password (If Needed)
    function validatePassword() {
        const password = document.getElementById("password");
        const confirmPassword = document.getElementById("confirm_password");

        if (password && confirmPassword && password.value !== confirmPassword.value) {
            alert("Passwords do not match.");
            confirmPassword.focus();
            return false;
        }
        return true;
    }

    // Feature 7: Reset Button Logic
    const resetButton = document.querySelector('button[type="reset"]');
    resetButton.addEventListener('click', function (event) {
        if (!confirm("Are you sure you want to reset the form?")) {
            event.preventDefault();
        }
    });

    // Feature 8: Show/Hide Additional Fields
    const donationTypeRadios = document.getElementsByName("donation_type");
    const acknowledgeField = document.getElementById("acknowledge");

    donationTypeRadios.forEach((radioButton) => {
        radioButton.addEventListener('change', function () {
            if (this.value === 'honor' || this.value === 'memory') {
                acknowledgeField.style.display = 'inline-block';
            } else {
                acknowledgeField.style.display = 'none';
            }
        });
    });

    // Feature 9: Character Limit on Comments
    const comments = document.getElementById("comments");
    comments.addEventListener('input', function () {
        const charLimit = 200;
        if (this.value.length > charLimit) {
            alert("Character limit reached!");
            this.value = this.value.substring(0, charLimit);
        }
    });

    // Feature 10: Calculate Recurring Donation Total
    monthlyAmount.addEventListener('input', function () {
        const amount = parseFloat(this.value) || 0;
        const months = parseInt(monthsInput.value) || 0;
        const total = amount * months;

        let totalElement = document.getElementById("recurring_total");
        if (!totalElement) {
            totalElement = document.createElement('p');
            totalElement.id = "recurring_total";
            monthlyAmount.parentNode.appendChild(totalElement);
        }
        totalElement.textContent = `Total donation for ${months} months: $${total}`;
    });

   form.addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent actual submission
    if (validateForm() && validatePassword()) {
        alert("Form validated successfully! (Test Mode: No actual submission)");
    }
});

});
