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