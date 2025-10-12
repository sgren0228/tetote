document.addEventListener('DOMContentLoaded', function() {

  // スライドショーの処理
  const slides = document.querySelectorAll('.fv-slideshow__item');
  
  // スライドが2枚以上ある場合のみ実行
  if (slides.length > 1) {
    let currentIndex = 0;
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

});

document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.slideshow-track');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    const images = Array.from(track.children);
    
    // 1枚あたりのスライド移動量を計算 (6枚中の1枚分)
    const slideWidth = 100 / 6;

    let currentIndex = 0;
    const maxIndex = images.length - 4; // 3枚表示なので、移動できるのは (全長 - 表示枚数) 分

    function updateSlidePosition() {
        track.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
    }

    function updateArrows() {
        if (currentIndex === 0) {
            prevArrow.classList.add('hidden');
        } else {
            prevArrow.classList.remove('hidden');
        }

        if (currentIndex === maxIndex) {
            nextArrow.classList.add('hidden');
        } else {
            nextArrow.classList.remove('hidden');
        }
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

    // 初期状態の設定
    updateArrows();
});