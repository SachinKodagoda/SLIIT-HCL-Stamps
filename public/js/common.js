function showModal(id) {
  document.getElementById("uploadModalBack").style.display = "block";
  document.getElementById("commonModal").style.display = "block";
  document.getElementById(id).style.display = "block";
}

function hideModal() {
  document.getElementById("uploadModalBack").style.display = "none";
  document.getElementById("commonModal").style.display = "none";
}

$(document).ready(function () {
  $("#msg-flash").delay(3000).fadeOut();
});

function navFunction(loc, action) {
  if (action) {
    location.replace(loc);
  }
}

$(function () {
  var scrl = $("#scrollToItem").val();
  if (scrl !== '' && $("#"+scrl).length) {
    $("html, body").animate(
      {
        scrollTop: $("#"+scrl).offset().top,
      },
      800,
      function () {
        // window.location.hash = hash;
      }
    );
  }

  // $("a").on("click", function (event) {
  //   if (this.hash !== "") {
  //     event.preventDefault();
  //     var hash = this.hash;
  //     $("html, body").animate(
  //       {
  //         scrollTop: $(hash).offset().top,
  //       },
  //       800,
  //       function () {
  //         window.location.hash = hash;
  //       }
  //     );
  //   }
  // });
});
