$(function () {
  $(".slider__list").slick({
    infinite: true,
    dots: true,
		centerMode: true,
    centerPadding: "5px",
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
					centerPadding: "0px",
        },
      },
      {
        breakpoint: 560,
        settings: {
					centerMode: false,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  wow = new WOW({
    boxClass: "wow", // default
    animateClass: "animate__animated", // default
    offset: 0, // default
    mobile: true, // default
    live: true, // default
  });
  wow.init();

  $(".menu__btn").on("click", function (e) {
    $(".menu__btn").toggleClass("active");
    $(".menu__list").toggleClass("active");
  });
});
