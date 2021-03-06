@extends('layouts.master')
@section('title','Edit Gallery | Creative Pub')
@section('content')
<p class="text-register_orange font-sans font-bold text-2xl text-center mt-6 mb-10">WHAT ARE YOU WORKING ON?</p>
<div class="container-2xl md:flex grid grid-cols-2 px-32">
    <div class="container-2xl border-dashed border-2 w-1/2 h-fit border-white rounded-md flex justify-center items-start mt-6">
        <div class="container-2xl w-full h-auto gap-3 px-10">
            <p class="font-sans font-bold text-lg text-white text-center">
                Edit your content
            </p>
            <div class="container-2xl md:flex flex-1 gap-1 items-start">
                <div data-dropdown-toggle="dropdownContent">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 0.5H8C3.86375 0.5 0.5 3.86375 0.5 8V24.25C0.5 24.5815 0.631696 24.8995 0.866116 25.1339C1.10054 25.3683 1.41848 25.5 1.75 25.5H18C22.1362 25.5 25.5 22.1362 25.5 18V8C25.5 3.86375 22.1362 0.5 18 0.5ZM23 18C23 20.7575 20.7575 23 18 23H3V8C3 5.2425 5.2425 3 8 3H18C20.7575 3 23 5.2425 23 8V18Z" fill="#FFF3CD"/>
                        <path d="M6.75 16.7338V19.2325H9.24875L16.16 12.33L13.6625 9.8325L6.75 16.7338ZM17.3375 11.1525L14.84 8.6525L16.7437 6.75L19.2438 9.24875L17.3375 11.1525Z" fill="#FF8A00"/>
                    </svg>
                </div>
                <div  id="dropdownContent" class="z-50 hidden bg-content_box divide-y divide-gray-100 rounded shadow w-auto dark:bg-gray-700">
                    <ul class="py-1 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownContent">
                    <li>
                        <a href="/edit_gallery" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Replace</a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box" >Delete</a>
                    </li>
                    </ul>
                </div>
                <div class="container-2xl w-11/12">
                    <div id="default-carousel" class="relative rounded-lg" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                                <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="flex absolute bottom-5 mt-3 left-1/2 z-30 space-x-3 -translate-x-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>    
    </div>
    <div class="container-2xl md:flex flex-1 justify-center px-44">
        <div class="container">
            <div class="container">
                <p class="text-white text-xl font-semibold ">Project Tittle</p>
                <input class=" bg-white rounded-lg w-10/12 h-10 mt-2" type="text">
            </div>
            <div class="container mt-4">
                <p class="text-white text-xl font-semibold ">Tools Used</p>
                <div class="mt-2 md:flex">
                    <div class="container md:flex mr-4 w-auto">
                        <ul class="mr-2">
                            <input type="checkbox" class="default:ring-2">
                        </ul>
                        <ul>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                                <path d="M8 21.7957V9.20796C8 9.12233 8.0351 9.0734 8.11701 9.0734C9.32624 9.0734 10.5349 9 11.7445 9C13.7071 9 15.8323 9.68403 16.5772 11.7769C16.7527 12.2907 16.8463 12.8167 16.8463 13.3672C16.8463 14.4192 16.6123 15.2877 16.1442 15.9728C14.8368 17.8864 12.5706 17.8567 10.5392 17.8567V21.7834C10.5551 21.8997 10.4579 21.9547 10.3637 21.9547H8.14042C8.04681 21.9547 8 21.9058 8 21.7957ZM10.5509 11.4344V15.5446C11.3564 15.6048 12.1992 15.6113 12.9731 15.3489C13.8275 15.0977 14.2954 14.3439 14.2954 13.4406C14.3192 12.6709 13.9077 11.9323 13.2072 11.6546C12.4426 11.3305 11.3763 11.3111 10.5509 11.4344Z" fill="#9999FF" />
                                <path d="M18.4325 12.2119H20.4861C20.5993 12.213 20.701 12.2947 20.7309 12.4089C20.8814 12.7582 20.9 13.1795 20.9005 13.5566C21.2527 13.1279 21.6773 12.7708 22.1533 12.5029C22.6638 12.201 23.2425 12.0479 23.8289 12.0598C23.9263 12.0452 24.0124 12.1353 23.9985 12.237V14.6201C23.9985 14.7122 23.9355 14.758 23.8101 14.758C22.9409 14.6953 21.5877 14.91 20.9561 15.6246V21.821C20.9561 21.9392 20.9059 21.9983 20.8054 21.9983H18.6021C18.4939 22.0145 18.3984 21.9127 18.4137 21.8013V15.0731C18.4137 14.1716 18.4324 13.2429 18.3007 12.3498C18.2804 12.2676 18.3556 12.1912 18.4325 12.2119Z" fill="#9999FF" />
                            </svg>
                        </ul>
                    </div>
                    <div class="container md:flex mr-4 w-auto">
                        <ul class="mr-2">
                            <input type="checkbox" class="default:ring-2">
                        </ul>
                        <ul>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                                <path d="M12.9607 19.8809H8.52632L7.62409 22.7658C7.59904 22.873 7.5007 22.9489 7.39372 22.9437H5.14772C5.01964 22.9437 4.97485 22.8712 5.01335 22.7263L8.85264 11.3448C8.89107 11.2263 8.92948 11.0913 8.96786 10.9397C9.01808 10.6761 9.04379 10.4082 9.04465 10.1395C9.03365 10.0601 9.10315 9.99004 9.17902 10.0012H12.2312C12.3207 10.0012 12.3719 10.0341 12.3848 10.1L16.7425 22.7461C16.7809 22.8779 16.7425 22.9438 16.6273 22.9437H14.1317C14.0442 22.9537 13.9606 22.8934 13.9398 22.8054L12.9607 19.8809ZM9.21739 17.3912H12.2505C11.7521 15.6823 11.1898 13.9958 10.734 12.2735C10.2422 13.9987 9.70562 15.7169 9.21739 17.3912Z" fill="#9999FF" />
                                <path d="M25.9019 13.0852V20.6088C25.9019 21.125 25.898 21.6458 25.9499 22.1599C25.9691 22.351 25.985 22.4655 25.9979 22.597C26.0105 22.7026 25.9659 22.7551 25.8636 22.7551H23.8095C23.7127 22.7656 23.6179 22.7087 23.5791 22.6168C23.5293 22.4347 23.4856 22.2413 23.4831 22.0513C22.75 22.7247 21.7813 22.992 20.8148 22.9997C18.7227 23.0256 17.5428 21.2673 17.5898 19.1861V13.105C17.5772 13.0142 17.6552 12.9339 17.7434 12.9469H20.0247C20.1128 12.934 20.1908 13.0143 20.1783 13.105V18.87C20.1783 19.9232 20.6936 20.6088 21.7555 20.6088C22.3139 20.6159 22.8683 20.3864 23.3181 20.0555V13.0852C23.3181 12.9932 23.3757 12.9469 23.4909 12.9469H25.7676C25.8446 12.9357 25.9128 13.0059 25.9019 13.0852Z" fill="#9999FF" />
                            </svg>
                        </ul>
                    </div>
                    <div class="container md:flex mr-4 w-auto">
                        <ul class="mr-2">
                            <input type="checkbox" class="default:ring-2">
                        </ul>
                        <ul>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                                <path d="M13.7893 19.5638H9.4504L8.56759 22.3819C8.54308 22.4864 8.44685 22.5604 8.34218 22.5553H6.14454C6.01922 22.5553 5.97539 22.4847 6.01306 22.3434L9.76969 11.2926C9.80729 11.1771 9.84483 11.0641 9.88243 10.9163C9.93156 10.6592 9.95672 10.398 9.95756 10.1361C9.94679 10.0587 10.0136 9.99014 10.089 10.0012H13.0756C13.1631 10.0012 13.2131 10.0333 13.2258 10.0975L17.4897 22.3626C17.5272 22.4912 17.4896 22.5554 17.377 22.5553H14.9351C14.8495 22.565 14.7677 22.5063 14.7473 22.4204L13.7893 19.5638ZM10.1266 17.1877H13.0944C12.6068 15.5215 12.0565 13.8773 11.6105 12.1981C11.1051 13.9399 10.6384 15.5553 10.1266 17.1877Z" fill="#9999FF" />
                                <path d="M20.6608 18.4757C20.8335 19.9066 22.0351 20.5888 23.3656 20.5597C24.1159 20.545 24.9177 20.4285 25.6188 20.1448C25.6812 20.0937 25.7127 20.1256 25.7127 20.2412V22.0713C25.7186 22.1665 25.6788 22.2516 25.6 22.3025C24.7286 22.6983 23.7284 22.8177 22.7833 22.8025C19.9655 22.8025 18.0304 20.8171 18.0312 17.9285C18.0238 15.1911 19.7997 12.8817 22.5579 12.8817C24.896 12.8211 26.5147 14.693 26.5212 17.0231C26.5212 17.4474 26.4975 17.8733 26.4461 18.2945C26.4361 18.3813 26.3622 18.4487 26.277 18.4487C24.4097 18.4487 22.5333 18.4757 20.6608 18.4757ZM20.6608 16.7207C21.7015 16.7207 22.7482 16.7575 23.7882 16.7111C23.9445 16.6951 24.0606 16.6654 24.0606 16.5029C24.0389 15.6391 23.3099 14.9286 22.464 14.9617C21.442 14.8983 20.7879 15.7611 20.6608 16.7207Z" fill="#9999FF" />
                            </svg>
                        </ul>
                    </div>
                </div>
                <div class="mt-2 md:flex">
                    <div class="container md:flex mr-4 w-auto">
                        <ul class="mr-2">
                            <input type="checkbox" class="default:ring-2">
                        </ul>
                        <ul>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#330000" />
                                <path d="M15.5684 19.5963H11.2295L10.3467 22.409C10.3221 22.5135 10.2259 22.5875 10.1212 22.5823H7.9236C7.79827 22.5823 7.75444 22.5117 7.79211 22.3704L11.5488 11.2738C11.5863 11.1582 11.6239 11.0266 11.6615 10.8789C11.7106 10.6218 11.7358 10.3606 11.7366 10.0987C11.7259 10.0213 11.7939 9.95294 11.8681 9.96378H14.8546C14.9421 9.96378 14.9922 9.9959 15.0049 10.0601L19.2688 22.3897C19.3063 22.5182 19.2687 22.5824 19.156 22.5823H16.7142C16.6285 22.5921 16.5467 22.5334 16.5263 22.4475L15.5684 19.5963ZM11.9056 17.1689H14.8734C14.3858 15.5027 13.8355 13.8584 13.3896 12.1793C12.9084 13.8613 12.3834 15.5365 11.9056 17.1689Z" fill="#FF9A00" />
                                <path d="M21.8042 12.0058C21.6127 12.0137 21.4216 11.98 21.2436 11.907C21.0656 11.834 20.9046 11.7232 20.7712 11.582C20.6381 11.4346 20.5348 11.2618 20.4671 11.0733C20.3994 10.8849 20.3686 10.6846 20.3767 10.4839C20.3699 10.2852 20.404 10.0873 20.4768 9.90305C20.5496 9.71881 20.6595 9.5524 20.7993 9.41468C20.9378 9.27839 21.1012 9.17161 21.2801 9.10052C21.459 9.02942 21.65 8.99543 21.8418 9.00049C22.2926 9.00049 22.6464 9.13856 22.9031 9.41468C23.0326 9.55818 23.1333 9.72648 23.1994 9.90995C23.2655 10.0934 23.2956 10.2885 23.2881 10.4839C23.296 10.6853 23.2643 10.8864 23.1949 11.075C23.1255 11.2636 23.0199 11.436 22.8843 11.582C22.7425 11.7253 22.5734 11.8369 22.3875 11.9099C22.2016 11.9828 22.003 12.0155 21.8042 12.0058ZM20.5082 22.3896V13.181C20.5082 13.0654 20.5581 13.0076 20.6584 13.0076H22.9688C23.0689 13.0076 23.119 13.0654 23.1191 13.181V22.3896C23.1191 22.5182 23.069 22.5824 22.9688 22.5823H20.6772C20.5646 22.5823 20.5082 22.5181 20.5082 22.3896Z" fill="#FF9A00" />
                            </svg>
                        </ul>
                    </div>
                    <div class="container md:flex mr-4 w-auto">
                        <ul class="mr-2">
                            <input type="checkbox" class="default:ring-2">
                        </ul>
                        <ul>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#001E36" />
                                <path d="M8 22.5162V10.2034C8 10.1197 8.035 10.0718 8.11667 10.0718C9.3223 10.0718 10.5274 10 11.7333 10C13.6902 10 15.809 10.6691 16.5517 12.7162C16.7267 13.2188 16.82 13.7333 16.82 14.2718C16.82 15.3009 16.5867 16.1504 16.12 16.8205C14.8164 18.6923 12.557 18.6632 10.5317 18.6632V22.5043C10.5475 22.618 10.4506 22.6718 10.3567 22.6718H8.14C8.04667 22.6718 8 22.6239 8 22.5162ZM10.5433 12.3812V16.4017C11.3464 16.4605 12.1867 16.4669 12.9583 16.2103C13.8102 15.9645 14.2767 15.2272 14.2767 14.3436C14.3003 13.5907 13.8901 12.8683 13.1917 12.5966C12.4294 12.2796 11.3662 12.2606 10.5433 12.3812Z" fill="#31A8FF" />
                                <path d="M24.0967 15.6074C23.7437 15.4213 23.3677 15.2852 22.979 15.2028C22.4796 15.0853 20.5098 14.6737 20.509 15.7037C20.5265 16.2787 21.4393 16.5604 21.8426 16.7247C23.2585 17.2108 24.8607 18.0797 24.8292 19.8264C24.8725 22.0008 22.7657 22.8701 20.9598 22.8703C20.0197 22.88 19.0403 22.7344 18.1799 22.3308C18.0977 22.2873 18.0449 22.1944 18.0484 22.0996V20.019C18.0391 19.9356 18.1287 19.8627 18.1987 19.9227C19.0417 20.4325 20.0409 20.6801 21.0162 20.6933C21.4467 20.6933 22.2999 20.6516 22.2935 20.019C22.2935 19.412 21.2728 19.1329 20.8659 18.9787C20.2761 18.7682 19.7169 18.4765 19.2036 18.1118C18.4862 17.6001 18.0362 16.7797 18.0484 15.8771C18.0442 13.8297 19.9835 12.9107 21.73 12.9103C22.5464 12.9035 23.4232 12.964 24.1832 13.2956C24.2925 13.3277 24.3151 13.4429 24.3147 13.546V15.4918C24.3216 15.6126 24.1875 15.6537 24.0967 15.6074Z" fill="#31A8FF" />
                            </svg>
                        </ul>
                    </div>
                    <div class="container md:flex mr-4 w-auto">
                        <ul class="mr-2">
                            <input type="checkbox" class="default:ring-2">
                        </ul>
                        <ul>
                            <p class="text-white text-base font-bold">Other</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-2xl mt-4">
                <p class="text-white text-xl font-semibold ">Category</p>
                <select class="bg-white rounded-lg w-10/12 h-10 mt-2" name="category" id="category">
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                    <option value="audio">Audio</option>
                    <option value="script">Script</option>
                </select>
            </div>
            <div class="container-2xl mt-4">
                <p class="text-white text-xl font-semibold ">Description Projects</p>
                <textarea id="description" name="description" class="bg-white rounded-lg w-10/12 h-32 mt-2"></textarea>
            </div>
            <div class="container-2xl mt-4">
                <p class="text-white text-xl font-semibold ">Project Tags</p>
                <input class=" bg-white rounded-lg w-10/12 h-16 mt-2" type="text">
            </div>
        </div>
    </div>
    
</div>
<div class="container-2xl md:flex mt-16 pb-5 justify-center">
    <button class="bg-white rounded-lg w-80 h-10 text-register_orange text-base font-medium mr-32">Save as Draft</button>
    <button class="bg-register_orange rounded-lg w-80 h-10 text-white text-base font-medium" data-modal-toggle="continueGalleryModal">Continue</button>
</div>
<div id="continueGalleryModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    <div class="container border-dashed border-2 w-full h-fit border-white rounded-md flex items-center mt-6">
                        <div class="container px-16 pb-4">
                            <p class="text-white text-center font-medium px-8 text-xl py-5">Change your gallery cover</p>
                            <div class="container relative overflow-hidden py-2">
                                <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                                <div class="absolute py-5 bottom-2 inset-x-0 bg-opacity-50 bg-gray_font text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">
                                    <div class="container-2xl md:flex flex-1  justify-center">
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.2579 12.6665V8.49984H30.47V4.33317H34.2579V0.166504H38.0458V4.33317H41.8337V8.49984H38.0458V12.6665H34.2579ZM3.95487 41.8332C2.9132 41.8332 2.02179 41.4255 1.28063 40.6103C0.538204 39.7936 0.166992 38.8123 0.166992 37.6665V12.6665C0.166992 11.5207 0.538204 10.5401 1.28063 9.72484C2.02179 8.90817 2.9132 8.49984 3.95487 8.49984H9.92078L13.4246 4.33317H24.7882V8.49984H15.0818L11.6253 12.6665H3.95487V37.6665H34.2579V18.9165H38.0458V37.6665C38.0458 38.8123 37.6752 39.7936 36.934 40.6103C36.1916 41.4255 35.2996 41.8332 34.2579 41.8332H3.95487ZM19.1064 34.5415C21.4738 34.5415 23.4864 33.6304 25.1443 31.8082C26.8008 29.9846 27.6291 27.7707 27.6291 25.1665C27.6291 22.5623 26.8008 20.3484 25.1443 18.5248C23.4864 16.7026 21.4738 15.7915 19.1064 15.7915C16.739 15.7915 14.7263 16.7026 13.0685 18.5248C11.4119 20.3484 10.5837 22.5623 10.5837 25.1665C10.5837 27.7707 11.4119 29.9846 13.0685 31.8082C14.7263 33.6304 16.739 34.5415 19.1064 34.5415ZM19.1064 30.3748C17.7806 30.3748 16.66 29.8714 15.7446 28.8644C14.8292 27.8575 14.3715 26.6248 14.3715 25.1665C14.3715 23.7082 14.8292 22.4755 15.7446 21.4686C16.66 20.4616 17.7806 19.9582 19.1064 19.9582C20.4321 19.9582 21.5527 20.4616 22.4681 21.4686C23.3835 22.4755 23.8412 23.7082 23.8412 25.1665C23.8412 26.6248 23.3835 27.8575 22.4681 28.8644C21.5527 29.8714 20.4321 30.3748 19.1064 30.3748Z" fill="#FFF3CD"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-2xl pt-5 md:flex flex-1 items-center gap-3">
                        <input type="checkbox" class="bg-transparent default:ring-2 w-4 h-4">
                        <p class="font-sans text-lg text-white">
                            I Agree to the <strong class="font-sans text-lg font-bold text-register_orange">Licence Terms </strong>and <strong class="font-sans text-lg font-bold text-register_orange">Copyright Terms </strong>
                        </p>
                    </div>
                    <div class="container-2xl pt-5 md:flex flex-1 items-center">
                        <button class="bg-white rounded-lg w-80 h-10 text-register_orange text-base font-medium mr-32">Save as Draft</button>
                        <button class="bg-register_orange rounded-lg w-80 h-10 text-white text-base font-medium">Publish Now</button>
                    </div>
                </div>
                <div class="container-2xl h-20">
                    <button type="button" class="text-register_orange bg-transparent hover:bg-orange-700 hover:text-gray-900 rounded-lg text-sm p-1.5 mx-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="continueGalleryModal">
                            <svg class="h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
            </div>
        </div>
@endsection