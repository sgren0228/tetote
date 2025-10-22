document.addEventListener('DOMContentLoaded', () => {

  // FV スライドショーの処理
  const slides = document.querySelectorAll('.fv-slideshow__item');
  if (slides.length > 1) {
    const slideInterval = 4000; // 4秒ごとにスライドを切り替え (ミリ秒)

    // 初期状態で最初のスライドにis-activeがない場合、ここで付与する
    if (!document.querySelector('.fv-slideshow__item.is-active')) {
        slides[0].classList.add('is-active');
    }

    setInterval(() => {
      // 現在のスライドのインデックスを探す
      let currentActiveIndex = -1;
      slides.forEach((slide, index) => {
          if (slide.classList.contains('is-active')) {
              currentActiveIndex = index;
          }
      });

      if (currentActiveIndex !== -1) {
          slides[currentActiveIndex].classList.remove('is-active');
          const nextIndex = (currentActiveIndex + 1) % slides.length;
          slides[nextIndex].classList.add('is-active');
      }
    }, slideInterval);
  }

  // Member スライドショーの処理
  const track = document.querySelector('.slideshow-track');
  const prevArrow = document.querySelector('.prev-arrow');
  const nextArrow = document.querySelector('.next-arrow');

  if (track && prevArrow && nextArrow) {
    const images = Array.from(track.children);
    const slideWidth = 100 / 6;
    let currentIndex = 0;
    const maxIndex = images.length - 4;

    function updateSlidePosition() {
        track.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
    }

    function updateArrows() {
        prevArrow.classList.toggle('hidden', currentIndex === 0);
        nextArrow.classList.toggle('hidden', currentIndex === maxIndex);
    }

    nextArrow.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlidePosition();
            updateArrows();
        }
    });

    prevArrow.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlidePosition();
            updateArrows();
        }
    });

    updateArrows();
  }

  // ハンバーガーメニューの処理
  const hamburger = document.getElementById('hamburger');
  const headerMenu = document.querySelector('.header-menu');
  const header = document.getElementById('header');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('is-active');
        headerMenu.classList.toggle('is-active');
        header.classList.toggle('is-active');
    });

    //ヘッダー切り替え
    window.addEventListener('load', () => {
        const fv = document.getElementById('fv');
        if (fv) {
            const fvHeight = fv.offsetHeight;
            
            window.addEventListener('scroll',() => {
                if (window.scrollY > fvHeight) {
                    header.classList.add('is-scroll');

                } else {
                    header.classList.remove('is-scroll');
                }
            });
        }
    });
});
