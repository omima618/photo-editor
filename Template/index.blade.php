@extends("Dashboard.layouts.master")
@section("title","Clients")
@section("main-content")  
<style>
    input:checked ~ .radio {
        color:white;
        background-color:#68676794;
}
</style>
<div class="grid grid-cols-2 gap-4 mb-4">
      <div class="title-page">
         <h1 class="text-white" style="    font-size: 22px;">Templates</h1>
         <div class="mt-4">
            <span style="color: #525252;">Dashboard</span>
            <span style="color: #525252;"> > </span>
            <span style="color: #dcd8d8;">Templates</span>
         </div>
         <div class="flex justify-right items-center mt-4">
            <div style="border: 1px solid #47474794;background-color: #2c2c2c94;" class="rounded-lg p-1">
                <div class="inline-flex rounded-lg">
                    <input type="radio" name="room_type" class="view-template" value="1" id="roomPrivate" checked hidden/>
                    <label for="roomPrivate" class=" radio text-center self-center py-2 px-8  cursor-pointer rounded-lg">Horizontal</label>
                </div>
                <div class="inline-flex rounded-lg">
                    <input type="radio" name="room_type" class="view-template" value="0" id="roomPublic" hidden/>
                    <label for="roomPublic" class=" radio text-center self-center py-2 px-8  cursor-pointer rounded-lg">Vertical</label>
                </div>
            </div>
          </div>
         
      </div>

      <div class="flex Client-Head">
         <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" style="background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Add new Template
        </button>
      </div>
</div>
<section class="">
   <div class="">
       <!-- Start coding here -->
       <div class="relative shadow-md sm:rounded-lg overflow-hidden">
           <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
               <div class="w-50 md:w-1/2">
                   <form class="flex items-center">
                       <label for="simple-search" class="sr-only">Search</label>
                       <div class="relative w-full">
                           <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11 20.75C5.62 20.75 1.25 16.38 1.25 11C1.25 5.62 5.62 1.25 11 1.25C16.38 1.25 20.75 5.62 20.75 11C20.75 16.38 16.38 20.75 11 20.75ZM11 2.75C6.45 2.75 2.75 6.45 2.75 11C2.75 15.55 6.45 19.25 11 19.25C15.55 19.25 19.25 15.55 19.25 11C19.25 6.45 15.55 2.75 11 2.75Z" fill="white" fill-opacity="0.6"/>
                                 <path d="M20.1601 22.79C20.0801 22.79 20.0001 22.78 19.9301 22.77C19.4601 22.71 18.6101 22.39 18.1301 20.96C17.8801 20.21 17.9701 19.46 18.3801 18.89C18.7901 18.32 19.4801 18 20.2701 18C21.2901 18 22.0901 18.39 22.4501 19.08C22.8101 19.77 22.7101 20.65 22.1401 21.5C21.4301 22.57 20.6601 22.79 20.1601 22.79ZM19.5601 20.49C19.7301 21.01 19.9701 21.27 20.1301 21.29C20.2901 21.31 20.5901 21.12 20.9001 20.67C21.1901 20.24 21.2101 19.93 21.1401 19.79C21.0701 19.65 20.7901 19.5 20.2701 19.5C19.9601 19.5 19.7301 19.6 19.6001 19.77C19.4801 19.94 19.4601 20.2 19.5601 20.49Z" fill="white" fill-opacity="0.6"/>
                              </svg>
                           </div>
                           <input type="text" id="simple-search" class="search_text bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                       </div>
                   </form>
               </div>
           </div>
           <div class="overflow-x-auto">
            <div class="grid grid-cols-4 gap-4 mb-4" id="result">
                @foreach ($users as $menu)
                <div class="flex items-center justify-center" style="background-color: #2f2f2f7d;border-radius: 12px;">
                    <div class="max-w-sm shadow  dark:border-gray-700">
                         <a href="#" style="text-align: -webkit-center;">
                             <img class="border border-gray-200 rounded-lg rounded-t-lg h-50 w-full" style="height:207px;width: 95%;margin-top: 18px;" src="{{asset($menu->preview?$menu->preview:'Dashboard/image/logo.png')}}" alt="" />
                         </a>
                         <div class="px-5">
                             <a href="#">
                                 <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">{{$menu->name}}</h5>
                             </a>
                             <p class="mb-3 font-normal text-gray-700 dark:text-gray-400" style="color:#9b9b9b!important;">Created in {{date("Y-m-d",strtotime($menu->created_at))}}.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 Client-Head mb-2" style="text-align: -webkit-center;">
                            <div>
                                <button data-id="{{$menu->id}}" type="button" style="width: 100px;height: 44px;    background: none!important;" class="delete-template button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                   Delete
                                </button>
                            </div>
                            <div>
                                <a href="{{route('dashboard.template.edit',$menu->id)}}" style="width: 100px;height: 44px;background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Edit
                                </a>
                            </div>
                        </div>
                     </div>
                </div>
                @endforeach
             </div>
           </div>
           {{ $users->links('pagination::tailwind') }}
       </div>
   </div>
   </section>


   <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <form action="#" method="post" id="create_template">
        @csrf
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-dark rounded-2xl shadow" style="background-color: #121212;    padding: 30px 20px 15px 20px;
        width: 30vw;">
            <p class="text-center text-white" style="    font-size: 25px;
            border-bottom: 1px solid #c7c3c3a6;
            line-height: 57px;
            font-weight: 700;">New Template</p>
            <div class="" style="width: 100%;margin: 20px auto">
                <table style="height: 100%" class="w-full">
                    <thead>
                        <tr style="vertical-align: baseline;">
                            <div class="flex flex-col">
                                <label class="font-semibold leading-none text-gray-300">Chose account status</label>
                                
                                    <ul class="grid w-full gap-12 md:grid-cols-2 mt-4">
                                        <li class="mr-4">
                                            <input required type="radio" id="status-small" name="view" value="1" class="hidden peer" required>
                                            <label style="width: 7vw;height: 43px;background-color: rgba(255, 255, 255, 0.05);" for="status-small" class="mr-4 inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                                <div class="flex">
                                                    <svg width="20" class="mr-2" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.8">
                                                        <path d="M9.97493 18.3327C14.5773 18.3327 18.3083 14.6017 18.3083 9.99935C18.3083 5.39698 14.5773 1.66602 9.97493 1.66602C5.37256 1.66602 1.6416 5.39698 1.6416 9.99935C1.6416 14.6017 5.37256 18.3327 9.97493 18.3327Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        </svg>
                                                    <div class="w-full">Horizontal</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input required type="radio" id="status-big" name="view" value="0" class="hidden peer">
                                            <label for="status-big" style="width: 7vw;height: 43px;background-color: rgba(255, 255, 255, 0.05);" class="inline-flex items-center justify-between w-full  p-4 text-gray-500 bg-white border border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                                <div class="flex">
                                                    <svg width="20" class="mr-2" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.8">
                                                        <path d="M9.97493 18.3327C14.5773 18.3327 18.3083 14.6017 18.3083 9.99935C18.3083 5.39698 14.5773 1.66602 9.97493 1.66602C5.37256 1.66602 1.6416 5.39698 1.6416 9.99935C1.6416 14.6017 5.37256 18.3327 9.97493 18.3327Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        </svg>
                                                    <div class="w-full">Vertical</div>
                                                </div>
                                            </label>
                                        </li>

                                    </ul>

                            </div>
                        </tr>
                    </thead>
                </table>
            </div>
            <div style=""
                    class="items-center  mt-8 font-medium text-gray-900 grid grid-cols-2 whitespace-nowrap dark:text-white">
               
                                <div class="flex flex-col mr-4">
                                <!--    <label class="font-semibold leading-none text-gray-300">Width</label>-->
                                    <input required type="hidden" style="height: 37px;background-color: rgba(255, 255, 255, 0.05);" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded sm:rounded-full" placeholder="width" value="0" name="width"/>
                                </div>
                           
                                <div class=" flex flex-col">
                                <!--    <label class="font-semibold leading-none text-gray-300">Hight</label>-->
                                    <input required type="hidden" style="height: 37px;background-color: rgba(255, 255, 255, 0.05);" class="sm:rounded-full   leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded" placeholder="Hight" value="0" name="hight" />
                                </div>
                </div>



            <div class="p-6 text-right">
                <button data-modal-hide="popup-modal" style="display:inline-flex!important" type="button" class=" mr-4 button-link-model text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="mr-2" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0003 18.3327C14.5837 18.3327 18.3337 14.5827 18.3337 9.99935C18.3337 5.41602 14.5837 1.66602 10.0003 1.66602C5.41699 1.66602 1.66699 5.41602 1.66699 9.99935C1.66699 14.5827 5.41699 18.3327 10.0003 18.3327Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.6416 12.3592L12.3583 7.64258" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.3583 12.3592L7.6416 7.64258" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                    cancel
                </button>
  
                <button type="submit" style="background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link-model text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 10H15" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 15V5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                        
                    Create
                </button>
            </div>
        </div>
    </form>
    </div>
@endsection

@section("bottom-js")
    <script>
        $(document).on("submit","#create_template",function(event){
            event.preventDefault();
            var form = $(this).serializeArray();
            $.post({
                url:"{{route('dashboard.template.store')}}",
                data:form,
            }).then(function(data){
                
                Swal.fire('Saved!', '', 'success');
                setInterval(function(){ 
                    location.replace("{{url('Dashboard/template/make/create')}}"+"/"+data.menu.id);      
                }, 3000);
            }).catch(function(error){
                if(error.status == 422){
                    Swal.fire('Changes are not amr', '', 'error')
                }else{
                    Swal.fire('Changes are not done', '', 'error');
                }
                
            });
        });
        
         $(document).on("keyup",".search_text",function(){
           
                $.get({
                    url:"{{route('dashboard.search.index')}}",
                    "data":{
                      "search":$(this).val(),
                      "type":"template"
                    }
                  }).then((data)=>{
                        $("#result").empty();
                        data.data.map((value,index)=>{
                            
                            var d = new Date(value.created_at);
                            var datestring =  d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
                            $("#result").append(`
                            <div class="flex items-center justify-center" style="background-color: #2f2f2f7d;border-radius: 12px;">
                                    <div class="max-w-sm shadow  dark:border-gray-700">
                                         <a href="#" style="text-align: -webkit-center;">
                                             <img class="border border-gray-200 rounded-lg rounded-t-lg h-50 w-full" style="width: 85%;margin-top: 18px;" src="${value.preview?Base_Url+value.preview:Base_Url+'Dashboard/image/logo.png'}" alt="" />
                                         </a>
                                         <div class="px-5">
                                             <a href="#">
                                                 <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">${value.name}</h5>
                                             </a>
                                             <p class="mb-3 font-normal text-gray-700 dark:text-gray-400" style="color:#9b9b9b!important;">Created in ${datestring}.</p>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 Client-Head mb-2" style="text-align: -webkit-center;">
                                            <div>
                                                <button data-id="${value.id}" type="button" style="width: 100px;height: 44px;    background: none!important;" class="delete-template button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                   Delete
                                                </button>
                                            </div>
                                            <div>
                                                <a href="{{url('/')}}/Dashboard/template/edit/${value.id}" style="width: 100px;height: 44px;background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                     </div>
                                </div>     
                            `);
                        });
                    
                  }).catch((error)=>{
                    if(error.status == 422){
                      Swal.fire('Error 505 ', '', 'error')    
                    }
                  });
          });



            $(document).on("change",".view-template",function(){
               
                $.get({
                    url:"{{route('dashboard.template.index')}}",
                    "data":{
                      "view":$(this).val(),
                    }
                  }).then((data)=>{
                        $("#result").empty();
                        data.data.map((value,index)=>{
                            var d = new Date(value.created_at);
                            var datestring =  d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
                            $("#result").append(`
                            <div class="flex items-center justify-center" style="background-color: #2f2f2f7d;border-radius: 12px;">
                                    <div class="max-w-sm shadow  dark:border-gray-700">
                                         <a href="#" style="text-align: -webkit-center;">
                                             <img class="border border-gray-200 rounded-lg rounded-t-lg h-50 w-full" style="width: 85%;margin-top: 18px;" src="${value.preview?Base_Url+value.preview:Base_Url+'Dashboard/image/logo.png'}" alt="" />
                                         </a>
                                         <div class="px-5">
                                             <a href="#">
                                                 <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">${value.name}</h5>
                                             </a>
                                             <p class="mb-3 font-normal text-gray-700 dark:text-gray-400" style="color:#9b9b9b!important;">Created in ${datestring}.</p>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 Client-Head mb-2" style="text-align: -webkit-center;">
                                            <div>
                                                <button data-id="${value.id}" type="button" style="width: 100px;height: 44px;    background: none!important;" class="delete-template button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                   Delete
                                                </button>
                                            </div>
                                            <div>
                                                <a href="{{url('/')}}/Dashboard/template/edit/${value.id}" style="width: 100px;height: 44px;background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                     </div>
                                </div>     
                            `);
                        });
                    
                  }).catch((error)=>{
                    if(error.status == 422){
                      Swal.fire('Error 505 ', '', 'error')    
                    }
                  });
          });

    </script>
@endsection
