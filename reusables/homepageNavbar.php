<?php echo'

        <div class="h-full w-full z-[9999] fixed"> 
            <!-- Code block starts -->
            <nav role="navigation" class="bg-transparent shadow-none xl:block hidden stroke transition duration-[1000ms] ease-in-out" id="navbar">
                <div class="mx-auto container px-6 py-2 xl:py-0">
                    <div class="flex items-center justify-between">
                        <div class="inset-y-0 left-0 flex items-center xl:hidden">
                            <div class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-100 focus:outline-none transition duration-150 ease-in-out">
                                <div class="visible xl:hidden">
                                    <ul class="p-2 border-r bg-white absolute rounded left-0 right-0 shadow mt-8 md:mt-8 hidden">
                                        <li class="flex xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                            <div class="flex items-center">
                                              
                                                <span class="ml-2 font-bold">Dashboard</span>
                                            </div>
                                        </li>
                                        <li class="flex xl:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                            <div class="flex items-center">
                                              
                                                <span class="ml-2 font-bold">Products</span>
                                            </div>
                                        </li>
                                        <li class="flex xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                           
                                            <span class="ml-2 font-bold">Performance</span>
                                        </li>
                                        <li class="border-b border-gray-300 flex xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                        
                                            <span class="ml-2 font-bold">Deliverables</span>
                                        </li>
                                        <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                            <div class="flex items-center">
                                                <div class="w-12 cursor-pointer flex text-sm border-2 border-transparent rounded focus:outline-none focus:border-white transition duration-150 ease-in-out">
                                                    <img class="rounded h-10 w-10 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/components/horizontal_navigation/hn_1.png" alt="logo" />
                                                </div>
                                                <p class="text-sm ml-2 cursor-pointer">Jane Doe</p>
                                                <div class="sm:ml-2 text-white relative">
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                            <div class="flex items-center">
                                               
                                                <span class="ml-2">Profile</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <img class="show-m-menu icon icon-tabler icon-tabler-menu" onclick="MenuHandler(this,true)" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg2.svg" alt="icon" />
                                </div>
                                <div class="hidden close-m-menu text-white" onclick="MenuHandler(this,false)">
                                    <img  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg1.svg" alt="icon-2" />
                                </div>
                            </div>
                        </div>
                        <button class="focus:outline-none focus:ring-none focus:ring-none focus:ring-none rounded-md flex w-full sm:w-auto items-center sm:items-stretch justify-end sm:justify-start">
                            <div  class="flex items-center">
                                <h2 class="hidden sm:block text-base text-white font-bold leading-normal px-3">Winners Chapel International, Denver</h2>
                            </div>
                        </button>
                        <div class="flex">
                            <div class="hidden xl:flex md:mr-6 xl:mr-16 text-[16px] text-white font-medium">
                                <a href="javascript: void(0)" class="border-b-2 border-transparent focus:border-indigo-700 flex px-3 items-center py-6 leading-5">                                   
                                    Dashboard
                                </a>
                                <a href="javascript: void(0)" class="focus:text-indigo-700 border-b-2 border-transparent focus:border-indigo-700 flex px-3 items-center py-6 leading-5">                                
                                    Products
                                </a>
                                <a href="javascript: void(0)" class="focus:text-indigo-700 border-b-2 border-transparent focus:border-indigo-700 flex px-3 items-center py-6 leading-5 ">       
                                    Performance
                                </a>
                                <a href="javascript: void(0)" class="focus:text-indigo-700 border-b-2 border-transparent focus:border-indigo-700 flex px-3 items-center py-6 leading-5">
                                    Deliverables
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav>
                <div class="py-4 px-6 w-full flex xl:hidden justify-between items-center bg-white fixed top-0 z-40">
                    <div aria-label="logo" role="img" tabindex="0" class="focus:outline-none w-24">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg9.svg" alt="logo" />
                    </div>
                    <div class="flex items-center">
                        <div class="relative mr-6">
                        </div>
                        <button id="menu" aria-label="open menu" class="focus:outline-none focus:ring-2 focus:ring-gray-600 rounded-md text-gray-800" onclick="sidebarHandler(true)">
                            <img class="icon icon-tabler icon-tabler-menu-2" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg10.svg" alt="menu" />
                        </button>
                    </div>
                </div>
                <!--Mobile responsive sidebar-->
                <div class="absolute w-full h-full transform -translate-x-full z-40 xl:hidden" id="mobile-nav">
                    <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
                    <div class="w-64 z-40 fixed overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
                        <div class="px-6 h-full">
                            <div class="flex flex-col justify-between h-full w-full">
                                <div>
                                    <div class="mt-6 flex w-full items-center justify-between">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg9.svg" alt="logo" />
                                                <p tabindex="0" class="focus:outline-none text-base md:text-2xl text-gray-800 ml-3">Winners Chapel International, Denver</p>
                                            </div>
                                            <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                                <img class="icon icon-tabler icon-tabler-x" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg11.svg" alt="cross" />
                                            </button>
                                        </div>
                                    </div>
                                    <ul class="f-m-m">
                                        <li>
                                            <a class="cursor-pointer">
                                                <div class="text-gray-800 pt-10">
                                                    <div class="flex items-center">
                                                        <div class="w-6 h-6 md:w-8 md:h-8 text-indigo-700">
                                                           <img class="icon icon-tabler icon-tabler-grid" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg12.svg" alt="dashboard" />
                                                        </div>
                                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-indigo-700 xl:text-base text-base ml-3">Dashboard</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="cursor-pointer">
                                                <div class="text-gray-800 pt-8">
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                               <img class="icon icon-tabler icon-tabler-puzzle" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg13.svg" alt="products" />
                                                            </div>
                                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Products</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="cursor-pointer">
                                                <div class="text-gray-800 pt-8">
                                                    <div class="flex items-center">
                                                        <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                            <img class="icon icon-tabler icon-tabler-compass" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg14.svg" alt="performance" />
                                                        </div> 
                                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Performance</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-gray-800 pt-8 cursor-pointer">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                        <img class="icon icon-tabler icon-tabler-code" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg15.svg" alt="deliverables" />
                                                    </div>
                                                    <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Deliverables</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="w-full pt-4">
                                    <div class="flex justify-center mb-4 w-full">
                                        <div class="relative w-full">
                                            <div class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4">
                                                <img class="icon icon-tabler icon-tabler-search" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg16.svg" alt="search" />
                                            </div>
                                            <input class="focus:ring-2 focus:ring-gray-600 bg-gray-100 focus:outline-none rounded w-full text-sm text-gray-500 pl-10 py-2" type="text" placeholder="Search" />
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="w-full flex items-center justify-between pt-1">
                                            <div class="flex items-center">
                                                <img alt="profile-pic" src="https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png" tabindex="0" class="focus:outline-none  w-8 h-8 rounded-md" />
                                                <p tabindex="0" class="focus:outline-none text-gray-800 text-base leading-4 ml-2">Jane Doe</p>
                                            </div>
                                            <ul class="flex">
                                                <li class="cursor-pointer text-gray-800 pt-5 pb-3">
                                                    <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                       <img class="icon icon-tabler icon-tabler-messages" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg17.svg" alt="chat" />
                                                    </div>
                                                </li>
                                                <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">
                                                    <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                        <img class="icon icon-tabler icon-tabler-bell" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg18.svg" alt="bell" />
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

          
          
            <!-- Code block ends -->
        </div>
    
    


'?>