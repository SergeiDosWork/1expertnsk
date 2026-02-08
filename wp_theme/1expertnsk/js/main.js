function animOpenMain() {
    let square = document.querySelector('#text_free');
      let square2 = document.querySelector('#text_free_2');

      let observer = new IntersectionObserver(entries => {
          entries.forEach(entry => {
              if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
                  return;
              }

              if (entry.isIntersecting) {
                  entry.target.classList.add('text_free_animation');
              }
          });
      });

      observer.observe(square);
      observer.observe(square2);
  }

  animOpenMain();