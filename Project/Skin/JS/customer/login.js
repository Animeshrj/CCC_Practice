document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    // Here you can add your login logic
    // For example, you can send an AJAX request to a server to validate the credentials
    
    console.log("Username:", username);
    console.log("Password:", password);
  });
  