$(document).on("click","#circle",function(){
    $(".preview").append(`
    <div class="border border-gray-800 rounded rounded-full box" style="border-width: 5px;border-color:#fff;width:90px;height:90px!important">
    <div onclick="return this.parentNode.remove();"  class="absolute h-9 w-9 -right-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.6084 13.75H11.3834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.91675 10.417H12.0834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                                                               
                                    </div>
                                    <div class="absolute h-9 w-9 -left-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.90845 4.20801C10.2668 6.50801 12.1334 8.26634 14.4501 8.49967" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.5 18.333H17.5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            

                                    </div>
    </div>
    `);
});

$(document).on("click","#Square",function(){
    $(".preview").append(`
    <div class="border border-gray-800 rounded rounded-xl box" style="border-width: 5px;border-color:#fff;width:60px;height:90px!important">
    <div onclick="return this.parentNode.remove();"  class="absolute h-9 w-9 -right-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.6084 13.75H11.3834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.91675 10.417H12.0834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                                                               
                                    </div>
                                    <div class="absolute h-9 w-9 -left-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.90845 4.20801C10.2668 6.50801 12.1334 8.26634 14.4501 8.49967" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.5 18.333H17.5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            

                                    </div>
    </div>
    `);
});

$(document).on("click","#hexagon",function(){
    $(".preview").append(`
    <div class="border border-gray-800 rounded rounded-xl box hexagon" style="border-width: 5px;border-color:#fff;">
    <div onclick="return this.parentNode.remove();"  class="absolute h-9 w-9 -right-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.6084 13.75H11.3834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.91675 10.417H12.0834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                                                               
                                    </div>
                                    <div class="absolute h-9 w-9 -left-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.90845 4.20801C10.2668 6.50801 12.1334 8.26634 14.4501 8.49967" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.5 18.333H17.5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            

                                    </div>
    </div>
    `);
});

$(document).on("click","#rectangular",function(){
    $(".preview").append(`
    <div class="border border-gray-800 rounded rounded-xl box" style="border-width: 5px;border-color:#fff;width:90px;height:45px!important">
    <div onclick="return this.parentNode.remove();"  class="absolute h-9 w-9 -right-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5 4.98307C14.725 4.70807 11.9333 4.56641 9.15 4.56641C7.5 4.56641 5.85 4.64974 4.2 4.81641L2.5 4.98307" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.08325 4.14199L7.26659 3.05033C7.39992 2.25866 7.49992 1.66699 8.90825 1.66699H11.0916C12.4999 1.66699 12.6083 2.29199 12.7333 3.05866L12.9166 4.14199" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.7084 7.61621L15.1667 16.0079C15.0751 17.3162 15.0001 18.3329 12.6751 18.3329H7.32508C5.00008 18.3329 4.92508 17.3162 4.83341 16.0079L4.29175 7.61621" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.6084 13.75H11.3834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7.91675 10.417H12.0834" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                                                               
                                    </div>
                                    <div class="absolute h-9 w-9 -left-0 -top-6 border rounded rounded-full" style="    border-color: #121212;
                                    background-color: #121212;
                                    text-align: -webkit-center;
                                    padding: 3px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.05 3.00002L4.20829 10.2417C3.94996 10.5167 3.69996 11.0584 3.64996 11.4334L3.34162 14.1334C3.23329 15.1084 3.93329 15.775 4.89996 15.6084L7.58329 15.15C7.95829 15.0834 8.48329 14.8084 8.74162 14.525L15.5833 7.28335C16.7666 6.03335 17.3 4.60835 15.4583 2.86668C13.625 1.14168 12.2333 1.75002 11.05 3.00002Z" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.90845 4.20801C10.2668 6.50801 12.1334 8.26634 14.4501 8.49967" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.5 18.333H17.5" stroke="white" stroke-opacity="0.87" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            

                                    </div>
    </div>
    `);
});


// const canvas = document.querySelector("canvas"),
// toolBtns = document.querySelectorAll(".tool"),
// fillColor = document.querySelector("#fill-color"),
// sizeSlider = document.querySelector("#size-slider"),
// colorBtns = document.querySelectorAll(".colors .option"),
// colorPicker = document.querySelector("#color-picker"),
// clearCanvas = document.querySelector(".clear-canvas"),
// saveImg = document.querySelector(".save-img"),
// ctx = canvas.getContext("2d");

// // global variables with default value
// let prevMouseX, prevMouseY, snapshot,
// isDrawing = false,
// selectedTool = "brush",
// brushWidth = 5,
// selectedColor = "#000";

// const setCanvasBackground = () => {
//     // setting whole canvas background to white, so the downloaded img background will be white
//     ctx.fillStyle = "#0000";
//     ctx.fillRect(0, 0, canvas.width, canvas.height);
//     ctx.fillStyle = selectedColor; // setting fillstyle back to the selectedColor, it'll be the brush color
// }

// window.addEventListener("load", () => {
//     // setting canvas width/height.. offsetwidth/height returns viewable width/height of an element
//     canvas.width = canvas.offsetWidth;
//     canvas.height = canvas.offsetHeight;
//     setCanvasBackground();
// });

// const drawRect = (e) => {
//     // if fillColor isn't checked draw a rect with border else draw rect with background
//     if(!fillColor.checked) {
//         // creating circle according to the mouse pointer
//         return ctx.strokeRect(e.offsetX, e.offsetY, prevMouseX - e.offsetX, prevMouseY - e.offsetY);
//     }
//     ctx.fillRect(e.offsetX, e.offsetY, prevMouseX - e.offsetX, prevMouseY - e.offsetY);
// }

// const drawCircle = (e) => {
//     // ctx.beginPath(); // creating new path to draw circle
//     // // getting radius for circle according to the mouse pointer
//     // let radius = Math.sqrt(Math.pow((prevMouseX - e.offsetX), 2) + Math.pow((prevMouseY - e.offsetY), 2));
//     // ctx.arc(prevMouseX, prevMouseY, radius, 0, 2 * Math.PI); // creating circle according to the mouse pointer
//     // fillColor.checked ? ctx.fill() : ctx.stroke(); // if fillColor is checked fill circle else draw border circle
 
// }

// const drawTriangle = (e) => {
//     ctx.beginPath(); // creating new path to draw circle
//     ctx.moveTo(prevMouseX, prevMouseY); // moving triangle to the mouse pointer
//     ctx.lineTo(e.offsetX, e.offsetY); // creating first line according to the mouse pointer
//     ctx.lineTo(prevMouseX * 2 - e.offsetX, e.offsetY); // creating bottom line of triangle
//     ctx.closePath(); // closing path of a triangle so the third line draw automatically
//     fillColor.checked ? ctx.fill() : ctx.stroke(); // if fillColor is checked fill triangle else draw border
// }

// const startDraw = (e) => {
//     isDrawing = true;
//     prevMouseX = e.offsetX; // passing current mouseX position as prevMouseX value
//     prevMouseY = e.offsetY; // passing current mouseY position as prevMouseY value
//     ctx.beginPath(); // creating new path to draw
//     ctx.lineWidth = brushWidth; // passing brushSize as line width
//     ctx.strokeStyle = selectedColor; // passing selectedColor as stroke style
//     ctx.fillStyle = selectedColor; // passing selectedColor as fill style
//     // copying canvas data & passing as snapshot value.. this avoids dragging the image
//     snapshot = ctx.getImageData(0, 0, canvas.width, canvas.height);
// }

// const drawing = (e) => {
//     if(!isDrawing) return; // if isDrawing is false return from here
//     ctx.putImageData(snapshot, 0, 0); // adding copied canvas data on to this canvas

//     if(selectedTool === "brush" || selectedTool === "eraser") {
//         // if selected tool is eraser then set strokeStyle to white 
//         // to paint white color on to the existing canvas content else set the stroke color to selected color
//         ctx.strokeStyle = selectedTool === "eraser" ? "#fff" : selectedColor;
//         ctx.lineTo(e.offsetX, e.offsetY); // creating line according to the mouse pointer
//         ctx.stroke(); // drawing/filling line with color
//     } else if(selectedTool === "rectangle"){
//         drawRect(e);
//     } else if(selectedTool === "circle"){
//         drawCircle(e);
//     } else {
//         drawTriangle(e);
//     }
// }

// toolBtns.forEach(btn => {
//     btn.addEventListener("click", () => { // adding click event to all tool option
//         // removing active class from the previous option and adding on current clicked option
//         document.querySelector(".options .active").classList.remove("active");
//         btn.classList.add("active");
//         selectedTool = btn.id;
//     });
// });

// sizeSlider.addEventListener("change", () => brushWidth = sizeSlider.value); // passing slider value as brushSize

// colorBtns.forEach(btn => {
//     btn.addEventListener("click", () => { // adding click event to all color button
//         // removing selected class from the previous option and adding on current clicked option
//         document.querySelector(".options .selected").classList.remove("selected");
//         btn.classList.add("selected");
//         // passing selected btn background color as selectedColor value
//         selectedColor = window.getComputedStyle(btn).getPropertyValue("background-color");
//     });
// });

// colorPicker.addEventListener("change", () => {
//     // passing picked color value from color picker to last color btn background
//     colorPicker.parentElement.style.background = colorPicker.value;
//     colorPicker.parentElement.click();
// });

// // clearCanvas.addEventListener("click", () => {
// //     ctx.clearRect(0, 0, canvas.width, canvas.height); // clearing whole canvas
// //     setCanvasBackground();
// // });

// // saveImg.addEventListener("click", () => {
// //     const link = document.createElement("a"); // creating <a> element
// //     link.download = `${Date.now()}.jpg`; // passing current date as link download value
// //     link.href = canvas.toDataURL(); // passing canvasData as link href value
// //     link.click(); // clicking link to download image
// // });

// canvas.addEventListener("mousedown", startDraw);
// canvas.addEventListener("mousemove", drawing);
// canvas.addEventListener("mouseup", () => isDrawing = false);