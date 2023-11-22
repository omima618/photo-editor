<style>

.swal-wide{
    width:36vw !important;
    border-radius:20px;
}

</style>
<form action="#" method="post" id="download-show">
<div class="relative w-full max-w-md max-h-full">
    <div class="relative bg-dark rounded-2xl shadow" style="background-color: #121212;    padding: 30px 20px 15px 20px;
    width: 32vw;    text-align: justify;">
         <div style="" class="items-center  mt-2 font-medium text-gray-900 grid grid-cols-1 whitespace-nowrap dark:text-white">
           
            <div class="flex flex-col mr-4">
                <label class="font-semibold leading-none text-gray-300">File name </label>
                <input required type="text" id="download-name" style="width:28vw;height: 37px;background-color: rgba(255, 255, 255, 0.05);" class="leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-gray-800 rounded sm:rounded-full" placeholder="Template gamda awi" value="" name="width"/>
            </div>
        </div>
        <div class="" style="width: 100%;margin: 20px auto">
            <table style="height: 100%" class="w-full">
                <thead>
                    <tr style="vertical-align: baseline;">
                        <div class="flex flex-col">
                            <label class="font-semibold leading-none text-gray-300">Chose Type</label>
                            
                                <ul class="grid w-full gap-6 md:grid-cols-4 mt-4">
                                    <li>
                                        <input required type="radio" id="status-small" name="view" value="1" class="hidden peer" required checked>
                                        <label style="height: 43px;background-color: rgba(255, 255, 255, 0.05);" for="status-small" class="inline-flex items-center justify-between w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                            <div class="flex">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                    <path d="M9.97506 18.3332C14.5774 18.3332 18.3084 14.6022 18.3084 9.99984C18.3084 5.39746 14.5774 1.6665 9.97506 1.6665C5.37268 1.6665 1.64172 5.39746 1.64172 9.99984C1.64172 14.6022 5.37268 18.3332 9.97506 18.3332Z" stroke="#F38E93" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.99998 13.5251C11.9468 13.5251 13.525 11.9469 13.525 10.0001C13.525 8.05329 11.9468 6.4751 9.99998 6.4751C8.05317 6.4751 6.47498 8.05329 6.47498 10.0001C6.47498 11.9469 8.05317 13.5251 9.99998 13.5251Z" fill="#F38E93" stroke="#F38E93" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    </svg>
                                                <div class="w-full">PNG</div>
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input required type="radio" id="status-big" name="view" value="0" class="hidden peer">
                                        <label for="status-big" style="height: 43px;background-color: rgba(255, 255, 255, 0.05);" class="inline-flex items-center justify-between w-full  p-4 text-gray-500 bg-white border border-gray-200 rounded-full cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                            <div class="flex">
                                                <svg width="20" class="mr-2" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                    <path d="M9.97493 18.3327C14.5773 18.3327 18.3083 14.6017 18.3083 9.99935C18.3083 5.39698 14.5773 1.66602 9.97493 1.66602C5.37256 1.66602 1.6416 5.39698 1.6416 9.99935C1.6416 14.6017 5.37256 18.3327 9.97493 18.3327Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                    </svg>
                                                <div class="w-full">JPEG</div>
                                            </div>
                                        </label>
                                    </li>

                                </ul>

                        </div>
                    </tr>
                </thead>
            </table>
        </div>


        <div class="p-6 text-center" style="">
            <button type="submit" style="width: fill-available;width: -webkit-fill-available;justify-content: center;background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;" class="button-link-model text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 9.16675V14.1667L9.16667 12.5001" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.50004 14.1667L5.83337 12.5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.3333 8.33342V12.5001C18.3333 16.6667 16.6666 18.3334 12.5 18.3334H7.49996C3.33329 18.3334 1.66663 16.6667 1.66663 12.5001V7.50008C1.66663 3.33341 3.33329 1.66675 7.49996 1.66675H11.6666" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.3333 8.33341H15C12.5 8.33341 11.6666 7.50008 11.6666 5.00008V1.66675L18.3333 8.33341Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    
                    Download
            </button>
        </div>
    </div>
</form>
</div>