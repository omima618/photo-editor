<style>
    input:checked~.radio {
        color: white !important;
        background-color: #68676794;

    }

    label {
        color: #fff !important;
    }
    .swal2-popup-list{
        width: 45vw!important;
    }
    input[type=checkbox]:checked {
         background-color: #F38E93!important;
    }

    input[type=checkbox]:checked::after {
         background-color: #F38E93!important;
    }
</style>
<div id="crypto-modal" aria-hidden="false"
    class="crypto-modal fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-w-full max-h-full">
    <div class="relative w-screen max-h-full" style="align-self: center;text-align:center;text-align: -webkit-center;">
        <div class="relative bg-dark rounded-2xl shadow "
            style="background-color: #121212;    padding: 30px 20px 15px 20px;width: 100%;" id="list-show">
            {{-- <p class="text-center text-white"
                style="font-size: 25px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 700;">Create new
                list</p> --}}
        <form  id="list-form">
            @csrf
            <input type="hidden" name="menu_id" value="{{$menu->id}}"/>
            <div class="grid grid-cols-1 gap-2 mb-4">
                <div class="card border dark:border-gray-800 relative shadow-md sm:rounded-lg overflow-hidden flex grid grid-cols-1 mt-4">
                    <div class="card-header grid grid-cols-1 px-5 py-2"
                        style="background-color: #232323;color: #fff;height: 40px;">
                        <div class="flex" style="font-size: 17px;align-self: center;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                <path
                                    d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z"
                                    fill="white" fill-opacity="0.87" />
                                <path
                                    d="M10 22.75C9.59 22.75 9.25 22.41 9.25 22V2C9.25 1.59 9.59 1.25 10 1.25C10.41 1.25 10.75 1.59 10.75 2V22C10.75 22.41 10.41 22.75 10 22.75Z"
                                    fill="white" fill-opacity="0.87" />
                                <path
                                    d="M22 12.75H10C9.59 12.75 9.25 12.41 9.25 12C9.25 11.59 9.59 11.25 10 11.25H22C22.41 11.25 22.75 11.59 22.75 12C22.75 12.41 22.41 12.75 22 12.75Z"
                                    fill="white" fill-opacity="0.87" />
                            </svg>
                            List details
                        </div>

                    </div>
                    <div class="card-body px-4" style="line-height: 45px;text-align-last: justify;">
                            <div>
                                <label
                                    class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">List
                                    name</label>
                                <input
                                    class="List-change mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                    type="checkbox" onclick='handleClick(this);' role="switch" id="flexSwitchCheckDefault" name="list_name" value-fiald="1"/>
                            </div>

                            <div>
                                <label
                                    class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">List
                                    description</label>
                                <input
                                    class="List-change mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                    type="checkbox" role="switch" onclick='handleClick(this);' id="flexSwitchCheckDefault" name="list_description" value-fiald="0"/>
                            </div>

                            <div>
                                <label
                                    class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">List
                                    price</label>
                                <input
                                    class="List-change mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                    type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick='handleClick(this);' name="list_price" value-fiald="1"/>
                            </div>

                       
                    </div>

                    <div class="card-header grid grid-cols-2 px-5 py-2" style="background-color: #232323;color: #fff;height: 40px;">
                        <div class="flex" style="font-size: 17px;align-self: center;">
                            Number of products
                        </div>

                        <div class="flex" style="font-size: 17px;    justify-content: right;">
                            <input type="number" style="width: 28%;height: 100%;text-align: -webkit-match-parent;text-align-last: center;" class="number-product text-gray-50  focus:outline-none focus:border-blue-700  border-0 bg-gray-800 rounded" value="1" placeholder="1" name="product_number"  max="20" min="0" 
                            onKeyDown="if(this.value.length==4 && event.keyCode>47 && event.keyCode < 58)return false;" />
                        </div>
                    </div>
                    <div class="card-body px-4" style="line-height: 45px;text-align-last: justify;">
                            <div>
                                <label
                                    class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">product
                                    name</label>
                                <input
                                    class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                    type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick='handleClick(this);' name="product_name"/>
                            </div>

                            <div>
                                <label
                                    class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">product
                                    description</label>
                                <input
                                    class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                    type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick='handleClick(this);' name="product_description"/>
                            </div>

                       
                    </div>


                    <div class="card-header grid grid-cols-2 px-5 py-2" style="background-color: #232323;color: #fff;height: 40px;">
                        <div class="flex" style="font-size: 17px;align-self: center;">
                            Number of Price
                        </div>

                        <div class="flex" style="font-size: 17px;    justify-content: right;">
                            <input type="number" style="width: 28%;height: 100%;text-align: -webkit-match-parent;text-align-last: center;" class="number-size-product number_size text-gray-50  focus:outline-none focus:border-blue-700  border-0 bg-gray-800 rounded" value="1" placeholder="1" name="size_number" max="9999" min="0" 
                            onKeyDown="if(this.value.length==4 && event.keyCode>47 && event.keyCode < 58)return false;"/>
                        </div>
                    </div>
                    <div class="card-body px-4 grid grid-cols-2 size-number-list" id="" style="line-height: 45px;">
                        <div style="text-align-last: start;">
                            <label
                                class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">size 1</label>
                            <input
                                class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick='handleClick(this);' name="sizes[${numb}][size]" />
                                </div>
                            
                            <div style="text-align-last: end;">
                                <label
                                    class="inline-block pl-[0.15rem] hover:cursor-pointer"for="flexSwitchCheckDefault">price 1</label>
                                <input
                                    class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                                    type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick='handleClick(this);' name="sizes[${numb}][price]" />
                            </div>
                    </div>


                </div>

                <!--<div-->
                <!--    class="card border dark:border-gray-800 relative shadow-md sm:rounded-lg overflow-hidden flex grid grid-cols-1 mt-4">-->
                <!--    <div class="card-header grid grid-cols-1 px-5 py-2"-->
                <!--        style="background-color: #232323;color: #fff;height:40px;">-->
                <!--        <div class="flex" style="font-size: 17px;align-self: center;">-->
                <!--            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"-->
                <!--                xmlns="http://www.w3.org/2000/svg">-->
                <!--                <path-->
                <!--                    d="M17.6901 20.0902C17.1201 20.0902 16.5601 19.9402 16.0401 19.6402L7.75009 14.8602C6.72009 14.2602 6.1001 13.1902 6.1001 12.0002C6.1001 10.8102 6.72009 9.74019 7.75009 9.14019L16.0401 4.36016C17.0701 3.76016 18.3001 3.76016 19.3401 4.36016C20.3801 4.96016 20.9901 6.02017 20.9901 7.22017V16.7902C20.9901 17.9802 20.3701 19.0502 19.3401 19.6502C18.8201 19.9402 18.2601 20.0902 17.6901 20.0902ZM17.6901 5.41017C17.3801 5.41017 17.0701 5.49016 16.7901 5.65016L8.50009 10.4302C7.94009 10.7602 7.6001 11.3402 7.6001 11.9902C7.6001 12.6402 7.94009 13.2202 8.50009 13.5502L16.7901 18.3302C17.3501 18.6602 18.0301 18.6602 18.5901 18.3302C19.1501 18.0002 19.4901 17.4202 19.4901 16.7702V7.20018C19.4901 6.55018 19.1501 5.97019 18.5901 5.64019C18.3101 5.50019 18.0001 5.41017 17.6901 5.41017Z"-->
                <!--                    fill="white" fill-opacity="0.87" />-->
                <!--                <path-->
                <!--                    d="M3.75977 18.9303C3.34977 18.9303 3.00977 18.5903 3.00977 18.1803V5.82031C3.00977 5.41031 3.34977 5.07031 3.75977 5.07031C4.16977 5.07031 4.50977 5.41031 4.50977 5.82031V18.1803C4.50977 18.5903 4.16977 18.9303 3.75977 18.9303Z"-->
                <!--                    fill="white" fill-opacity="0.87" />-->
                <!--            </svg>-->
                <!--            Preview-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="card-body" style="">-->

                <!--    </div>-->
                <!--</div>-->


            </div>
            <div class="p-6 text-right">
                <button data-modal-hide="popup-modal" style="display:inline-flex!important" type="button"
                    class=" mr-4 button-link-model text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="mr-2"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.0003 18.3327C14.5837 18.3327 18.3337 14.5827 18.3337 9.99935C18.3337 5.41602 14.5837 1.66602 10.0003 1.66602C5.41699 1.66602 1.66699 5.41602 1.66699 9.99935C1.66699 14.5827 5.41699 18.3327 10.0003 18.3327Z"
                            stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.6416 12.3592L12.3583 7.64258" stroke="white" stroke-opacity="0.87"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.3583 12.3592L7.6416 7.64258" stroke="white" stroke-opacity="0.87"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    cancel
                </button>
                <button type="submit"
                    style="background: linear-gradient(93.55deg, #E50914 1.09%, #FF6666 99.2%)!important;"
                    class="button-link-model text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 10H15" stroke="white" stroke-opacity="0.87" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 15V5" stroke="white" stroke-opacity="0.87" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Create new list
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
