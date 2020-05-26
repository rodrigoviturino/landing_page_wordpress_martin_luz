// Modal
// let boxModal = document.querySelector("#modal-control-spending");
// let modal = document.querySelector(".box-modal");
// let btn_close = document.querySelector("#modal-close");
// let video = document.querySelector("#video");

// boxModal.addEventListener("click", (event) => {
//   event.preventDefault();

//   document.querySelector("#video").addEventListener("click", (event) => {
//     event.preventDefault();
//     // event.currentTarget.init();
//   });
//   modal.classList.add("ativo");
// });

// btn_close.addEventListener("click", () => {
//   modal.classList.remove("ativo");

//   document.getElementById("video").pause();
//   document.getElementById("video").currentTime = 0;
// });

// $("#modal-close").on("hidden.bs.modal", function (e) {
//   $("#video iframe").attr("src", $("#video iframe").attr("src"));
// });

// const small = window.matchMedia(" (max-width: 575.98px)");

$(".carousel").carousel({
  interval: 2000,
});
// $(".carousel-indicators").css("display: none");

// $(document).ready(function () {
//   $("#carouselExampleInterval").carousel();
//   if ($(window).width() < 640) {
//     $(".col-sm-6").unwrap().addClass("item");
//     $(".col-sm-6:first").addClass("active");
//   }
// });

/*
 * remove the src from the video by clicking the modal close button and clicking the purple box to open the modal, add the src again
 */
window.addEventListener("load", function () {
  let btn_close = "";
  let src = "";
  let iframe = document.querySelector("#video1");
  btn_close = document.querySelector("#modal-btn-close");
  src_bkp = iframe.getAttribute("src");
  src = src_bkp;

  btn_close.addEventListener("click", function () {
    iframe.setAttribute("src", "");
  });

  document.querySelector(".box-card").addEventListener("click", function (e) {
    e.preventDefault();
    iframe.setAttribute("src", src_bkp);
  });
});
