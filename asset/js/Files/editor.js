
$(document).on("click", ".shape", function(){
	var target = randomString();
	$(this).attr("data-target",target);
	// $('.shape-border').attr("data-target",target);
	// $('.shape-background').attr("data-target",target); 
	// $('.shape-border-size').attr("data-target",target);
	// $('.shape-optciy').attr("data-target",target);
	// $('.shape-shadow-property').attr("data-target",target);
	// $('.shape-animate-property').attr("data-target",target);

	// $('#list-text-show-edit #color-text').attr("data-target",target);
	// $('#list-text-show-edit #font-size').attr("data-target",target);
	// $('#list-text-show-edit #font-fimaly').attr("data-target",target);
	
	// $('#list-text-show-edit #text-itlaic').attr("data-target",target);
	// $('#list-text-show-edit #text-underline').attr("data-target",target);
	// $('#list-text-show-edit #text-inline').attr("data-target",target);
	// $('#list-text-show-edit #text-bold').attr("data-target",target);
	// $('#list-text-show-edit #line-height').attr("data-target",target);
	// $('#list-text-show-edit #align').attr("data-target",target);
	

	$('#body-layer #layer-inital').attr("data-target",target);
	$('#body-layer #layer-text').attr("data-target",target);
	$('#body-layer #layer-background').attr("data-target",target);
	
	$('.header-lock-shape').attr("data-target",target);
	$('.header-delete-shape').attr("data-target",target);
	$('.header-lock-diplcated').attr("data-target",target);
	
	if ($('#list-shape-show').css('display') !== 'none') {
		$('#list-shape-show').slideToggle("slow");
	}
	// if ($('#text-template-show').css('display') !== 'none') {
	// 	$('#text-template-show').slideToggle("slow");
	// }
});

$(document).on("dblclick", ".shape", function(){
	var target = randomString();
	$(this).attr("data-target",target);

	$('.shape-border').attr("data-target",target);
	$('.shape-background').attr("data-target",target); 
	$('.shape-border-size').attr("data-target",target);
	$('.shape-border-raduis').attr("data-target",target);
	$('.shape-optciy').attr("data-target",target);
	$('.shape-animate-property').attr("data-target",target);

	$('#list-text-show-edit #color-text').attr("data-target",target);
	$('#list-text-show-edit #font-size').attr("data-target",target);
	$('#list-text-show-edit #font-fimaly').attr("data-target",target);
	
	$('#list-text-show-edit #text-itlaic').attr("data-target",target);
	$('#list-text-show-edit #text-underline').attr("data-target",target);
	$('#list-text-show-edit #text-inline').attr("data-target",target);
	$('#list-text-show-edit #text-bold').attr("data-target",target);
	$('#list-text-show-edit #line-height').attr("data-target",target);
	$('#list-text-show-edit #align').attr("data-target",target);

	$('#body-layer #layer-inital').attr("data-target",target);
	$('#body-layer #layer-text').attr("data-target",target);
	$('#body-layer #layer-background').attr("data-target",target);
	
	$('.header-lock-shape').attr("data-target",target);
	$('.header-delete-shape').attr("data-target",target);
	$('.header-lock-diplcated').attr("data-target",target);
	
	
	if ($('#list-shape-show').css('display') !== 'none') {
        $('#list-shape-show').slideToggle('slow');
	}
	
	if ($(this).data('type') === 'text' && $('#list-shape-show-edit').css('display') !== 'none') {
        $('#list-shape-show-edit').slideToggle('slow');
	}
	
    if ($(this).data('type') === 'shape' && $('#text-template-show').css('display') !== 'none') {
        $('#text-template-show').slideToggle('slow');
	}
	
	if($(this).attr("data-type") == "text" ){
		$("#clear-text-background").attr("data-target",target);
		$('.shape-shadow-property').attr("data-target",target);
		$('#text-template-show').slideToggle("slow");
	}else{
		$("#clear-shape-background").attr("data-target",target);
		$('.shape-shadow-property-2').attr("data-target",target);
		$('#list-shape-show-edit').slideToggle("slow");
	}
	
});

$(document).on('click', function (e) {
	if (
        $(e.target).closest('#text-template-show').length > 0 ||
        $(e.target).closest('#list-shape-show-edit').length > 0
    )
        return;
	
	var currentShape = $(e.target).closest('.shape');
	if (currentShape.length > 0) {
		if (currentShape.data('type') === 'shape' && $('#text-template-show').css('display') !== 'none') {
			$('#text-template-show').slideToggle("slow");
		}
		if (currentShape.data('type') === 'text' && $('#list-shape-show-edit').css('display') !== 'none') {
			$('#list-shape-show-edit').slideToggle("slow");
		}
		return;
	}

	if ($('#text-template-show').css('display') !== 'none') {
		$('#text-template-show').slideToggle("slow");
	}
	if ($('#list-shape-show-edit').css('display') !== 'none') {
		$('#list-shape-show-edit').slideToggle("slow");
	}
});

$(document).on('click', '#clear-shape-background', function () {
	$('.shape[data-target="' + $(this).data('target') + '"]').css('background-color', 'transparent');
});

$(document).on('click', '#clear-text-background', function () {
	$('.shape[data-target="' + $(this).data('target') + '"]').css('background-color', 'transparent');
});

$(document).on("click","#layer-text",function(){
	var result = $(this).attr("data-target");
// 	console.log(result);
// 	$("#html-content-holder").append(`
// 		<div>
// 		<div data-type="text" data-id="0"  contenteditable="true" spellcheck="false" class="resize-drag h-20 shape "  style="border:1px solid #fff;background-color: #0000;width:15%;color:#fff;position:absolute">
// 				Text
// 		</div>
// 	   </div>
// 	`);
	// }else{
	// 	$("div[data-target="+result+"]").append(`
    //         <div  contenteditable="true" spellcheck="false" class="h-20 shape box"  style="background-color: #0000;width:50%;border:1px solid #fff;color:#fff;">    
    //             Text     
    //     	</div>
	// 	`);
	// }
});

// Shape

$(document).on("input",".shape-border",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("border-color",$(this).val());
});

$(document).on("click","#clear-shape-background",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("background-color","#ffffff00");
});

$(document).on("click","#clear-text-background",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("background-color","#ffffff00");
});


$(document).on("input",".shape-background",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("background-color",$(this).val());
});
$(document).on("input",".shape-border-size",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("border-width",$(this).val()+"px");
});
$(document).on("input",".shape-border-raduis",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("border-radius",$(this).val()+"px");
});



$(document).on("input",".shape-optciy",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("opacity",$(this).val());
});

var typeshadow;
$(document).on("click",".default-type",function(e){
	if(e.target.checked){
		typeshadow = "inset";
	}else{
		typeshadow = "";
	}
});

$(document).on("input",".shape-shadow-property",function(){
	var result = $(this).attr("data-target");
	var xs=$(".xs").val()+"px";
	var ys=$(".ys").val()+"px";
	var blur = $(".blur-shadow").val()+"px";
	var spreed = $(".spreed").val()+"px";
	var color = $(".color").val();
	var valueShadow = ""+xs+" "+ys+" "+blur+" "+spreed+" "+color+"";
	console.log(valueShadow);
	if(typeshadow === "inset"){
		valueShadow = ""+typeshadow+" "+xs+" "+ys+" "+blur+" "+spreed+" "+color+"";
	}else{
		valueShadow = ""+xs+" "+ys+" "+blur+" "+spreed+" "+color+"";
	}
	$(".preview [data-target="+result+"]").css("box-shadow",valueShadow);
});


var typeshadow2;
$(document).on("click",".default-types",function(e){
	if(e.target.checked){
		typeshadow2 = "inset";
	}else{
		typeshadow2 = "";
	}
});

$(document).on("input",".shape-shadow-property-2",function(){
	var result = $(this).attr("data-target");
	var xs=$(".xss").val()+"px";
	var ys=$(".yss").val()+"px";
	var blur = $(".blur-shadows").val()+"px";
	var spreed = $(".spreeds").val()+"px";
	var color = $(".colors").val();
	var valueShadow = ""+xs+" "+ys+" "+blur+" "+spreed+" "+color+"";
	console.log(valueShadow);
	if(typeshadow2 === "inset"){
		valueShadow = ""+typeshadow2+" "+xs+" "+ys+" "+blur+" "+spreed+" "+color+"";
	}else{
		valueShadow = ""+xs+" "+ys+" "+blur+" "+spreed+" "+color+"";
	}
	$(".preview [data-target="+result+"]").css("box-shadow",valueShadow);
});



$(document).on("input",".shape-animate-property",function(){
	var result = $(this).attr("data-target");
	var className = $(".preview [data-target="+result+"]").attr("class");	
	$(".preview [data-target="+result+"]").attr("class",className.split("dot")[0]+" dot animate__animated animate__"+$(this).val()+" animate__delay-2s");
});





// Text Editor
$(document).on("input","#color-text",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("color",$(this).val());
});

$(document).on("input","#font-size",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("font-size",$(this).val()+"px");
});


$(document).on("input","#font-fimaly",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("font-family",$(this).val());
});

$(document).on("click","#text-bold",function(e){
	var result = $(this).attr("data-target");
	if(e.target.checked){
		$(".preview [data-target="+result+"]").css("font-weight","bolder");
	}else{
		$(".preview [data-target="+result+"]").css("font-weight","normal");
	}
});

$(document).on("click","#text-itlaic",function(e){
	var result = $(this).attr("data-target");
	if(e.target.checked){
		$(".preview [data-target="+result+"]").css("font-style","italic");
	}else{
		$(".preview [data-target="+result+"]").css("font-style","initial");
	}
});


$(document).on("click","#text-underline",function(e){
	var result = $(this).attr("data-target");
	if(e.target.checked){
		$(".preview [data-target="+result+"]").css("text-decoration","underline");
	}else{
		$(".preview [data-target="+result+"]").css("text-decoration","auto");
	}
});

$(document).on("click","#text-inline",function(e){
	var result = $(this).attr("data-target");
	if(e.target.checked){
		$(".preview [data-target="+result+"]").css("text-decoration","line-through");
	}else{
		$(".preview [data-target="+result+"]").css("text-decoration","auto");
	}
});

$(document).on("input","#line-height",function(e){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("line-height",$(this).val());
});


$(document).on("input","#align",function(e){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").css("text-align",$(this).val());
});


// Header For Editor And Shape And Design


$(document).on("click",".header-lock-shape",function(){
	var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").parent().children(".el-id").attr("data-lock","1");
});


$(document).on("click",".header-delete-shape",function(){
	var result = $(this).attr("data-target");
	var layer_target = $("div[data-target="+result+"]").attr("layer-target");
	$("[layer-id-nav="+layer_target+"]").remove();
	$(".preview [data-target=" + result + "]").remove();
});

// $('body').mousemove(function(evt){
//     console.log(evt.target);
// });

$('html').keyup(function(e){
    if(e.keyCode == 46) {
        alert('Delete key released');
        var result = $(this).attr("data-target");
	$(".preview [data-target="+result+"]").remove();
    }
});

$(document).on("click",".header-lock-diplcated",function(){
	var result = $(this).attr("data-target");
	var randomStringb = randomString();
	var element;
	var value 	= $(".preview [data-target="+result+"]");
	var getAttrs ='';

    $.each(value[0].attributes, function() {                        
            if(this.name == "el-id" || this.name == "data-hide" || this.name == "data-lock"){
				// getAttrs += this.name +'='+ "'0'" + ' ';
			}else if(this.name == "layer-target"){
				getAttrs += this.name +'='+ "'target"+randomStringb+"'" + ' ';
			}else{
				getAttrs += this.name +'='+ "'"+this.value+"'" + ' ';
			}
			SaveCacheDateToLayer("target"+randomStringb,$(".preview [data-target="+result+"]").attr("data-type"),zindex);
			zindex++;
    });
	// if(value != undefined){
		if(value.attr("data-type") =="background"){
			element ="<img "+getAttrs+" style='top:"+value.css('top', (parseFloat(value.css('top')) + 20) + 'px')+"'/>";
		}else if(value.attr("data-type") =="video"){
			element ="<video "+getAttrs+" style='top:"+value.css('top', (parseFloat(value.css('top')) + 20) + 'px')+"'>"+value.html()+"/</video>";
		}else if(value.attr("data-type") =="shape"){
			element ="<canves "+getAttrs+" style='top:"+value.css('top', (parseFloat(value.css('top')) + 20) + 'px')+"'></canves>";
		}else if(value.attr("data-type") =="text"){
			element ="<div "+getAttrs+" style='top:"+value.css('top', (parseFloat(value.css('top')) + 20) + 'px')+"'>"+value.text()+"</div>";
		}else{
			element ="<div "+getAttrs+" style='top:"+value.css('top', (parseFloat(value.css('top')) + 20) + 'px')+"'></div>";
		}
	// }else{
		
	// 	element = $(".preview [data-target="+result+"]");
	// }
	
	if(value != undefined){
		
		$("#html-content-holder").append(`
			${element}
		`);
	}else{
		$("#html-content-holder").append(`
			${element}
	`);
	}
	
	
	
});