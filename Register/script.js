// script.js

function goToLoginPage() {
  window.location.href = "/EcommercePlat/Login/SignIn.php";
}

function validateForm(event) {
  event.preventDefault();

  var usernameInput = document.getElementById("username");
  var emailInput = document.getElementById("email");
  var passwordInput = document.getElementById("password");

  var errorMessage = document.createElement("p");
  errorMessage.classList.add("error-message");

  // Menghapus pesan error sebelumnya
  var existingErrorMessage = document.querySelector(".error-message");
  if (existingErrorMessage) {
    existingErrorMessage.remove();
  }

  // Validasi input pengguna
  if (usernameInput.value.trim() === "") {
    errorMessage.innerText = "Mohon masukkan username.";
    usernameInput.parentNode.insertBefore(errorMessage, usernameInput.nextSibling);
    return;
  }

  if (emailInput.value.trim() === "") {
    errorMessage.innerText = "Mohon masukkan email.";
    emailInput.parentNode.insertBefore(errorMessage, emailInput.nextSibling);
    return;
  }

  if (!isValidEmail(emailInput.value.trim())) {
    errorMessage.innerText = "Mohon masukkan email yang valid.";
    emailInput.parentNode.insertBefore(errorMessage, emailInput.nextSibling);
    return;
  }

  if (passwordInput.value.trim() === "") {
    errorMessage.innerText = "Mohon masukkan password.";
    passwordInput.parentNode.insertBefore(errorMessage, passwordInput.nextSibling);
    return;
  }

  // Jika validasi berhasil, lanjutkan dengan mengirim form
  event.target.submit();
}

function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
