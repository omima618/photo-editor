<style>
    button{
        width: fit-content;
    }

    select{
        height: 32px;
        background-color: #121212!important;
    }
</style>
<div class="tools-board grid grid-auto-col border head px-2 py-4" id="text-template-show" style="align-items: center;background-color: #121212;display:none;:#1b1b1b;;border-color: #121212;border-radius: 0px 0px 11px 11px;" >
    <div class="grid gap-4 grid-flow-col auto-cols-max options" id="list-text-show-edit">
        <select id="font-fimaly" style="-webkit-appearance: none;text-align-last: center;font-size: 11px;border-color:#5a5959;" class="text-lg  text-white border rounded">
            <option value="" selected="" hidden="" disabled="">font</option>
            <option value="Droid">Droid</option>
            <option value="Sans">Sans</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Lato">Lato</option>
        </select>
        <select   id="font-size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected="" hidden="" disabled="">Size</option>
            @for($i=1;$i<=30;$i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <div title="LineHeight" class="flex  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <svg style="    align-self: end;"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H21C21.41 21.25 21.75 21.59 21.75 22C21.75 22.41 21.41 22.75 21 22.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M21 2.75H3C2.59 2.75 2.25 2.41 2.25 2C2.25 1.59 2.59 1.25 3 1.25H21C21.41 1.25 21.75 1.59 21.75 2C21.75 2.41 21.41 2.75 21 2.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V6C11.25 5.59 11.59 5.25 12 5.25C12.41 5.25 12.75 5.59 12.75 6V18C12.75 18.41 12.41 18.75 12 18.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M14.8299 8.47039C14.6399 8.47039 14.4499 8.40039 14.2999 8.25039L11.9999 5.95039L9.69986 8.25039C9.40986 8.54039 8.92986 8.54039 8.63986 8.25039C8.34986 7.96039 8.34986 7.48039 8.63986 7.19039L11.4699 4.36039C11.7499 4.08039 12.2499 4.08039 12.5299 4.36039L15.3599 7.19039C15.6499 7.48039 15.6499 7.96039 15.3599 8.25039C15.2099 8.40039 15.0199 8.47039 14.8299 8.47039Z" fill="white" fill-opacity="0.87"/>
                <path d="M11.9999 19.4701C11.7999 19.4701 11.6099 19.3901 11.4699 19.2501L8.63986 16.4201C8.34986 16.1301 8.34986 15.6501 8.63986 15.3601C8.92986 15.0701 9.40986 15.0701 9.69986 15.3601L11.9999 17.6601L14.2999 15.3601C14.5899 15.0701 15.0699 15.0701 15.3599 15.3601C15.6499 15.6501 15.6499 16.1301 15.3599 16.4201L12.5299 19.2501C12.3899 19.3901 12.1999 19.4701 11.9999 19.4701Z" fill="white" fill-opacity="0.87"/>
            </svg>
            <select id="line-height" class="">
                <option value="1" selected="" hidden="" disabled=""> 
                    1
                </option>
                <option value="1.15">1.15</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3">3</option>
            </select>  
        </div>
        <select   id="align" style="width:55px;-webkit-appearance: none;text-align-last: center;font-size: 11px;border-color:#5a5959;" class="text-lg  text-white border rounded">
            
            <option value="0" selected="true"  disabled style="background:url({{asset('Dashboard/image/left.png')}}) no-repeat right center">
                
                    <img src="{{asset('Dashboard/image/left.png')}}" alt="right">
                    Align
            </option>
            <option value="left" style="background:url({{asset('Dashboard/image/left.png')}}) no-repeat right center">
                <div>
                    <img src="{{asset('Dashboard/image/left.png')}}" alt="right">
                    left
                </div>
                
            </option>
            <option value="center">
                <img src="{{asset('Dashboard/image/center.png')}}" alt="right">
                center
            </option>
            <option value="right">
                <img src="{{asset('Dashboard/image/right.png')}}" alt="right">
                right
            </option>
           
        </select>
        

        

       

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-bold" title="Bold">
                <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.87988 4.5C4.87988 3.4 5.77988 2.5 6.87988 2.5H11.9999C14.6199 2.5 16.7499 4.63 16.7499 7.25C16.7499 9.87 14.6199 12 11.9999 12H4.87988V4.5Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.87988 12H14.3799C16.9999 12 19.1299 14.13 19.1299 16.75C19.1299 19.37 16.9999 21.5 14.3799 21.5H6.87988C5.77988 21.5 4.87988 20.6 4.87988 19.5V12V12Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
            </label> 
            <input type="checkbox" id="text-bold" style="display:none;">                 
        </button>

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-underline" title="underline">
            <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 21H19" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5 3V10C5 13.87 8.13 17 12 17C15.87 17 19 13.87 19 10V3" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label><input type="checkbox" id="text-underline" style="display:none">              
        </button>


        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-itlaic" title="itlaic">
            <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.62012 3H18.8701" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.12012 21H14.3701" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.25 3L9.75 21" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label><input type="checkbox" id="text-itlaic" style="display:none">        
        </button>

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-inline" title="inline">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.66992 7.17027V5.35027C2.66992 4.20027 3.59992 3.28027 4.73992 3.28027H19.2599C20.4099 3.28027 21.3299 4.21027 21.3299 5.35027V7.17027" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 20.7204V4.11035" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.06006 20.7197H15.9401" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <line x1="3" y1="12.5" x2="21.66" y2="12.5" stroke="white" stroke-opacity="0.87"/>
            </svg>          
        </label><input type="checkbox" id="text-inline" style="display:none">        
        </button>

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="color-text" title="color">
            <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.01012 17.9998L3.00012 13.9898C1.66012 12.6498 1.66012 11.3198 3.00012 9.9798L9.68012 3.2998L17.0301 10.6498C17.4001 11.0198 17.4001 11.6198 17.0301 11.9898L11.0101 18.0098C9.69012 19.3298 8.35012 19.3298 7.01012 17.9998Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.3501 1.9502L9.6901 3.29016" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.06982 11.9197L17.1898 11.2598" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 22H16" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.85 15C18.85 15 17 17.01 17 18.24C17 19.26 17.83 20.09 18.85 20.09C19.87 20.09 20.7 19.26 20.7 18.24C20.7 17.01 18.85 15 18.85 15Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </label>
            <input type="color" id="color-text" value="#000" style="display: none;"/>   
        </button>

        {{-- <select style="-webkit-appearance: none;text-align-last: center;font-size: 30px;" class="text-lg  text-white border "   class="text-lg  text-white ">
            <option value="" selected="">
                <p class="text-lg font-medium text-gray-900 dark:text-white">...</p>
            </option>
            <option value="h1">Heading 1</option>
            <option value="h2">Heading 2</option>
            <option value="h3">Heading 3</option>
            <option value="h4">Heading 4</option>
            <option value="h5">Heading 5</option>
            <option value="h6">Heading 6</option>
            <option value="p">Paragraph</option>
        </select> --}}
        

    </div>

    <div class="grid grid-flow-col auto-cols-max" style="text-align: end;    justify-self: end;">
        {{-- <div style="border-right: 1px solid #c5c0c0;padding-right: 6px;margin-right: 6px;">
            <button type="button" class="text-align:center" style="background-color: #fff0!important;">
                position                    
            </button>
        </div>
        <div class="options grid grid-cols-3" style="border-right: 1px solid #c5c0c0;padding-right: 6px;margin-right: 6px;">
            <button type="button" data-type="text" class="header-lock-shape text-align:center" style="background-color: #fff0!important;margin-right:10px">
                <svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 10V8C6 4.69 7 2 12 2C17 2 18 4.69 18 8V10" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 18.5C13.3807 18.5 14.5 17.3807 14.5 16C14.5 14.6193 13.3807 13.5 12 13.5C10.6193 13.5 9.5 14.6193 9.5 16C9.5 17.3807 10.6193 18.5 12 18.5Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 22H7C3 22 2 21 2 17V15C2 11 3 10 7 10H17C21 10 22 11 22 15V17C22 21 21 22 17 22Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>              
            </button>
            <button type="button" data-type="text" class="header-delete-shape option tool text-align:center" style="margin-right:10px;background-color: #fff0!important;">
                <svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 5.98047C17.67 5.65047 14.32 5.48047 10.98 5.48047C9 5.48047 7.02 5.58047 5.04 5.78047L3 5.98047" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.8504 9.13965L18.2004 19.2096C18.0904 20.7796 18.0004 21.9996 15.2104 21.9996H8.79039C6.00039 21.9996 5.91039 20.7796 5.80039 19.2096L5.15039 9.13965" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.3301 16.5H13.6601" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.5 12.5H14.5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                   
            </button>
            <button type="button" data-type="text" class=" header-lock-diplcated text-align:center" style="margin-right:10px;background-color: #fff0!important;">
                <svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 12.9V17.1C16 20.6 14.6 22 11.1 22H6.9C3.4 22 2 20.6 2 17.1V12.9C2 9.4 3.4 8 6.9 8H11.1C14.6 8 16 9.4 16 12.9Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22 6.9V11.1C22 14.6 20.6 16 17.1 16H16V12.9C16 9.4 14.6 8 11.1 8H8V6.9C8 3.4 9.4 2 12.9 2H17.1C20.6 2 22 3.4 22 6.9Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>              
            </button>
        </div>

        <div class="grid grid-cols-2" >
            <button type="button" class="text-align:center" style="margin-right:10px;background-color: #fff0!important;">
                <svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.1299 19.0596H7.12988C6.71988 19.0596 6.37988 18.7196 6.37988 18.3096C6.37988 17.8996 6.71988 17.5596 7.12988 17.5596H15.1299C17.4699 17.5596 19.3799 15.6496 19.3799 13.3096C19.3799 10.9696 17.4699 9.05957 15.1299 9.05957H4.12988C3.71988 9.05957 3.37988 8.71957 3.37988 8.30957C3.37988 7.89957 3.71988 7.55957 4.12988 7.55957H15.1299C18.2999 7.55957 20.8799 10.1396 20.8799 13.3096C20.8799 16.4796 18.2999 19.0596 15.1299 19.0596Z" fill="white" fill-opacity="0.87"/>
                    <path d="M15.1299 8.30957C17.798 8.30957 19.989 10.4172 20.1234 13.0529C19.9892 10.4158 17.7996 8.30957 15.1299 8.30957ZM15.1299 8.30957H4.12988V8.30957L15.1299 8.30957ZM15.1299 18.3096C17.8841 18.3096 20.1299 16.0638 20.1299 13.3096C20.1299 16.0654 17.8857 18.3096 15.1299 18.3096Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                    <mask id="path-3-inside-1_827_4286" fill="white">
                    <path d="M6.42957 11.5599C6.23957 11.5599 6.04957 11.4899 5.89957 11.3399L3.33957 8.77988C3.04957 8.48988 3.04957 8.00988 3.33957 7.71988L5.89957 5.15988C6.18957 4.86988 6.66957 4.86988 6.95957 5.15988C7.24957 5.44988 7.24957 5.92988 6.95957 6.21988L4.92957 8.24988L6.95957 10.2799C7.24957 10.5699 7.24957 11.0499 6.95957 11.3399C6.81957 11.4899 6.61957 11.5599 6.42957 11.5599Z"/>
                    </mask>
                    <path d="M6.42957 11.5599C6.23957 11.5599 6.04957 11.4899 5.89957 11.3399L3.33957 8.77988C3.04957 8.48988 3.04957 8.00988 3.33957 7.71988L5.89957 5.15988C6.18957 4.86988 6.66957 4.86988 6.95957 5.15988C7.24957 5.44988 7.24957 5.92988 6.95957 6.21988L4.92957 8.24988L6.95957 10.2799C7.24957 10.5699 7.24957 11.0499 6.95957 11.3399C6.81957 11.4899 6.61957 11.5599 6.42957 11.5599Z" fill="white" fill-opacity="0.87"/>
                    <path d="M5.89957 11.3399L4.83891 12.4005L4.83891 12.4005L5.89957 11.3399ZM3.33957 8.77988L4.40023 7.71922H4.40023L3.33957 8.77988ZM3.33957 7.71988L2.27891 6.65922V6.65922L3.33957 7.71988ZM5.89957 5.15988L6.96023 6.22054L5.89957 5.15988ZM4.92957 8.24988L3.86891 7.18922L2.80825 8.24988L3.86891 9.31054L4.92957 8.24988ZM6.95957 10.2799L8.02023 9.21922H8.02023L6.95957 10.2799ZM6.95957 11.3399L5.89891 10.2792L5.88063 10.2975L5.86299 10.3164L6.95957 11.3399ZM6.42957 10.0599C6.61593 10.0599 6.8141 10.1331 6.96023 10.2792L4.83891 12.4005C5.28504 12.8467 5.86321 13.0599 6.42957 13.0599V10.0599ZM6.96023 10.2792L4.40023 7.71922L2.27891 9.84054L4.83891 12.4005L6.96023 10.2792ZM4.40023 7.71922C4.69602 8.01501 4.69602 8.48476 4.40023 8.78054L2.27891 6.65922C1.40312 7.53501 1.40312 8.96476 2.27891 9.84054L4.40023 7.71922ZM4.40023 8.78054L6.96023 6.22054L4.83891 4.09922L2.27891 6.65922L4.40023 8.78054ZM6.96023 6.22054C6.66444 6.51633 6.1947 6.51633 5.89891 6.22054L8.02023 4.09922C7.14444 3.22344 5.7147 3.22344 4.83891 4.09922L6.96023 6.22054ZM5.89891 6.22054C5.60312 5.92476 5.60312 5.45501 5.89891 5.15922L8.02023 7.28054C8.89602 6.40476 8.89602 4.97501 8.02023 4.09922L5.89891 6.22054ZM5.89891 5.15922L3.86891 7.18922L5.99023 9.31054L8.02023 7.28054L5.89891 5.15922ZM3.86891 9.31054L5.89891 11.3405L8.02023 9.21922L5.99023 7.18922L3.86891 9.31054ZM5.89891 11.3405C5.60312 11.0448 5.60312 10.575 5.89891 10.2792L8.02023 12.4005C8.89602 11.5248 8.89602 10.095 8.02023 9.21922L5.89891 11.3405ZM5.86299 10.3164C6.05224 10.1136 6.27565 10.0599 6.42957 10.0599V13.0599C6.96349 13.0599 7.5869 12.8661 8.05615 12.3634L5.86299 10.3164Z" fill="white" fill-opacity="0.87" mask="url(#path-3-inside-1_827_4286)"/>
                    </svg>
                                          
            </button>
            <button type="button" class="text-align:center" style="margin-right:10px;background-color: #fff0!important;">
                <svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.8701 19.0596H8.87012C5.70012 19.0596 3.12012 16.4796 3.12012 13.3096C3.12012 10.1396 5.70012 7.55957 8.87012 7.55957H19.8701C20.2801 7.55957 20.6201 7.89957 20.6201 8.30957C20.6201 8.71957 20.2801 9.05957 19.8701 9.05957H8.87012C6.53012 9.05957 4.62012 10.9696 4.62012 13.3096C4.62012 15.6496 6.53012 17.5596 8.87012 17.5596H16.8701C17.2801 17.5596 17.6201 17.8996 17.6201 18.3096C17.6201 18.7196 17.2901 19.0596 16.8701 19.0596Z" fill="white" fill-opacity="0.38"/>
                    <path d="M8.87012 18.3096C6.11433 18.3096 3.87012 16.0654 3.87012 13.3096C3.87012 16.0638 6.1159 18.3096 8.87012 18.3096ZM3.87175 13.1808C3.94037 10.4842 6.15739 8.30957 8.87012 8.30957C6.15896 8.30957 3.94046 10.4857 3.87175 13.1808Z" stroke="white" stroke-opacity="0.38" stroke-width="1.5"/>
                    <mask id="path-3-inside-1_827_4174" fill="white">
                    <path d="M17.5698 11.5599C17.3798 11.5599 17.1898 11.4899 17.0398 11.3399C16.7498 11.0499 16.7498 10.5699 17.0398 10.2799L19.0698 8.24988L17.0398 6.21988C16.7498 5.92988 16.7498 5.44988 17.0398 5.15988C17.3298 4.86988 17.8098 4.86988 18.0998 5.15988L20.6598 7.71988C20.9498 8.00988 20.9498 8.48988 20.6598 8.77988L18.0998 11.3399C17.9498 11.4899 17.7598 11.5599 17.5698 11.5599Z"/>
                    </mask>
                    <path d="M17.5698 11.5599C17.3798 11.5599 17.1898 11.4899 17.0398 11.3399C16.7498 11.0499 16.7498 10.5699 17.0398 10.2799L19.0698 8.24988L17.0398 6.21988C16.7498 5.92988 16.7498 5.44988 17.0398 5.15988C17.3298 4.86988 17.8098 4.86988 18.0998 5.15988L20.6598 7.71988C20.9498 8.00988 20.9498 8.48988 20.6598 8.77988L18.0998 11.3399C17.9498 11.4899 17.7598 11.5599 17.5698 11.5599Z" fill="white" fill-opacity="0.38"/>
                    <path d="M17.0398 10.2799L18.1004 11.3405L18.1004 11.3405L17.0398 10.2799ZM19.0698 8.24988L20.1304 9.31054L21.1911 8.24988L20.1304 7.18922L19.0698 8.24988ZM17.0398 6.21988L18.1004 5.15922L18.1004 5.15922L17.0398 6.21988ZM18.0998 5.15988L19.1604 4.09922L19.1604 4.09922L18.0998 5.15988ZM20.6598 7.71988L19.5991 8.78054H19.5991L20.6598 7.71988ZM20.6598 8.77988L19.5991 7.71922L19.5991 7.71922L20.6598 8.77988ZM18.0998 11.3399L19.1604 12.4005L19.1604 12.4005L18.0998 11.3399ZM17.5698 10.0599C17.7561 10.0599 17.9543 10.1331 18.1004 10.2792L15.9791 12.4005C16.4252 12.8467 17.0034 13.0599 17.5698 13.0599V10.0599ZM18.1004 10.2792C18.3962 10.575 18.3962 11.0448 18.1004 11.3405L15.9791 9.21922C15.1033 10.095 15.1033 11.5248 15.9791 12.4005L18.1004 10.2792ZM18.1004 11.3405L20.1304 9.31054L18.0091 7.18922L15.9791 9.21922L18.1004 11.3405ZM20.1304 7.18922L18.1004 5.15922L15.9791 7.28054L18.0091 9.31054L20.1304 7.18922ZM18.1004 5.15922C18.3962 5.45501 18.3962 5.92476 18.1004 6.22054L15.9791 4.09922C15.1033 4.97501 15.1033 6.40476 15.9791 7.28054L18.1004 5.15922ZM18.1004 6.22054C17.8046 6.51633 17.3349 6.51633 17.0391 6.22054L19.1604 4.09922C18.2846 3.22344 16.8549 3.22344 15.9791 4.09922L18.1004 6.22054ZM17.0391 6.22054L19.5991 8.78054L21.7204 6.65922L19.1604 4.09922L17.0391 6.22054ZM19.5991 8.78054C19.3033 8.48476 19.3033 8.01501 19.5991 7.71922L21.7204 9.84054C22.5962 8.96476 22.5962 7.53501 21.7204 6.65922L19.5991 8.78054ZM19.5991 7.71922L17.0391 10.2792L19.1604 12.4005L21.7204 9.84054L19.5991 7.71922ZM17.0391 10.2792C17.1852 10.1331 17.3834 10.0599 17.5698 10.0599V13.0599C18.1361 13.0599 18.7143 12.8467 19.1604 12.4005L17.0391 10.2792Z" fill="white" fill-opacity="0.38" mask="url(#path-3-inside-1_827_4174)"/>
                    </svg>
                                        
            </button>
        </div> --}}
    </div>

</div>

