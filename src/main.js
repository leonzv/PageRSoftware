const swiper1 = new Swiper('.swiper1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    autoplay: {
        delay: 5000,
      },
      paginationType: "custom",
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    autoplay: {
        delay: 5000,
      },
      paginationType: "custom",
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  function goRupture(){
    location.href = "https://rupturesoftware.com.br/";
  }
