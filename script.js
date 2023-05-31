window.addEventListener('DOMContentLoaded', (event) => {
    const currentDateElement = document.getElementById('currentDate');
    const currentDate = new Date();
    const date = currentDate.getDate();
    const month = currentDate.toLocaleString('default', { month: 'long' });
    const sliderImages = document.querySelectorAll('.header-slider img');
    let currentImageIndex = 0;
  
    // Mengganti konten teks pada elemen tanggal dengan tanggal dan bulan saat ini
    currentDateElement.innerHTML = `<span style="font-weight: bold;">${date}</span><span style="font-size: 1rem;">${month}</span>`;
  
    // Mendapatkan elemen dengan kelas "headertitle"
    const headerTitle = document.querySelector('.headertitle');
  
    // Mendapatkan semua elemen span di dalam kelas "animated-text"
    const animatedText = document.querySelectorAll('.animated-text span');
  
    // Mendapatkan tinggi window saat ini
    let previousScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
    let isScrollingUp = false;
  
    // Mendeteksi pergerakan scroll
    window.addEventListener('scroll', function() {
      const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  
      // Menentukan arah scroll
      isScrollingUp = currentScrollPosition < previousScrollPosition;
      previousScrollPosition = currentScrollPosition;
  
      // Menambahkan atau menghapus kelas "fade-out" dan "fade-in" berdasarkan arah scroll
      if (isScrollingUp) {
        headerTitle.classList.remove('fade-out');
        headerTitle.classList.add('fade-in');
      } else {
        headerTitle.classList.remove('fade-in');
        headerTitle.classList.add('fade-out');
      }
    });
  
    function changeImage() {
      sliderImages[currentImageIndex].classList.remove('active');
      currentImageIndex = (currentImageIndex + 1) % sliderImages.length;
      sliderImages[currentImageIndex].classList.add('active');
    }
  
    setInterval(changeImage, 5000);
  
    // Mengatur efek ketik satu persatu
    const typingEffect = () => {
      animatedText.forEach((char, index) => {
        setTimeout(() => {
          char.classList.add('visible');
        }, 200 * index);
      });
    };
  
    typingEffect();
  });
  