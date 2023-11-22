
var i = 0.1;
var total=1.0;
var templatetransform ;
var zoomCount= 10;
$(document).on("click","#zoomin",function(){
    var GFG = $(".preview");
    var transformexysi = $(".preview").css('transform');
    templatetransform = templatetransform !== undefined?templatetransform:transformexysi; 
    GFG.css("transform" ,"scale("+(i+total)+")");
    zoomCount = zoomCount+5;
    $("#count-zoom").text((zoomCount)+"%");
    
    total = i+total;
});

$(document).on("click","#zoomout",function(){
    console.log(total);
    var GFG = $(".preview");
    var transformexysi = $(".preview").css('transform');
    templatetransform = templatetransform !== undefined?templatetransform:transformexysi; 
    if(total > 1.0){
         GFG.css("transform","scale("+(total-0.1)+")");
         zoomCount = zoomCount-5;
         $("#count-zoom").text(zoomCount+"%");
         total-=0.1;
    }

});

$(document).on("click","#template-lock",function(){
    if($(".preview").hasClass("resize-drag")){
        $("#html-content-holder").removeClass("resize-drag");
        $(this).empty();
        $(this).append(`
        <svg width="24" height="25" style="display: inline;" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.0001 19.2503C10.9801 19.2503 10.0401 18.7903 9.42005 17.9803C9.17005 17.6503 9.23005 17.1803 9.56005 16.9303C9.89005 16.6803 10.3601 16.7403 10.6101 17.0703C10.9401 17.5103 11.4501 17.7503 12.0001 17.7503C12.9601 17.7503 13.7501 16.9603 13.7501 16.0003C13.7501 15.6103 13.6301 15.2403 13.3901 14.9403C13.1401 14.6103 13.2001 14.1403 13.5301 13.8903C13.8601 13.6403 14.3301 13.7003 14.5801 14.0303C15.0201 14.6003 15.2501 15.2803 15.2501 16.0003C15.2501 17.7903 13.7901 19.2503 12.0001 19.2503Z" fill="white" fill-opacity="0.6"/>
        <path d="M12.0001 18.5003C11.8916 18.5003 11.7844 18.4936 11.679 18.4805C11.785 18.4936 11.8922 18.5003 12.0001 18.5003ZM12.0001 18.5003C13.3758 18.5003 14.5001 17.3761 14.5001 16.0003C14.5001 17.3745 13.3743 18.5003 12.0001 18.5003Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
        <path d="M17 22.75H7C6.63 22.75 6.28 22.74 5.95 22.72C5.54 22.7 5.22 22.34 5.24 21.93C5.26 21.52 5.61 21.22 6.03 21.22C6.33 21.24 6.65 21.24 6.99 21.24H16.99C20.56 21.24 21.24 20.56 21.24 16.99V14.99C21.24 11.48 20.5 10.91 17.95 10.76C17.65 10.74 17.33 10.74 16.99 10.74H7C3.43 10.74 2.75 11.42 2.75 14.99V16.99C2.75 18.73 2.95 19.76 3.41 20.32C3.67 20.64 3.62 21.12 3.29 21.37C2.97 21.63 2.5 21.58 2.24 21.25C1.54 20.4 1.25 19.16 1.25 17V15C1.25 10.59 2.59 9.25 7 9.25H17C17.37 9.25 17.72 9.26 18.04 9.28C22 9.5 22.75 11.46 22.75 15V17C22.75 21.41 21.41 22.75 17 22.75Z" fill="white" fill-opacity="0.6"/>
        <path d="M6.00764 21.9721C6.01045 21.9715 6.01351 21.9711 6.01682 21.9707C6.33077 21.99 6.65863 21.99 6.97624 21.99H6.99H16.99C17.5309 21.99 18.0252 21.975 18.4729 21.9339C18.0421 21.9778 17.5539 22 17 22H7C6.64804 22 6.31735 21.9906 6.00764 21.9721ZM20.9984 20.9984C20.7483 21.2486 20.4255 21.4532 20.0017 21.6109C20.3721 21.466 20.7034 21.2648 20.9841 20.9841C21.2648 20.7034 21.466 20.3721 21.6109 20.0018C21.4532 20.4255 21.2485 20.7483 20.9984 20.9984ZM22 17C22 17.5539 21.9778 18.0421 21.9339 18.4729C21.975 18.0252 21.99 17.5309 21.99 16.99V14.99C21.99 14.0937 21.9434 13.3433 21.8201 12.7231C21.7816 12.5294 21.7347 12.3438 21.6776 12.1672C21.9074 12.8706 22 13.794 22 15V17ZM2.17168 19.2426C2.2574 19.6772 2.3835 20.0716 2.57109 20.4114C2.2028 19.7601 2 18.7651 2 17V16.99C2 17.8824 2.05074 18.6295 2.17168 19.2426Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5"/>
        <mask id="path-5-inside-1_925_4063" fill="white">
        <path d="M6 10.75C5.59 10.75 5.25 10.41 5.25 10V8C5.25 5.1 5.95 1.25 12 1.25C16.07 1.25 18.18 2.58 18.64 5.44C18.71 5.85 18.43 6.23 18.02 6.3C17.61 6.37 17.23 6.09 17.16 5.68C16.91 4.16 16.12 2.75 12 2.75C7.64 2.75 6.75 4.85 6.75 8V10C6.75 10.41 6.41 10.75 6 10.75Z"/>
        </mask>
        <path d="M6 10.75C5.59 10.75 5.25 10.41 5.25 10V8C5.25 5.1 5.95 1.25 12 1.25C16.07 1.25 18.18 2.58 18.64 5.44C18.71 5.85 18.43 6.23 18.02 6.3C17.61 6.37 17.23 6.09 17.16 5.68C16.91 4.16 16.12 2.75 12 2.75C7.64 2.75 6.75 4.85 6.75 8V10C6.75 10.41 6.41 10.75 6 10.75Z" fill="white" fill-opacity="0.6"/>
        <path d="M18.64 5.44L17.159 5.6782L17.1602 5.68533L17.1614 5.69244L18.64 5.44ZM17.16 5.68L15.6799 5.92344L15.6814 5.93244L17.16 5.68ZM6 9.25C6.41843 9.25 6.75 9.58157 6.75 10H3.75C3.75 11.2384 4.76157 12.25 6 12.25V9.25ZM6.75 10V8H3.75V10H6.75ZM6.75 8C6.75 6.61366 6.93185 5.32715 7.58346 4.40002C8.15855 3.58178 9.31596 2.75 12 2.75V-0.25C8.63404 -0.25 6.41645 0.84322 5.12904 2.67498C3.91815 4.39785 3.75 6.48634 3.75 8H6.75ZM12 2.75C13.9069 2.75 15.1233 3.06792 15.8734 3.54115C16.5499 3.96789 16.9868 4.60743 17.159 5.6782L20.121 5.2018C19.8332 3.41257 18.9851 1.95711 17.4741 1.00385C16.0367 0.0970814 14.1631 -0.25 12 -0.25V2.75ZM17.1614 5.69244C17.0865 5.25385 17.3933 4.88529 17.7676 4.8214L18.2724 7.7786C19.4667 7.57471 20.3335 6.44615 20.1186 5.18756L17.1614 5.69244ZM17.7676 4.8214C18.2062 4.74651 18.5747 5.0533 18.6386 5.42756L15.6814 5.93244C15.8853 7.1267 17.0138 7.99349 18.2724 7.7786L17.7676 4.8214ZM18.6401 5.43656C18.4848 4.49228 18.1123 3.3063 16.9152 2.43313C15.7928 1.61447 14.1833 1.25 12 1.25V4.25C13.9367 4.25 14.7822 4.59053 15.1473 4.85687C15.4377 5.0687 15.5852 5.34772 15.6799 5.92344L18.6401 5.43656ZM12 1.25C9.61366 1.25 7.76509 1.82401 6.58882 3.23209C5.46393 4.57866 5.25 6.35741 5.25 8H8.25C8.25 6.49259 8.48107 5.64634 8.89118 5.15541C9.24991 4.72599 10.0263 4.25 12 4.25V1.25ZM5.25 8V10H8.25V8H5.25ZM5.25 10C5.25 9.58157 5.58157 9.25 6 9.25V12.25C7.23843 12.25 8.25 11.2384 8.25 10H5.25Z" fill="white" fill-opacity="0.6" mask="url(#path-5-inside-1_925_4063)"/>
        <path d="M1.99994 22.7504C1.80994 22.7504 1.61994 22.6804 1.46994 22.5304C1.17994 22.2404 1.17994 21.7604 1.46994 21.4704L21.4699 1.47043C21.7599 1.18043 22.2399 1.18043 22.5299 1.47043C22.8199 1.76043 22.8199 2.24043 22.5299 2.53043L2.52994 22.5304C2.37994 22.6804 2.18994 22.7504 1.99994 22.7504Z" fill="white" fill-opacity="0.6"/>
        </svg>
            <p>UnLock</p>
        `);
    }else{
        $(".preview").addClass("resize-drag");
        $(this).empty();
        $(this).append(`
            <svg  width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>  
            <p>Lock</p>
        `);
    }
   
});
  

  

$(document).on("click","#all-templates",async function(e){
   
    var myElement = $('#template-show');
    Swal.fire({
     title: '<p class="text-center text-white" style="font-size: 20px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 400;">Open from Existing templates</p>',
     html:myElement,
     customClass:"swal2-popup-template",
     focusConfirm: false,
   });
});

$(document).on("dblclick",".use-template",function(){
    var id = $(this).attr("data-id");
    $.get({
        url:Base_Url+"Dashboard/template/get/template/"+id,
    }).then((data)=>{
        $("#html-content-holder").empty();
        $("#html-content-holder").append(`${data.content}`);
        Swal.close();
    });
});



$(document).on("keyup", "#template-name", function() {
    var value = $(this).val();

    $.post({
        url: "{{ route('dashboard.template.update', $menu->id) }}",
        data: {
            'name': value,
            _token: '{{ csrf_token() }}'
        }
    }).then((data) => {
        $(this).val(data.name);
    }).catch((error) => {
        console.log(error);
    });
});



$(document).on("input","#preview-background",function(){
	$(".preview").css("background-color",$(this).val());
});


$(document).on("click","#preview-opacity",function(){
	$(".preview").css("background-color","#0000");
});

$(document).on("click",".close-layer",function(){
    $("#dropdownLeftEnd").addClass("hidden");
    $("#dropdownLeftEnd").removeClass("block");
})
$(document).on("click","#dropdownLeftEndButton",function(){
    $("#dropdownLeftEnd").addClass("block");
    $("#dropdownLeftEnd").removeClass("hidden");
    $("#dropdownLeftEnd").css("position","absolute");
    $("#dropdownLeftEnd").css("right","20%");
    $("#dropdownLeftEnd").css("transform","translate(-52px, -120px)");

})


