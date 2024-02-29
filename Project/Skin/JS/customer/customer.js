document.getElementById("registrationForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Retrieve form data
    var formData = new FormData(event.target);

    // Convert FormData to JSON
    var jsonData = {};
    formData.forEach(function (value, key) {
        jsonData[key] = value;
    });

    // Display JSON data (for demonstration)
    console.log(jsonData);

    // Here you can send the JSON data to your server using AJAX or any other method
});