<style>
    button{
        width: fit-content;
    }

    select{
        height: 32px;
        background-color: #121212!important;
    }
</style>
<div class="tools-board grid grid-cols-2 border head px-2 py-4" id="text-template-show" style="align-items: center;background-color: #121212;display:none;:#1b1b1b;;border-color: #121212;border-radius: 0px 0px 11px 11px;" >
    <div class="grid gap-4 grid-flow-col auto-cols-max options" id="list-text-show-edit">
        <select id="font-fimaly" style="-webkit-appearance: none;text-align-last: center;font-size: 11px;border-color:#5a5959;" class="text-lg  text-white border rounded">
            <option value="" selected="" hidden="" disabled="">font</option>
            <option value="Droid">Droid</option>
            <option value="Sans">Sans</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Lato">Lato</option>
        </select>
        <select   id="font-size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected="" hidden="" disabled="">Size</option>
            @for($i=1;$i<=30;$i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <div title="LineHeight" class="flex  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height: max-content;">
            <svg style="    align-self: end;"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H21C21.41 21.25 21.75 21.59 21.75 22C21.75 22.41 21.41 22.75 21 22.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M21 2.75H3C2.59 2.75 2.25 2.41 2.25 2C2.25 1.59 2.59 1.25 3 1.25H21C21.41 1.25 21.75 1.59 21.75 2C21.75 2.41 21.41 2.75 21 2.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M12 18.75C11.59 18.75 11.25 18.41 11.25 18V6C11.25 5.59 11.59 5.25 12 5.25C12.41 5.25 12.75 5.59 12.75 6V18C12.75 18.41 12.41 18.75 12 18.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M14.8299 8.47039C14.6399 8.47039 14.4499 8.40039 14.2999 8.25039L11.9999 5.95039L9.69986 8.25039C9.40986 8.54039 8.92986 8.54039 8.63986 8.25039C8.34986 7.96039 8.34986 7.48039 8.63986 7.19039L11.4699 4.36039C11.7499 4.08039 12.2499 4.08039 12.5299 4.36039L15.3599 7.19039C15.6499 7.48039 15.6499 7.96039 15.3599 8.25039C15.2099 8.40039 15.0199 8.47039 14.8299 8.47039Z" fill="white" fill-opacity="0.87"/>
                <path d="M11.9999 19.4701C11.7999 19.4701 11.6099 19.3901 11.4699 19.2501L8.63986 16.4201C8.34986 16.1301 8.34986 15.6501 8.63986 15.3601C8.92986 15.0701 9.40986 15.0701 9.69986 15.3601L11.9999 17.6601L14.2999 15.3601C14.5899 15.0701 15.0699 15.0701 15.3599 15.3601C15.6499 15.6501 15.6499 16.1301 15.3599 16.4201L12.5299 19.2501C12.3899 19.3901 12.1999 19.4701 11.9999 19.4701Z" fill="white" fill-opacity="0.87"/>
            </svg>
            <select id="line-height" class="" style="color:#fff">
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

        <select id="shape-animate-property" type="button" style="-webkit-appearance: none;text-align-last: center;font-size: 11px;border-color:#5a5959;" class="text-lg  text-white border rounded">
            <option value=""selected disabled hidden><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_876_4954)">
              <mask id="path-1-inside-1_876_4954" fill="white">
              <path d="M1.89894 15.6846C1.2269 16.5976 0.914159 17.7259 1.02029 18.8545C1.12642 19.9832 1.64401 21.0334 2.47447 21.8052C3.30492 22.5769 4.39023 23.0161 5.52365 23.0393C6.65708 23.0625 7.75944 22.668 8.62076 21.9309C7.01496 21.6546 5.5243 20.9168 4.33069 19.8076C3.13708 18.6985 2.29213 17.2658 1.89894 15.6846Z"/>
              </mask>
              <path d="M1.89894 15.6846C1.2269 16.5976 0.914159 17.7259 1.02029 18.8545C1.12642 19.9832 1.64401 21.0334 2.47447 21.8052C3.30492 22.5769 4.39023 23.0161 5.52365 23.0393C6.65708 23.0625 7.75944 22.668 8.62076 21.9309C7.01496 21.6546 5.5243 20.9168 4.33069 19.8076C3.13708 18.6985 2.29213 17.2658 1.89894 15.6846Z" fill="white" fill-opacity="0.87"/>
              <path d="M1.89894 15.6846L23.4645 10.3222L12.0481 -35.5901L-15.9977 2.51117L1.89894 15.6846ZM8.62076 21.9309L23.0694 38.8147L59.0145 8.05394L12.3894 0.0305729L8.62076 21.9309ZM-15.9977 2.51117C-19.9035 7.81746 -21.7212 14.3751 -21.1043 20.935L23.1449 16.7741C23.5495 21.0766 22.3573 25.3777 19.7955 28.858L-15.9977 2.51117ZM-21.1043 20.935C-20.4875 27.4949 -17.4793 33.5987 -12.6527 38.0839L17.6016 5.52645C20.7673 8.46819 22.7403 12.4716 23.1449 16.7741L-21.1043 20.935ZM-12.6527 38.0839C-7.82609 42.569 -1.51835 45.1221 5.0691 45.2569L5.9782 0.821764C10.2988 0.910159 14.4359 2.5847 17.6016 5.52645L-12.6527 38.0839ZM5.0691 45.2569C11.6566 45.3917 18.0635 43.0987 23.0694 38.8147L-5.82792 5.0471C-2.54458 2.23731 1.65759 0.733369 5.9782 0.821764L5.0691 45.2569ZM12.3894 0.0305729C15.0352 0.485862 17.4912 1.70142 19.4578 3.52892L-10.7965 36.0863C-6.44262 40.1322 -1.00528 42.8233 4.8521 43.8312L12.3894 0.0305729ZM19.4578 3.52892C21.4245 5.35642 22.8166 7.71683 23.4645 10.3222L-19.6666 21.047C-18.2324 26.8148 -15.1503 32.0405 -10.7965 36.0863L19.4578 3.52892Z" fill="white" fill-opacity="0.87" mask="url(#path-1-inside-1_876_4954)"/>
              <mask id="path-3-inside-2_876_4954" fill="white">
              <path d="M4.9107 9.02734C3.72989 10.3335 3.09174 12.0409 3.12634 13.8014C3.16094 15.5619 3.86569 17.2429 5.09692 18.5016C6.32814 19.7604 7.99312 20.5022 9.75239 20.5758C11.5117 20.6494 13.2328 20.0492 14.5648 18.8976C12.0086 18.7698 9.59468 17.6825 7.80507 15.8528C6.01547 14.0231 4.98188 11.5857 4.9107 9.02734Z"/>
              </mask>
              <path d="M4.9107 9.02734C3.72989 10.3335 3.09174 12.0409 3.12634 13.8014C3.16094 15.5619 3.86569 17.2429 5.09692 18.5016C6.32814 19.7604 7.99312 20.5022 9.75239 20.5758C11.5117 20.6494 13.2328 20.0492 14.5648 18.8976C12.0086 18.7698 9.59468 17.6825 7.80507 15.8528C6.01547 14.0231 4.98188 11.5857 4.9107 9.02734Z" fill="white" fill-opacity="0.87"/>
              <path d="M4.9107 9.02734L27.1243 8.40934L25.5834 -46.9781L-11.5741 -5.87499L4.9107 9.02734ZM14.5648 18.8976L29.0985 35.7082L71.0142 -0.530264L15.6744 -3.29695L14.5648 18.8976ZM-11.5741 -5.87499C-16.5488 -0.371987 -19.2374 6.82123 -19.0916 14.2381L25.3443 13.3647C25.4208 17.2606 24.0086 21.0391 21.3955 23.9297L-11.5741 -5.87499ZM-19.0916 14.2381C-18.9458 21.6549 -15.9767 28.737 -10.7895 34.0402L20.9834 2.96306C23.7081 5.74876 25.2677 9.46879 25.3443 13.3647L-19.0916 14.2381ZM-10.7895 34.0402C-5.6024 39.3435 1.41215 42.4687 8.82396 42.7786L10.6808 -1.62703C14.5741 -1.46422 18.2587 0.177362 20.9834 2.96306L-10.7895 34.0402ZM8.82396 42.7786C16.2358 43.0885 23.4867 40.5599 29.0985 35.7082L0.0310307 2.08692C2.97878 -0.461579 6.78756 -1.78983 10.6808 -1.62703L8.82396 42.7786ZM15.6744 -3.29695C18.7061 -3.14538 21.569 -1.85582 23.6915 0.314208L-8.08138 31.3914C-2.37966 37.2207 5.31112 40.6849 13.4552 41.0921L15.6744 -3.29695ZM23.6915 0.314208C25.814 2.48424 27.0399 5.37504 27.1243 8.40934L-17.3029 9.64534C-17.0762 17.7964 -13.7831 25.562 -8.08138 31.3914L23.6915 0.314208Z" fill="white" fill-opacity="0.87" mask="url(#path-3-inside-2_876_4954)"/>
              <mask id="path-5-inside-3_876_4954" fill="white">
              <path d="M15.0688 0C16.7949 5.28778e-06 18.4823 0.511581 19.9178 1.4701C21.3532 2.42862 22.4724 3.79108 23.134 5.38537C23.7955 6.97966 23.9697 8.73424 23.6345 10.4275C23.2993 12.1207 22.4698 13.6766 21.2508 14.8986C20.0318 16.1207 18.4779 16.954 16.7856 17.2934C15.0932 17.6327 13.3381 17.4629 11.7422 16.8053C10.1463 16.1477 8.78109 15.0319 7.81903 13.5988C6.85696 12.1657 6.34121 10.4796 6.33694 8.75351C6.3341 7.605 6.55786 6.46722 6.9954 5.40532C7.43295 4.34342 8.07568 3.37827 8.8868 2.56515C9.69791 1.75203 10.6615 1.10691 11.7223 0.666737C12.7831 0.226568 13.9203 -3.51834e-06 15.0688 0Z"/>
              </mask>
              <path d="M15.0688 0C16.7949 5.28778e-06 18.4823 0.511581 19.9178 1.4701C21.3532 2.42862 22.4724 3.79108 23.134 5.38537C23.7955 6.97966 23.9697 8.73424 23.6345 10.4275C23.2993 12.1207 22.4698 13.6766 21.2508 14.8986C20.0318 16.1207 18.4779 16.954 16.7856 17.2934C15.0932 17.6327 13.3381 17.4629 11.7422 16.8053C10.1463 16.1477 8.78109 15.0319 7.81903 13.5988C6.85696 12.1657 6.34121 10.4796 6.33694 8.75351C6.3341 7.605 6.55786 6.46722 6.9954 5.40532C7.43295 4.34342 8.07568 3.37827 8.8868 2.56515C9.69791 1.75203 10.6615 1.10691 11.7223 0.666737C12.7831 0.226568 13.9203 -3.51834e-06 15.0688 0Z" fill="white" fill-opacity="0.87"/>
              <path d="M15.0688 0L15.0689 -22.2222L15.0688 0ZM6.33694 8.75351L28.5591 8.6985L6.33694 8.75351ZM15.0688 22.2222C12.4021 22.2222 9.79516 21.4319 7.57742 19.951L32.2581 -17.0108C27.1694 -20.4087 21.1878 -22.2222 15.0689 -22.2222L15.0688 22.2222ZM7.57742 19.951C5.35968 18.4701 3.63058 16.3652 2.60855 13.9021L43.6594 -3.13136C41.3143 -8.78302 37.3468 -13.6129 32.2581 -17.0108L7.57742 19.951ZM2.60855 13.9021C1.58653 11.439 1.31743 8.72827 1.83526 6.11232L45.4337 14.7426C46.6219 8.74021 46.0044 2.5203 43.6594 -3.13136L2.60855 13.9021ZM1.83526 6.11232C2.35309 3.49637 3.6346 1.09257 5.51792 -0.795411L36.9837 30.5927C41.3051 26.2606 44.2456 20.745 45.4337 14.7426L1.83526 6.11232ZM5.51792 -0.795411C7.40124 -2.68339 9.80186 -3.97085 12.4165 -4.49514L21.1546 39.0819C27.154 37.8788 32.6624 34.9247 36.9837 30.5927L5.51792 -0.795411ZM12.4165 -4.49514C15.0312 -5.01943 17.7426 -4.75704 20.2082 -3.7411L3.27627 37.3517C8.93371 39.6828 15.1551 40.2849 21.1546 39.0819L12.4165 -4.49514ZM20.2082 -3.7411C22.6738 -2.72517 24.783 -1.00128 26.2694 1.2128L-10.6313 25.9848C-7.22082 31.0651 -2.38117 35.0206 3.27627 37.3517L20.2082 -3.7411ZM26.2694 1.2128C27.7557 3.42687 28.5525 6.0318 28.5591 8.6985L-15.8852 8.80851C-15.8701 14.9274 -14.0418 20.9045 -10.6313 25.9848L26.2694 1.2128ZM28.5591 8.6985C28.5635 10.4729 28.2178 12.2307 27.5418 13.8713L-13.551 -3.06064C-15.1021 0.703726 -15.8953 4.73711 -15.8852 8.80851L28.5591 8.6985ZM27.5418 13.8713C26.8658 15.5119 25.8728 17.003 24.6197 18.2592L-6.8461 -13.1289C-9.72146 -10.2464 -11.9999 -6.82502 -13.551 -3.06064L27.5418 13.8713ZM24.6197 18.2592C23.3666 19.5154 21.8779 20.5121 20.239 21.1921L3.20555 -19.8587C-0.554975 -18.2983 -3.97074 -16.0114 -6.8461 -13.1289L24.6197 18.2592ZM20.239 21.1921C18.6001 21.8722 16.8432 22.2222 15.0688 22.2222L15.0689 -22.2222C10.9975 -22.2222 6.96608 -21.4191 3.20555 -19.8587L20.239 21.1921Z" fill="white" fill-opacity="0.87" mask="url(#path-5-inside-3_876_4954)"/>
              </g>
              <defs>
              <clipPath id="clip0_876_4954">
              <rect  width="20" height="20" fill="white"/>
              </clipPath>
              </defs>
              </svg></option>
              <option selected disabled value="0">Animate</option>
              <option value="bounce">bounce</option>
              <option value="flash">flash</option>
                          
        </select>
        

        

       

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-bold" title="Bold" style="text-align: center;;text-align: -webkit-center;">
                <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.87988 4.5C4.87988 3.4 5.77988 2.5 6.87988 2.5H11.9999C14.6199 2.5 16.7499 4.63 16.7499 7.25C16.7499 9.87 14.6199 12 11.9999 12H4.87988V4.5Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.87988 12H14.3799C16.9999 12 19.1299 14.13 19.1299 16.75C19.1299 19.37 16.9999 21.5 14.3799 21.5H6.87988C5.77988 21.5 4.87988 20.6 4.87988 19.5V12V12Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
            </label> 
            Bold
            <input type="checkbox" id="text-bold" style="display:none;">                 
        </button>

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-underline" title="underline" style="text-align: center;;text-align: -webkit-center;">
            <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 21H19" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5 3V10C5 13.87 8.13 17 12 17C15.87 17 19 13.87 19 10V3" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label><input type="checkbox" id="text-underline" style="display:none"> 
        UnderLine             
        </button>


        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-itlaic" title="itlaic" style="text-align: center;;text-align: -webkit-center;">
            <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.62012 3H18.8701" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.12012 21H14.3701" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.25 3L9.75 21" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </label><input type="checkbox" id="text-itlaic" style="display:none">    
        Italic    
        </button>

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="text-inline" title="inline" style="text-align: center;;text-align: -webkit-center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.66992 7.17027V5.35027C2.66992 4.20027 3.59992 3.28027 4.73992 3.28027H19.2599C20.4099 3.28027 21.3299 4.21027 21.3299 5.35027V7.17027" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 20.7204V4.11035" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.06006 20.7197H15.9401" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <line x1="3" y1="12.5" x2="21.66" y2="12.5" stroke="white" stroke-opacity="0.87"/>
            </svg>          
        </label><input type="checkbox" id="text-inline" style="display:none">     
        InLine   
        </button>

        <button type="button" class="text-align:center" style="background-color: #fff0!important;">
            <label for="color-text" title="color" style="text-align: center;;text-align: -webkit-center;">
            <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.01012 17.9998L3.00012 13.9898C1.66012 12.6498 1.66012 11.3198 3.00012 9.9798L9.68012 3.2998L17.0301 10.6498C17.4001 11.0198 17.4001 11.6198 17.0301 11.9898L11.0101 18.0098C9.69012 19.3298 8.35012 19.3298 7.01012 17.9998Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.3501 1.9502L9.6901 3.29016" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.06982 11.9197L17.1898 11.2598" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 22H16" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.85 15C18.85 15 17 17.01 17 18.24C17 19.26 17.83 20.09 18.85 20.09C19.87 20.09 20.7 19.26 20.7 18.24C20.7 17.01 18.85 15 18.85 15Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </label>
            <input type="color" id="color-text" value="#000" style="display: none;"/> 
            Color  
        </button>



        <button type="button"  class="text-align:center  tool" style="background-color: #fff0!important;    justify-self: center;text-align:center;   text-align: -webkit-center;">
            <label for="shape-border" title="Color-Border" style="text-align: center;;text-align: -webkit-center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.01012 17.9998L3.00012 13.9898C1.66012 12.6498 1.66012 11.3198 3.00012 9.9798L9.68012 3.2998L17.0301 10.6498C17.4001 11.0198 17.4001 11.6198 17.0301 11.9898L11.0101 18.0098C9.69012 19.3298 8.35012 19.3298 7.01012 17.9998Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.34961 1.9502L9.68961 3.29016" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2.07031 11.9197L17.1903 11.2598" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3 22H16" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M18.85 15C18.85 15 17 17.01 17 18.24C17 19.26 17.83 20.09 18.85 20.09C19.87 20.09 20.7 19.26 20.7 18.24C20.7 17.01 18.85 15 18.85 15Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </label>
            Border
               <input type="color" id="shape-border" class="shape-border" style="display: none"/>         
          </button>
          <button data-dropdown-toggle="shadow-menu" title="Shadow" type="button" class="text-align:center" style="background-color: #fff0!important;    justify-self: center;text-align:center;   text-align: -webkit-center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.40332 11.9999C1.40332 6.14755 6.14755 1.40332 11.9999 1.40332C17.8522 1.40332 22.5963 6.14755 22.5963 11.9999C22.5963 17.852 17.8522 22.5964 11.9999 22.5964C6.14755 22.5964 1.40332 17.852 1.40332 11.9999ZM11.9999 2.92331C6.98702 2.92331 2.92333 6.98702 2.92333 11.9999C2.92333 17.0127 6.98702 21.0764 11.9999 21.0764C17.0126 21.0764 21.0763 17.0127 21.0763 11.9999C21.0763 6.98702 17.0126 2.92331 11.9999 2.92331Z" fill="white" fill-opacity="0.87"/>
              <path d="M1.40332 11.9999C1.40332 6.14755 6.14755 1.40332 11.9999 1.40332C17.8522 1.40332 22.5963 6.14755 22.5963 11.9999C22.5963 17.852 17.8522 22.5964 11.9999 22.5964C6.14755 22.5964 1.40332 17.852 1.40332 11.9999ZM11.9999 2.92331C6.98702 2.92331 2.92333 6.98702 2.92333 11.9999C2.92333 17.0127 6.98702 21.0764 11.9999 21.0764C17.0126 21.0764 21.0763 17.0127 21.0763 11.9999C21.0763 6.98702 17.0126 2.92331 11.9999 2.92331Z" stroke="white" stroke-opacity="0.87" stroke-width="53.3333"/>
              <g opacity="0.05">
              <mask id="path-3-inside-1_876_4443" fill="white">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8525 21.4012C13.9823 15.9241 13.9823 8.07511 10.8525 2.59808L11.5471 2.20117C14.8174 7.92413 14.8174 16.0751 11.5471 21.798L10.8525 21.4012Z"/>
              </mask>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8525 21.4012C13.9823 15.9241 13.9823 8.07511 10.8525 2.59808L11.5471 2.20117C14.8174 7.92413 14.8174 16.0751 11.5471 21.798L10.8525 21.4012Z" fill="white" fill-opacity="0.87"/>
              <path d="M10.8525 21.4012L-35.4538 -5.05942L-61.9176 41.2524L-15.6026 67.7107L10.8525 21.4012ZM10.8525 2.59808L-15.6083 -43.7082L-61.9144 -17.2474L-35.4538 29.0588L10.8525 2.59808ZM11.5471 2.20117L57.8534 -24.2596L31.3926 -70.5659L-14.9137 -44.1051L11.5471 2.20117ZM11.5471 21.798L-14.908 68.1075L31.3955 94.5593L57.8532 48.2591L11.5471 21.798ZM57.1589 47.8618C69.6579 25.9885 69.658 -1.98918 57.1588 -23.8627L-35.4538 29.0588C-39.1474 22.5949 -40.1335 16.5367 -40.1335 11.9996C-40.1335 7.46257 -39.1474 1.40441 -35.4538 -5.05942L57.1589 47.8618ZM37.3134 48.9043L38.008 48.5074L-14.9137 -44.1051L-15.6083 -43.7082L37.3134 48.9043ZM-34.7591 28.662C-38.3601 22.3604 -39.3335 16.4518 -39.3335 11.9996C-39.3335 7.54749 -38.3601 1.63872 -34.759 -4.66307L57.8532 48.2591C70.4932 26.1395 70.493 -2.14034 57.8534 -24.2596L-34.7591 28.662ZM38.0023 -24.5115L37.3077 -24.9083L-15.6026 67.7107L-14.908 68.1075L38.0023 -24.5115Z" fill="white" fill-opacity="0.87" mask="url(#path-3-inside-1_876_4443)"/>
              </g>
              <g opacity="0.1">
              <mask id="path-5-inside-2_876_4443" fill="white">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6514 21.5639C14.783 15.9923 14.783 8.00754 11.6514 2.43591L12.3488 2.04395C15.6172 7.85898 15.6172 16.1409 12.3488 21.9559L11.6514 21.5639Z"/>
              </mask>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6514 21.5639C14.783 15.9923 14.783 8.00754 11.6514 2.43591L12.3488 2.04395C15.6172 7.85898 15.6172 16.1409 12.3488 21.9559L11.6514 21.5639Z" fill="white" fill-opacity="0.87"/>
              <path d="M11.6514 21.5639L-34.8414 -4.56784L-60.9725 41.9237L-14.4816 68.056L11.6514 21.5639ZM11.6514 2.43591L-14.48 -44.0571L-60.9734 -17.9255L-34.8414 28.5677L11.6514 2.43591ZM12.3488 2.04395L58.8415 -24.0879L32.7099 -70.5801L-13.7826 -44.449L12.3488 2.04395ZM12.3488 21.9559L-13.7842 68.448L32.709 94.5816L58.8415 48.0878L12.3488 21.9559ZM58.1441 47.6957C70.3965 25.8967 70.3965 -1.89684 58.1441 -23.6959L-34.8414 28.5677C-38.4137 22.2119 -39.3333 16.3314 -39.3333 11.9999C-39.3333 7.66846 -38.4137 1.78791 -34.8414 -4.56784L58.1441 47.6957ZM37.7827 48.9289L38.4801 48.5369L-13.7826 -44.449L-14.48 -44.0571L37.7827 48.9289ZM-34.144 28.1758C-37.6259 21.9808 -38.5333 16.248 -38.5333 11.9999C-38.5333 7.75194 -37.6259 2.01908 -34.144 -4.17587L58.8415 48.0878C71.2307 26.0453 71.2307 -2.04541 58.8415 -24.0879L-34.144 28.1758ZM38.4817 -24.5361L37.7843 -24.9281L-14.4816 68.056L-13.7842 68.448L38.4817 -24.5361Z" fill="white" fill-opacity="0.87" mask="url(#path-5-inside-2_876_4443)"/>
              </g>
              <g opacity="0.15">
              <mask id="path-7-inside-3_876_4443" fill="white">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5137 21.6102C15.5601 15.9923 15.5623 8.02252 12.52 2.40129L13.2235 2.02051C16.3945 7.8794 16.3923 16.1359 13.2169 21.9916L12.5137 21.6102Z"/>
              </mask>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5137 21.6102C15.5601 15.9923 15.5623 8.02252 12.52 2.40129L13.2235 2.02051C16.3945 7.8794 16.3923 16.1359 13.2169 21.9916L12.5137 21.6102Z" fill="white" fill-opacity="0.87"/>
              <path d="M12.5137 21.6102L-34.3698 -3.81383L-59.7918 43.0659L-12.9141 68.4917L12.5137 21.6102ZM12.52 2.40129L-12.8655 -44.5031L-59.7698 -19.1176L-34.3844 27.7867L12.52 2.40129ZM13.2235 2.02051L60.1279 -23.3651L34.7423 -70.2693L-12.162 -44.8839L13.2235 2.02051ZM13.2169 21.9916L-12.2108 68.8731L34.675 94.3032L60.1008 47.4151L13.2169 21.9916ZM59.3972 47.0342C71.0399 25.5644 71.0421 -1.51818 59.4244 -22.9841L-34.3844 27.7867C-37.6983 21.6638 -38.5345 16.0795 -38.5332 11.9904C-38.5319 7.90174 -37.6923 2.31309 -34.3698 -3.81383L59.3972 47.0342ZM37.9055 49.3057L38.609 48.9249L-12.162 -44.8839L-12.8655 -44.5031L37.9055 49.3057ZM-33.6808 27.4061C-36.9103 21.439 -37.7345 15.9972 -37.7332 11.9906C-37.732 7.98427 -36.9045 2.53865 -33.6669 -3.43181L60.1008 47.4151C71.8716 25.7082 71.8746 -1.66088 60.1279 -23.3651L-33.6808 27.4061ZM38.6447 -24.8898L37.9414 -25.2713L-12.9141 68.4917L-12.2108 68.8731L38.6447 -24.8898Z" fill="white" fill-opacity="0.87" mask="url(#path-7-inside-3_876_4443)"/>
              </g>
              <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M13.4609 21.486C16.3127 15.8851 16.3135 8.1202 13.4634 2.51804L14.1764 2.15527C17.1426 7.98542 17.1417 16.0201 14.1738 21.849L13.4609 21.486Z" fill="white" fill-opacity="0.87"/>
              <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M14.4395 21.2734C17.0511 15.741 17.0542 8.28383 14.4485 2.74689L15.1723 2.40625C17.8796 8.1591 17.8766 15.8665 15.1629 21.615L14.4395 21.2734Z" fill="white" fill-opacity="0.87"/>
              <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M15.4688 20.9045C17.7753 15.5129 17.7769 8.49906 15.4732 3.10522L16.2089 2.79102C18.5984 8.38564 18.5968 15.6266 16.2043 21.2192L15.4688 20.9045Z" fill="white" fill-opacity="0.87"/>
              <path opacity="0.35" fill-rule="evenodd" clip-rule="evenodd" d="M16.5293 20.393C18.4879 15.2332 18.4899 8.78565 16.5352 3.62311L17.2835 3.33984C19.3072 8.68504 19.3051 15.3343 17.2773 20.677L16.5293 20.393Z" fill="white" fill-opacity="0.87"/>
              <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M17.625 19.678C19.1903 14.8761 19.1919 9.14093 17.6296 4.33727L18.3904 4.08984C20.005 9.05444 20.0034 14.963 18.3856 19.9258L17.625 19.678Z" fill="white" fill-opacity="0.87"/>
              <path opacity="0.45" fill-rule="evenodd" clip-rule="evenodd" d="M18.7539 18.6691C19.8803 14.4212 19.8816 9.59539 18.7576 5.34619L19.531 5.1416C20.6905 9.52501 20.6893 14.492 19.5272 18.8741L18.7539 18.6691Z" fill="white" fill-opacity="0.87"/>
              <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M19.9087 17.2033C20.5634 13.8203 20.5632 10.1775 19.9082 6.79466L20.6936 6.64258C21.368 10.1259 21.3682 13.8719 20.6941 17.3553L19.9087 17.2033Z" fill="white" fill-opacity="0.87"/>
              </svg> 
             
              Shadow
          </button>
          <div id="shadow-menu" class="z-20 hidden rounded-lg grid grid-cols-1" style="width: max-content;max-height: -webkit-fill-available;line-height: normal;background-color: #121212!important; border-color:#121212!important;margin-right:10px!important;transform: translate(-745px, 236px);padding: 8px;">
          
              <div class="items-center mb-4 grid grid-cols-2">
                <div>
                  <input id="default-type" type="checkbox" value="inset" class="default-type shape-shadow-property w-50 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="default-type" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">inset</label>
                </div>
                <div>
                  <input id="color" type="color" value="000" class="color shape-shadow-property w-50 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="color" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">color</label>
                </div>
              </div>
              <div class=" items-center mb-4">
                <label for="xs" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">x</label>
                  <input id="xs" type="range" value="0" class="xs shape-shadow-property w-50 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  
              </div>
              <div class=" items-center mb-4">
                <label for="ys" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">y</label>
                  <input id="ys" type="range" value="0" class="ys shape-shadow-property w-50 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                 
              </div>
              <div class=" items-center mb-4">
                <label for="blur" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">blur</label>
                <input id="blur" type="range" value="0" class="blur-shadow shape-shadow-property w-50 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              
            </div>
            <div class=" items-center mb-4">
              <label for="spreed" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">spreed</label>
              <input id="spreed" type="range" value="0" class="spreed shape-shadow-property w-50 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
      
          
          </div>

            <button id="dropdownLeftEndButtons" data-dropdown-toggle="dropdownLeftEnds" title="Size-OutLine"
          data-dropdown-placement="bottom-end" type="button" class="text-align:center" style="vertical-align: sub;background-color: #fff0!important;    justify-self: center; text-align:center;   text-align: -webkit-center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
              
             OutLine
        </button>
            <div id="dropdownLeftEnds" class="z-20 hidden rounded-lg shadow"
            style="    width: max-content;
            max-height: -webkit-fill-available;
            line-height: normal;
        background-color: #121212!important; border-color:#121212!important;margin-right:10px!important;transform: translate(-745px, 236px);padding: 8px;">
      
      <ul>
        <li>
          <input type="range" min="0" step="1" max="50" value="5"   class="shape-border-size w-full h-2 bg-blue-100 appearance-none" />
        </li>
        <li>
          <input type="range" min="0" step="1" max="50" value="2"  class="shape-border-raduis w-full h-2 bg-blue-100 appearance-none" />
        </li>
      </ul>
    
          </div>
    
          
        
    
    
          <button type="button"  class="text-align:center" style="background-color: #fff0!important;    justify-self: center;">
            <label for="shape-background" title="BackGround" style="text-align:center;   text-align: -webkit-center;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.0399 10.6396L9.68986 3.28965L8.81986 2.41965C8.52986 2.12965 8.04986 2.12965 7.75986 2.41965C7.46986 2.70965 7.46986 3.18965 7.75986 3.47965L8.62986 4.34965L2.99986 9.97965C2.35986 10.6196 2.01986 11.2696 1.99986 11.9196C1.97986 12.6096 2.31986 13.2996 2.99986 13.9896L7.00986 17.9996C8.34986 19.3296 9.68986 19.3296 11.0199 17.9996L17.0399 11.9796C17.2399 11.7796 17.3299 11.5096 17.3099 11.2496C17.2999 11.0296 17.1999 10.7996 17.0399 10.6396Z" fill="white" fill-opacity="0.87"/>
                <path d="M9.16019 4.87998L9.68986 4.35031L16.5095 11.17C16.5368 11.1973 16.5591 11.2501 16.5606 11.2837L16.5612 11.2954L16.5621 11.3072C16.566 11.3586 16.548 11.4109 16.5095 11.4493L10.4895 17.4693C9.90745 18.0514 9.41947 18.2471 9.01861 18.2471C8.61724 18.2471 8.1265 18.0509 7.53912 17.4683C7.53882 17.4679 7.53851 17.4676 7.5382 17.4673L3.53223 13.4614C2.93316 12.8529 2.7379 12.3506 2.74952 11.942C2.76178 11.551 2.96818 11.072 3.53019 10.51L9.16019 4.87998Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                <mask id="path-3-inside-1_876_3433" fill="white">
                <path d="M16 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H16C16.41 21.25 16.75 21.59 16.75 22C16.75 22.41 16.41 22.75 16 22.75Z"/>
                </mask>
                <path d="M16 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H16C16.41 21.25 16.75 21.59 16.75 22C16.75 22.41 16.41 22.75 16 22.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M16 21.25H3V24.25H16V21.25ZM3 21.25C3.41843 21.25 3.75 21.5816 3.75 22H0.75C0.75 23.2384 1.76157 24.25 3 24.25V21.25ZM3.75 22C3.75 22.4184 3.41843 22.75 3 22.75V19.75C1.76157 19.75 0.75 20.7616 0.75 22H3.75ZM3 22.75H16V19.75H3V22.75ZM16 22.75C15.5816 22.75 15.25 22.4184 15.25 22H18.25C18.25 20.7616 17.2384 19.75 16 19.75V22.75ZM15.25 22C15.25 21.5816 15.5816 21.25 16 21.25V24.25C17.2384 24.25 18.25 23.2384 18.25 22H15.25Z" fill="white" fill-opacity="0.87" mask="url(#path-3-inside-1_876_3433)"/>
                <path d="M19.35 14.7803C19.09 14.5003 18.61 14.5003 18.35 14.7803C18.04 15.1203 16.5 16.8503 16.5 18.1703C16.5 19.4703 17.55 20.5203 18.85 20.5203C20.15 20.5203 21.2 19.4703 21.2 18.1703C21.2 16.8603 19.66 15.1203 19.35 14.7803Z" fill="white" fill-opacity="0.87"/>
                <path d="M18.85 15.3456C19.0301 15.5468 19.414 15.993 19.7655 16.5251C20.1817 17.1548 20.45 17.7549 20.45 18.1703C20.45 19.0561 19.7358 19.7703 18.85 19.7703C17.9642 19.7703 17.25 19.0561 17.25 18.1703C17.25 17.7495 17.5188 17.1491 17.9341 16.5219C18.2855 15.9912 18.6692 15.5471 18.85 15.3456Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                </svg>
              </label>
              Background
                 <input type="color" id="shape-background" style="display: none" class="shape-background"/>   
          </button>
        
          <button id="dropdownLeftEndButtonss" title="opacity" data-dropdown-toggle="dropdownLeftEndss"
          data-dropdown-placement="bottom-end" type="button"  class="text-align:center" style="background-color: #fff0!important;    justify-self: center;text-align:center;   text-align: -webkit-center;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_876_3259)">
              <mask id="path-1-inside-1_876_3259" fill="white">
              <path d="M7.5 4.5H4.5V7.5H7.5V4.5Z"/>
              </mask>
              <path d="M7.5 4.5H4.5V7.5H7.5V4.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M4.5 4.5V-20.5H-20.5V4.5H4.5ZM7.5 4.5H32.5V-20.5H7.5V4.5ZM7.5 7.5V32.5H32.5V7.5H7.5ZM4.5 7.5H-20.5V32.5H4.5V7.5ZM4.5 29.5H7.5V-20.5H4.5V29.5ZM-17.5 4.5V7.5H32.5V4.5H-17.5ZM7.5 -17.5H4.5V32.5H7.5V-17.5ZM29.5 7.5V4.5H-20.5V7.5H29.5Z" fill="white" fill-opacity="0.87" mask="url(#path-1-inside-1_876_3259)"/>
              <mask id="path-3-inside-2_876_3259" fill="white">
              <path d="M10.5 7.5H7.5V10.5H10.5V7.5Z"/>
              </mask>
              <path d="M10.5 7.5H7.5V10.5H10.5V7.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M7.5 7.5V-17.5H-17.5V7.5H7.5ZM10.5 7.5H35.5V-17.5H10.5V7.5ZM10.5 10.5V35.5H35.5V10.5H10.5ZM7.5 10.5H-17.5V35.5H7.5V10.5ZM7.5 32.5H10.5V-17.5H7.5V32.5ZM-14.5 7.5V10.5H35.5V7.5H-14.5ZM10.5 -14.5H7.5V35.5H10.5V-14.5ZM32.5 10.5V7.5H-17.5V10.5H32.5Z" fill="white" fill-opacity="0.87" mask="url(#path-3-inside-2_876_3259)"/>
              <mask id="path-5-inside-3_876_3259" fill="white">
              <path d="M13.5 4.5H10.5V7.5H13.5V4.5Z"/>
              </mask>
              <path d="M13.5 4.5H10.5V7.5H13.5V4.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M10.5 4.5V-20.5H-14.5V4.5H10.5ZM13.5 4.5H38.5V-20.5H13.5V4.5ZM13.5 7.5V32.5H38.5V7.5H13.5ZM10.5 7.5H-14.5V32.5H10.5V7.5ZM10.5 29.5H13.5V-20.5H10.5V29.5ZM-11.5 4.5V7.5H38.5V4.5H-11.5ZM13.5 -17.5H10.5V32.5H13.5V-17.5ZM35.5 7.5V4.5H-14.5V7.5H35.5Z" fill="white" fill-opacity="0.87" mask="url(#path-5-inside-3_876_3259)"/>
              <mask id="path-7-inside-4_876_3259" fill="white">
              <path d="M19.5 4.5H16.5V7.5H19.5V4.5Z"/>
              </mask>
              <path d="M19.5 4.5H16.5V7.5H19.5V4.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M16.5 4.5V-20.5H-8.5V4.5H16.5ZM19.5 4.5H44.5V-20.5H19.5V4.5ZM19.5 7.5V32.5H44.5V7.5H19.5ZM16.5 7.5H-8.5V32.5H16.5V7.5ZM16.5 29.5H19.5V-20.5H16.5V29.5ZM-5.5 4.5V7.5H44.5V4.5H-5.5ZM19.5 -17.5H16.5V32.5H19.5V-17.5ZM41.5 7.5V4.5H-8.5V7.5H41.5Z" fill="white" fill-opacity="0.87" mask="url(#path-7-inside-4_876_3259)"/>
              <path d="M7.5 10.5H4.5V13.5H7.5V10.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M13.5 10.5H10.5V13.5H13.5V10.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M19.5 10.5H16.5V13.5H19.5V10.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M7.5 16.5H4.5V19.5H7.5V16.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M13.5 16.5H10.5V19.5H13.5V16.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M19.5 16.5H16.5V19.5H19.5V16.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M16.5 7.5H13.5V10.5H16.5V7.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M10.5 13.5H7.5V16.5H10.5V13.5Z" fill="white" fill-opacity="0.87"/>
              <path d="M16.5 13.5H13.5V16.5H16.5V13.5Z" fill="white" fill-opacity="0.87"/>
              </g>
              <defs>
              <clipPath id="clip0_876_3259">
              <rect  width="20" height="20" fill="white"/>
              </clipPath>
              </defs>
              </svg>
             
               opacity                 
          </button>

          <button type="button" id="clear-text-background" class="text-align:center" style="background-color: #fff0!important;    justify-self: center;">
            <label for="clear-text-background" title="BackGround" style="text-align:center;   text-align: -webkit-center;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.0399 10.6396L9.68986 3.28965L8.81986 2.41965C8.52986 2.12965 8.04986 2.12965 7.75986 2.41965C7.46986 2.70965 7.46986 3.18965 7.75986 3.47965L8.62986 4.34965L2.99986 9.97965C2.35986 10.6196 2.01986 11.2696 1.99986 11.9196C1.97986 12.6096 2.31986 13.2996 2.99986 13.9896L7.00986 17.9996C8.34986 19.3296 9.68986 19.3296 11.0199 17.9996L17.0399 11.9796C17.2399 11.7796 17.3299 11.5096 17.3099 11.2496C17.2999 11.0296 17.1999 10.7996 17.0399 10.6396Z" fill="white" fill-opacity="0.87"/>
                <path d="M9.16019 4.87998L9.68986 4.35031L16.5095 11.17C16.5368 11.1973 16.5591 11.2501 16.5606 11.2837L16.5612 11.2954L16.5621 11.3072C16.566 11.3586 16.548 11.4109 16.5095 11.4493L10.4895 17.4693C9.90745 18.0514 9.41947 18.2471 9.01861 18.2471C8.61724 18.2471 8.1265 18.0509 7.53912 17.4683C7.53882 17.4679 7.53851 17.4676 7.5382 17.4673L3.53223 13.4614C2.93316 12.8529 2.7379 12.3506 2.74952 11.942C2.76178 11.551 2.96818 11.072 3.53019 10.51L9.16019 4.87998Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                <mask id="path-3-inside-1_876_3433" fill="white">
                <path d="M16 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H16C16.41 21.25 16.75 21.59 16.75 22C16.75 22.41 16.41 22.75 16 22.75Z"/>
                </mask>
                <path d="M16 22.75H3C2.59 22.75 2.25 22.41 2.25 22C2.25 21.59 2.59 21.25 3 21.25H16C16.41 21.25 16.75 21.59 16.75 22C16.75 22.41 16.41 22.75 16 22.75Z" fill="white" fill-opacity="0.87"/>
                <path d="M16 21.25H3V24.25H16V21.25ZM3 21.25C3.41843 21.25 3.75 21.5816 3.75 22H0.75C0.75 23.2384 1.76157 24.25 3 24.25V21.25ZM3.75 22C3.75 22.4184 3.41843 22.75 3 22.75V19.75C1.76157 19.75 0.75 20.7616 0.75 22H3.75ZM3 22.75H16V19.75H3V22.75ZM16 22.75C15.5816 22.75 15.25 22.4184 15.25 22H18.25C18.25 20.7616 17.2384 19.75 16 19.75V22.75ZM15.25 22C15.25 21.5816 15.5816 21.25 16 21.25V24.25C17.2384 24.25 18.25 23.2384 18.25 22H15.25Z" fill="white" fill-opacity="0.87" mask="url(#path-3-inside-1_876_3433)"/>
                <path d="M19.35 14.7803C19.09 14.5003 18.61 14.5003 18.35 14.7803C18.04 15.1203 16.5 16.8503 16.5 18.1703C16.5 19.4703 17.55 20.5203 18.85 20.5203C20.15 20.5203 21.2 19.4703 21.2 18.1703C21.2 16.8603 19.66 15.1203 19.35 14.7803Z" fill="white" fill-opacity="0.87"/>
                <path d="M18.85 15.3456C19.0301 15.5468 19.414 15.993 19.7655 16.5251C20.1817 17.1548 20.45 17.7549 20.45 18.1703C20.45 19.0561 19.7358 19.7703 18.85 19.7703C17.9642 19.7703 17.25 19.0561 17.25 18.1703C17.25 17.7495 17.5188 17.1491 17.9341 16.5219C18.2855 15.9912 18.6692 15.5471 18.85 15.3456Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                </svg>
              </label>
              remove
          </button>

          
              <div id="dropdownLeftEndss" class="z-20 hidden rounded-lg shadow"
              style="    width: max-content;
              max-height: -webkit-fill-available;
              line-height: normal;
          background-color: #121212!important; border-color:#121212!important;margin-right:10px!important;transform: translate(-745px, 236px);padding: 8px;">
    
            <input type="range" min="0" step=".1" max="1" value="1"  id="shape-optciy" class="shape-optciy w-full h-2 bg-blue-100 appearance-none" />
    
            </div>
        
        
      

          <button id="layer-text" type="button" class="text-align:center" style="width: 100%;align-items: center;background-color: #0000!important;">
            <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.0001 30.3337C8.09342 30.3337 1.66675 23.907 1.66675 16.0003C1.66675 8.09366 8.09342 1.66699 16.0001 1.66699C23.9067 1.66699 30.3334 8.09366 30.3334 16.0003C30.3334 23.907 23.9067 30.3337 16.0001 30.3337ZM16.0001 3.66699C9.20008 3.66699 3.66675 9.20033 3.66675 16.0003C3.66675 22.8003 9.20008 28.3337 16.0001 28.3337C22.8001 28.3337 28.3334 22.8003 28.3334 16.0003C28.3334 9.20033 22.8001 3.66699 16.0001 3.66699Z" fill="#292D32"/>
                <path d="M16.0001 29.5837C8.50763 29.5837 2.41675 23.4928 2.41675 16.0003C2.41675 8.50787 8.50763 2.41699 16.0001 2.41699C23.4925 2.41699 29.5834 8.50787 29.5834 16.0003C29.5834 23.4928 23.4925 29.5837 16.0001 29.5837ZM16.0001 2.91699C8.78587 2.91699 2.91675 8.78611 2.91675 16.0003C2.91675 23.2145 8.78587 29.0837 16.0001 29.0837C23.2143 29.0837 29.0834 23.2145 29.0834 16.0003C29.0834 8.78611 23.2143 2.91699 16.0001 2.91699Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                <path d="M21.3334 17H10.6667C10.1201 17 9.66675 16.5467 9.66675 16C9.66675 15.4533 10.1201 15 10.6667 15H21.3334C21.8801 15 22.3334 15.4533 22.3334 16C22.3334 16.5467 21.8801 17 21.3334 17Z" fill="#292D32"/>
                <path d="M21.3334 16.25H10.6667C10.5343 16.25 10.4167 16.1325 10.4167 16C10.4167 15.8675 10.5343 15.75 10.6667 15.75H21.3334C21.4659 15.75 21.5834 15.8675 21.5834 16C21.5834 16.1325 21.4659 16.25 21.3334 16.25Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                <path d="M16 22.3337C15.4533 22.3337 15 21.8803 15 21.3337V10.667C15 10.1203 15.4533 9.66699 16 9.66699C16.5467 9.66699 17 10.1203 17 10.667V21.3337C17 21.8803 16.5467 22.3337 16 22.3337Z" fill="#292D32"/>
                <path d="M16 21.5837C15.8675 21.5837 15.75 21.4661 15.75 21.3337V10.667C15.75 10.5345 15.8675 10.417 16 10.417C16.1325 10.417 16.25 10.5345 16.25 10.667V21.3337C16.25 21.4661 16.1325 21.5837 16 21.5837Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5"/>
                </svg>
                Text
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

            <div class="grid grid-flow-col auto-cols-max" style="text-align: center; justify-self: end;">
                                        
           
         {{-- 
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

