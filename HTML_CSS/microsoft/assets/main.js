window.addEventListener("scroll", function () {
  const text = document.querySelector(".scrolling-text");
  const textPosition = text.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3; // Điều chỉnh vị trí để kích hoạt hiệu ứng

  if (textPosition < screenPosition) {
    text.classList.add("active");
  } else {
    text.classList.remove("active");
  }
});

window.addEventListener("scroll", function () {
  const text = document.querySelector(".slide-up");
  const textPosition = text.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3; // Điều chỉnh vị trí để kích hoạt hiệu ứng

  if (textPosition < screenPosition) {
    text.classList.add("active");
  } else {
    text.classList.remove("active");
  }
});

window.addEventListener("scroll", function () {
  const text = document.querySelector(".ft-father");
  const textPosition = text.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3; // Điều chỉnh vị trí để kích hoạt hiệu ứng

  if (textPosition < screenPosition) {
    text.classList.add("active");
  } else {
    text.classList.remove("active");
  }
});
