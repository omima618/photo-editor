<style>

    .swal-wide-resize{
        width:32vw !important;
        border-radius:20px;
        padding: 0px!important;
    }
    
    </style>
    <input type="hidden" value="{{$menu->id}}" id="id-menu">
    <form action="#" method="post" id="resize-show">
        @csrf
    <div class="relative w-full max-w-md max-h-full">
        
        <div class="relative bg-dark rounded-2xl shadow" style="background-color: #121212;    padding: 30px 20px 15px 20px;
        width: 32vw;    text-align: justify;">
             
            <div class="" style="width: 100%;margin: 20px auto">
                {{-- <table style="height: 100%" class="w-full">
                    <thead>
                        <tr style="vertical-align: baseline;">
                            <div class="flex flex-col">
                                <label class="font-semibold leading-none text-gray-300">Chose Type</label>
                                
                                    <ul class="grid w-full gap-6 md:grid-cols-3 mt-4">
                                        <li>
                                            <input type="radio" id="statusview1" name="view" value="1" class="hidden peers" {{$menu->view == '1'?"checked":""}}>
                                            <label style="width:9vw;height: 43px;background-color: rgba(255, 255, 255, 0.05);" for="statusview1" class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
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
                                            <input  type="radio" id="statusview2" name="view" value="0" class="hidden peers" {{$menu->view == '0'?"checked":""}}>
                                            <label for="statusview2" style="width:9vw;height: 43px;background-color: rgba(255, 255, 255, 0.05);" class="inline-flex items-center justify-between w-full  p-4 text-gray-500 bg-white border border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
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
                </table> --}}
            </div>

            <div style="" class="items-center  mt-2 font-medium text-gray-900 grid grid-cols-2 whitespace-nowrap dark:text-white">
                <div class="flex flex-col mr-4">
                    <label class="font-semibold leading-none text-gray-300">width </label>
                    <input required type="number"  style="width:12vw;height: 37px;background-color: rgba(255, 255, 255, 0.05);" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded sm:rounded-full" placeholder="width" value="{{$menu->width}}" name="width"/>
                </div>
                <div class="flex flex-col mr-4">
                    <label class="font-semibold leading-none text-gray-300">height </label>
                    <input required type="number" style="width:12vw;height: 37px;background-color: rgba(255, 255, 255, 0.05);" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded sm:rounded-full" placeholder="height" value="{{$menu->height}}" name="height"/>
                </div>
            </div>
    
    
            <div class="p-6 text-center" style="text-align: justify;">
                <button type="submit" style="width: 24vw;justify-content: center;background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link-model text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 0.5C1.61929 0.5 0.5 1.61929 0.5 3V13C0.5 14.3807 1.61929 15.5 3 15.5H13C14.3807 15.5 15.5 14.3807 15.5 13V5.47072C15.5 4.80768 15.2366 4.17179 14.7678 3.70295L12.297 1.23223C11.8282 0.763392 11.1923 0.5 10.5293 0.5H3ZM10.5293 2.16667H10.5V3.83333C10.5 4.75381 9.75381 5.5 8.83333 5.5H5.5C4.57953 5.5 3.83333 4.75381 3.83333 3.83333V2.16667H3C2.53976 2.16667 2.16667 2.53976 2.16667 3V13C2.16667 13.4602 2.53976 13.8333 3 13.8333H3.83333V8.83333C3.83333 7.91286 4.57953 7.16667 5.5 7.16667H10.5C11.4205 7.16667 12.1667 7.91286 12.1667 8.83333V13.8333H13C13.4602 13.8333 13.8333 13.4602 13.8333 13V5.47072C13.8333 5.24971 13.7455 5.03774 13.5893 4.88146L11.1185 2.41074C10.9623 2.25446 10.7503 2.16667 10.5293 2.16667ZM10.5 13.8333V8.83333H5.5V13.8333H10.5ZM5.5 2.16667H8.83333V3.83333H5.5V2.16667Z" fill="white" fill-opacity="0.87"/>
                        </svg>
                        Save
                </button>
            </div>
        </div>
    </form>