// $(document).on("click","#download-template",async function(){
//     const myElement2 = document.querySelector('#download-show');
//     Swal.fire({
//      title: '<p class="text-center text-white" style="font-size: 25px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 700;">Download</p>',
//      html:myElement2,
//      customClass: 'swal-wide',
//      focusConfirm: false,
//      preConfirm: () => {
//        // return [{
//        //     "_token":document.getElementById('token').value,
//        //     "user_id":document.getElementById('user_id').value,
//        //     "title":document.getElementById('title').value,
//        //     "body":document.getElementById('body').value
//        // }]
//      }
//    })
   
//    if (formValues) {
      
//    }
// });

// $(document).on("submit","#download-show",function(e){
//     e.preventDefault();
//     var name = $("#download-name").val();
//     var type;

//     if( $('#status-small:checked').length ){
//         type="png";
//       }
//       else{
//         type="jpeg";
//       }
    
//     html2canvas(document.getElementById("html-content-holder"), {
//         allowTaint: true, useCORS: true
//     }).then(function (canvas) {
//         var anchorTag = document.createElement("a");
//         document.body.appendChild(anchorTag);
//         document.getElementById("previewImg").appendChild(canvas);
//         anchorTag.download = name + "."+type;
//         anchorTag.href = canvas.toDataURL();
//         anchorTag.target = '_blank';
//         anchorTag.click();
//         swal.close();
//     });
// });
