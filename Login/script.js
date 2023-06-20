const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function goToSignUpPage() {
  window.location.href = "/EcommercePlat/Register/SignUp.php";
}

function validateForm(event) {
  event.preventDefault();

  var usernameInput = document.getElementById("username");
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

  if (passwordInput.value === "") {
    errorMessage.innerText = "Mohon masukkan password.";
    passwordInput.parentNode.insertBefore(errorMessage, passwordInput.nextSibling);
    return;
  }

  // Jika validasi berhasil, lakukan pengiriman form atau aksi lainnya
  event.target.submit();
}