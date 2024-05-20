// toggle
const navslide = () => {
  const burger = document.querySelector(".burger");
  const navslide = document.querySelector("nav");

  burger.addEventListener("click", () => {
    navslide.classList.toggle("nav-active");
    burger.classList.toggle("toggle-burger");
  });
};

navslide();

//clear form before unload
window.onbeforeunload = () => {
  for (const form of document.getElementsByTagName("form")) {
    form.reset();
  }
};
