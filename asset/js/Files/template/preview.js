$(document).on("click","#preview-template",async function(){
    // $(".swal2-popup-list").remove();
    // html2canvas(document.getElementById("html-content-holder"), {
    //     allowTaint: true, useCORS: true
    // }).then(function (canvas) {
    //     var anchorTag = document.createElement("a");
    //     document.body.appendChild(anchorTag);
    //     $(".preview-Img").append(canvas);
    // });
    var myElement = $("#body-design").html();
Swal.fire({
     title: '<p class="text-center text-white" style="font-size: 15px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 400;">File name</p>',
     html:myElement,
     customClass:"swal2-popup-preivew",
     focusConfirm: false,
   });
});

Swal.close();