$(document).on("click","#resize-template",async function(){
    const myElement = document.querySelector('#resize-show');
    const { value: formValues } = await Swal.fire({
     title: '<p class="text-center text-white" style="font-size: 25px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 700;">Resize</p>',
     html:myElement,
     customClass: 'swal-wide-resize',
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

$(document).on("submit","#resize-show",function(e){
    e.preventDefault();
    var form = $(this).serializeArray();
            var id = $("#id-menu").val();
            $.post({
                url:Base_Url+"Dashboard/template/update/"+id,
                data:form,
            }).then(function(data){
                Swal.fire('Saved!', '', 'success');
                // setInterval(function(){ 
                //     location.replace("{{url('Dashboard/template/make/create')}}"+"/"+data.menu.id);      
                // }, 3000);
            }).catch(function(error){
                if(error.status == 422){
                    Swal.fire('Changes are not done', '', 'error')
                }else{
                    Swal.fire('Changes are not done', '', 'error');
                }
                
            });
    
});
