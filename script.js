// Mengambil elemen kolom username dan password
var usernameInput = document.getElementById("username");
var passwordInput = document.getElementById("password");

// Menambahkan event listener untuk peristiwa klik pada kolom username
usernameInput.addEventListener("click", function() {
  this.style.color = "rgb(223, 67, 67)";
});

// Menambahkan event listener untuk peristiwa klik pada kolom password
passwordInput.addEventListener("click", function() {
  this.style.color = "rgb(223, 67, 67)";
});
