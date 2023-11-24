$(document).on("click","#list-template",async function(){
    var token = $('meta[name="csrf-token"]').attr('content');
    var myElement3 = $('#list-show');
    var AllElemen = myElement3 != null?myElement3:AllElemen;
    console.log(myElement3);
    const { value: formValues } = await Swal.fire({
     title: '<p class="text-center text-white" style="font-size: 25px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 700;">Create new list</p>',
     html:AllElemen,
     customClass:"swal2-popup-list",
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


$(document).on("submit","#list-form",function(e){
    e.preventDefault();

    // TO TRY ADDING LIST COMMENT LINES FROM 32 TO 58 & UNCOMMENT LINES FROM 60 TO 74 
    
    $.post({
        url:Base_Url+"Dashboard/template/List",
        data:$(this).serializeArray()
    }).then((data)=>{
        console.log(data);
        Swal.fire('Saved!', '', 'success');
        Swal.close();
        var products = "";
        var randomStringb = randomString();
        for(var i= 0;i <= 4; i++){
            products +='<div class="card-header grid grid-cols-2 px-5 py-2"style="color: #fff;height: 40px;"><div class="flex" style="font-size: 17px;align-self: center;">Product</div><div class="flex" style="font-size: 17px;    justify-content: right;"></div></div>';
        }
        $('.preview').append(`
            <div layer-type="list" layer-target="target${randomStringb}" data-id="0" data-type="list" class="shape resize-drag grid grid-cols-1 border border-white rounder text-white mr-2 relative"
            style="text-align:center;width: fit-content;z-index:${zindex}">
            <h3 class="block-title color-white">List</h3>
                ${products}
            </div>
        `);
        SaveCacheDateToLayer("target"+randomStringb, "list", zindex, "list");
        zindex++;
        // setInterval(function(){ 
        //     $(this).reload();      
        // }, 3000);
    }).catch((error)=>{

    });
    
    // Swal.close();
    // var products = "";
    // var randomStringb = randomString();
    // for(var i= 0;i <= 4; i++){
    //     products +='<div class="card-header grid grid-cols-2 px-5 py-2"style="color: #fff;height: 40px;"><div class="flex" style="font-size: 17px;align-self: center;">Product</div><div class="flex" style="font-size: 17px;    justify-content: right;"></div></div>';
    // }
    // $('.preview').append(`
    //     <div layer-type="list" layer-target="target${randomStringb}" data-id="0" data-type="list" class="shape resize-drag grid grid-cols-1 border border-white rounder text-white mr-2 relative"
    //     style="text-align:center;width: fit-content;z-index:${zindex}">
    //     <h3 class="block-title color-white">List</h3>
    //         ${products}
    //     </div>
    // `);
    // SaveCacheDateToLayer("target"+randomStringb,"list",zindex, "list");
    // zindex++;
});


function handleClick(cb) {
    cb.value = cb.checked ? 1 : 0;
}

