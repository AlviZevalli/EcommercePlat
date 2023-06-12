// Ambil elemen toggle dark mode
const toggleDarkMode = document.getElementById('toggle-dark-mode');

// Ketika toggle dark mode ditekan
toggleDarkMode.addEventListener('click', function() {
  // Tambahkan/menghapus class 'dark-mode' pada body
  document.body.classList.toggle('dark-mode');
});