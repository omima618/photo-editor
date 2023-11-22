<style>
    input:checked ~ .radio {
        color:white!important;
        background-color:#68676794;
}
.swal2-popup-template {
            width: 70vw;
}
</style>
<div id="crypto-modall" aria-hidden="false" class="crypto-modal fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-w-full max-h-full">
    <div class="relative w-full max-h-full" style="align-self: center;text-align:center;text-align: -webkit-center;" id="template-show">
        <div class="relative bg-dark rounded-2xl shadow" style="background-color: #121212;width: 100%;">
            {{-- <p class="text-center text-white" style="font-size: 24px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 200;">Open from Existing templates</p> --}}
            {{-- <p class="text-center text-white" style="font-size: 20px;line-height: 57px;font-weight: 400;">Select type</p> --}}
            <div class="flex justify-center items-center mt-4">
                <div style="border: 1px solid #47474794;background-color: #2c2c2c94;" class="rounded-lg p-1">
                    <div class="inline-flex rounded-lg">
                        <input type="radio" name="room_type" class="view-template" value="1" id="roomPrivate" checked hidden/>
                        <label for="roomPrivate" class="radio text-white text-center self-center py-2 px-8  cursor-pointer rounded-lg">Horizontal</label>
                    </div>
                    <div class="inline-flex rounded-lg">
                        <input type="radio" name="room_type" class="view-template" value="0" id="roomPublic" hidden/>
                        <label for="roomPublic" class="radio text-white text-center self-center py-2 px-8  cursor-pointer rounded-lg">Vertical</label>
                    </div>
                </div>
              </div>

            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-50 md:w-full">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M11 20.75C5.62 20.75 1.25 16.38 1.25 11C1.25 5.62 5.62 1.25 11 1.25C16.38 1.25 20.75 5.62 20.75 11C20.75 16.38 16.38 20.75 11 20.75ZM11 2.75C6.45 2.75 2.75 6.45 2.75 11C2.75 15.55 6.45 19.25 11 19.25C15.55 19.25 19.25 15.55 19.25 11C19.25 6.45 15.55 2.75 11 2.75Z" fill="white" fill-opacity="0.6"/>
                                  <path d="M20.1601 22.79C20.0801 22.79 20.0001 22.78 19.9301 22.77C19.4601 22.71 18.6101 22.39 18.1301 20.96C17.8801 20.21 17.9701 19.46 18.3801 18.89C18.7901 18.32 19.4801 18 20.2701 18C21.2901 18 22.0901 18.39 22.4501 19.08C22.8101 19.77 22.7101 20.65 22.1401 21.5C21.4301 22.57 20.6601 22.79 20.1601 22.79ZM19.5601 20.49C19.7301 21.01 19.9701 21.27 20.1301 21.29C20.2901 21.31 20.5901 21.12 20.9001 20.67C21.1901 20.24 21.2101 19.93 21.1401 19.79C21.0701 19.65 20.7901 19.5 20.2701 19.5C19.9601 19.5 19.7301 19.6 19.6001 19.77C19.4801 19.94 19.4601 20.2 19.5601 20.49Z" fill="white" fill-opacity="0.6"/>
                               </svg>
                            </div>
                            <input type="text" id="simple-search" class="search_text bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-gray-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mb-4" id="result">
                @foreach ($template as $menu)
                <button data-id="{{$menu->id}}" class="use-template" style="text-align: -webkit-center;background-color: #2f2f2f7d;border-radius: 12px;">
                    <div class="flex items-center justify-center" style="background-color: #2f2f2f7d;border-radius: 12px;">
                        <div class="max-w-sm shadow  dark:border-gray-700">
                                <img class="border border-gray-200 rounded-lg rounded-t-lg h-100 w-full" style="height:207px;width:90%;margin-top: 18px;" src="{{asset($menu->image?$menu->image:'Dashboard/image/logo.png')}}" alt="" />
                            <div class="px-5" style="text-align: left">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">{{$menu->name}}</h5>
                                <p class="mb-3 font-normal text-gray-700 text-gray-400">Created in {{date("Y-m-d",strtotime($menu->created_at))}}.</p>
                            </div>
                        </div>
                    </div>
                </button>
                @endforeach
             </div>
        </div>
    </div>
</div>