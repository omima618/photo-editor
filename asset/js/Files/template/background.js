$(document).on("click","#background-template",async function(){
    var token = $('meta[name="csrf-token"]').attr('content');
    var myElement2 = $('#background-show');
    var AllElemen = myElement2 != null?myElement2:AllElemen;
    console.log(AllElemen);
    const { value: formValues } = await Swal.fire({
     title: '<p class="text-center text-white" style="font-size: 25px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 700;">Upload</p>',
     'html':myElement2 != null?myElement2:AllElemen,
     customClass:"swal2-popup-background",
     focusConfirm: false,

     preConfirm: () => {
       // return [{
       //     "_token":document.getElementById('token').value,
       //     "user_id":document.getElementById('user_id').value,
       //     "title":document.getElementById('title').value,
       //     "body":document.getElementById('body').value
       // }]
     }
   })
   
   if (formValues) {
      
   }

});

$(document).on("click","#videoPreview",function(){
    let idMenu = $(this).attr("data-id");
    let browseFile = $('#videoUpload'); 
    let resumable = new Resumable({
    target:  Base_Url + "Dashboard/template/upload/video",
    query:{_token:$('meta[name="csrf-token"]').attr('content'),id:idMenu},
    fileType: ["mpeg","ogg","mp4","webm","3gp","mov","flv","avi","wmv","ts"],
    headers: {
        'Accept' : 'application/json'
    },
    testChunks: false,
    throttleProgressCallbacks: 1,
});

resumable.assignBrowse(browseFile[0])
resumable.on('fileAdded', function (file) { 
   
    resumable.upload() ;
     AmagiLoader.show();
});
resumable.on('fileSuccess', function (file, response) {
    var randomStringb = randomString();
    AmagiLoader.show();
   $("#html-content-holder").append(` 
        <video  layer-target="target${randomStringb}" layer-type="video" data-id="0" data-type="background" class="shape border resize-drag rounded-xl border-gray-800" src="${Base_Url +  JSON.parse(response).image }" style="z-index:${zindex};border-color:#414040;height: 100px!important" height="100px" width="150px" autoplay muted loop>
            <source src="${Base_Url +  JSON.parse(response).video }" type="video/mp4">
            <source src="${Base_Url +  JSON.parse(response).video }" type="video/ogg">
        </video>
   `)
   SaveCacheDateToLayer("target"+randomStringb,"background",zindex);
   zindex++;
   AmagiLoader.hide();
   Swal.close();
}); 
});


$(document).on("click","#imagePrevieww",function(){
    let idMenu = $(this).attr("data-id");
    let browseFile = $('#imageUpload'); 
    let resumable = new Resumable({
    target:  Base_Url + "Dashboard/template/upload/image",
    query:{_token:$('meta[name="csrf-token"]').attr('content'),id:idMenu},
    fileType: ["jpg","png","jpeg"],
    headers: {
        'Accept' : 'application/json'
    },
    testChunks: false,
    throttleProgressCallbacks: 1,
});

resumable.assignBrowse(browseFile[0])
resumable.on('fileAdded', function (file) { 
     AmagiLoader.show();
    resumable.upload() 
});
resumable.on('fileSuccess', function (file, response) {
        var randomStringb = randomString();
        AmagiLoader.show();
        $(".preview").append(`<img layer-target="target${randomStringb}" layer-type="background" data-id="0" data-type="background" class="shape border resize-drag max-w-full max-h-full  border-gray-800" src="${Base_Url +  JSON.parse(response).image }" style="z-index:${zindex};border-color:#414040;height: 100px!important" height="100px" width="150px">`);
         SaveCacheDateToLayer("target"+randomStringb,"background",zindex);
        zindex++;
        AmagiLoader.hide();
        Swal.close();
}); 
});
