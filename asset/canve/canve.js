$(document).on("click","#circle",function(){
      var randomStringb = randomString();
    $(".preview").append(`
  
    <canves data-id="0" data-type="shape" layer-type="shape" layer-target="target${randomStringb}" class="box myCanvas resize-drag  shape max-w-full max-h-full border border-gray-800 rounded rounded-full relative " style="z-index:${zindex};border-width: 5px;width:90px;height:90px;border-color:#fff;">
                                   
                                    
    </canves>
 
    `);
    var c = document.getElementsByClassName("myCanvas");
    // var ctx = c.getContext("2d");
    // ctx.beginPath();
    // ctx.arc(95,50,40,0,2*Math.PI);
    // ctx.stroke();
   	SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "circle");
    zindex++;
});

$(document).on("click","#Square",function(){
     var randomStringb = randomString();
    $(".preview").append(`

    <canves data-id="0" data-type="shape"   layer-type="shape" layer-target="target${randomStringb}" class="myCanvasss resize-drag  shape max-w-full max-h-full border border-gray-800 rounded rounded-xl  resize-drag " style="z-index:${zindex};border-width: 5px;border-color:#fff;width:60px;height:90px!important;">
  
    </canves>
    
    `);

    const canvas = document.getElementsByClassName("myCanvasss");
    // const ctx = canvas.getContext("2d");

    // ctx.beginPath();
    // ctx.rect(20, 20, 150, 100);
    // ctx.stroke();
     SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "Square");
    zindex++;
});

$(document).on("click","#hexagon",function(){
     var randomStringb = randomString();
    $(".preview").append(`

    <canves data-id="0" data-type="shape"  layer-type="shape" layer-target="target${randomStringb}" class=" resize-drag  shape max-w-full max-h-full border border-gray-800 rounded rounded-xl  resize-drag " style="z-index:${zindex};background-color:#000;border-width: 5px;border-color:#000;-webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 47% 100%, 0% 75%, 0% 25%);width: 139px!important;
    height: 138px;;
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);">
        </canves>

    `);
     SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "hexagon");
    zindex++;
});

$(document).on("click","#rectangular",function(){
     var randomStringb = randomString();
    $(".preview").append(`

    <canves data-id="0" data-type="shape"  layer-type="shape" layer-target="target${randomStringb}" class="myCanvass resize-drag  shape max-w-full max-h-full border border-gray-800 rounded rounded-xl  resize-drag " style="  position:z-index:${zindex};border-width: 5px;border-color:#fff;width:90px;height:45px!important;">
    
    </canves>
    `);
    const canvas = document.getElementsByClassName("myCanvass");
    // const ctx = canvas.getContext("2d");

    // // Define a new path:
    // ctx.beginPath();

    // // Define a start point
    // ctx.moveTo(20,20);

    // // Define points
    // ctx.lineTo(175,20);
    // ctx.lineTo(175,100);
    // ctx.lineTo(20,100);
    // ctx.lineTo(20,20);

    // // Draw it
    // ctx.stroke();
     SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "rectangular");
    zindex++;
});

$(document).on("click","#shape-right",function(){
     var randomStringb = randomString();
    $(".preview").append(`
        <canves data-id="0" data-type="shape"  layer-type="shape" layer-target="target${randomStringb}" class="bg-white resize-drag  shape max-w-full max-h-full border border-gray-800 rounded-xl  resize-drag " style="z-index:${zindex};border-width: 5px;border-color:#fff;width:120px;height:120px!important;-webkit-clip-path: polygon(100% 51%, 39% 53%, 40% 37%, 22% 61%, 41% 81%, 41% 66%, 100% 65%);clip-path: polygon(100% 51%, 39% 53%, 40% 37%, 22% 61%, 41% 81%, 41% 66%, 100% 65%);">  
        </canves>
    `);
     SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "shape-right");
    zindex++;
});

// Other Shape

$(document).on("click","#shape-left",function(){
     var randomStringb = randomString();
    $(".preview").append(`
        <canves data-id="0" data-type="shape"  layer-type="shape" layer-target="target${randomStringb}" class="bg-white resize-drag  shape max-w-full max-h-full border border-gray-800 rounded-xl  resize-drag " style="z-index:${zindex};border-width: 5px;border-color:#fff;width:120px;height:120px!important;-webkit-clip-path: polygon(0px 51%, 61% 53%, 60% 37%, 78% 61%, 59% 81%, 59% 66%, 0px 65%);clip-path: polygon(0px 51%, 61% 53%, 60% 37%, 78% 61%, 59% 81%, 59% 66%, 0px 65%);">
        </canves>
    `);
     SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "shape-left");
    zindex++;
});

$(document).on("click","#star",function(){
    var randomStringb = randomString();
    $(".preview").append(`
   
    <canves data-id="0" data-type="shape"  layer-type="shape" layer-target="target${randomStringb}" class="myCanvassssss resize-drag  shape max-w-full max-h-full border border-transparent bg-white rounded-xl  resize-drag w-[100px] h-[100px]" style="z-index:${zindex}; clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);">
        
    </canves>
    
    `);
    var canvas = document.getElementsByClassName('myCanvassssss');
        // var ctx = canvas.getContext('2d');

        // ctx.fillStyle = 'gray';

        // var points = [ [ 0, 85 ], [ 75, 75 ], [ 100, 10 ], [ 125, 75 ], 
        //     [ 200, 85 ], [ 150, 125 ], [ 160, 190 ], [ 100, 150 ], 
        //     [ 40, 190 ], [ 50, 125 ], [ 0, 85 ] ];
        
        // var len = points.length;

        // ctx.beginPath();
        // ctx.moveTo(points[0][0], points[0][1]);
        
        // for (var i = 0; i < len; i++) {
        //     ctx.lineTo(points[i][0], points[i][1]);
        // }        
        
        // ctx.fill(); 
        SaveCacheDateToLayer("target"+randomStringb,"shape",zindex, "star");
        zindex++;
});


// $(document).on("click","#rectangular",function(){
//     $(".preview").append(`
//     <div>
//     <div data-id="0" data-type="shape" class="shape border border-gray-800 rounded rounded-xl  resize-drag " style="border-width: 5px;border-color:#fff;width:90px;height:45px!important">
    
//     </div>
//     </div>
//     `);
// });


// $(document).on("click","#rectangular",function(){
//     $(".preview").append(`
//     <div>
//     <div data-id="0" data-type="shape" class="shape border border-gray-800 rounded rounded-xl  resize-drag " style="border-width: 5px;border-color:#fff;width:90px;height:45px!important">
    
//     </div>
//     </div>
//     `);
// });