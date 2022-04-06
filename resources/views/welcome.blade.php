@extends('layouts.master')
@section('title','CreativePub')
@section('content')

<div class=" container-2xl flex items-center bg-content_box bg-opacity-20 mx-auto">
    <div class=" flex-initial items-center px-44 my-28">
        <img class="items-center" src="https://cdn.discordapp.com/attachments/711190437922209833/946664293779243048/unknown.png" alt="">
    </div>
    <div class=" flex items-center">
        <img class="" src="https://cdn.discordapp.com/attachments/711190437922209833/946664774991753256/unknown.png" alt="">
    </div>
</div>
<div class=" container-2xl md:flex justify-center items-center mx-auto">
    <div class="items-center mt-9 mb-3 md:flex justify-center">
        <input class=" placeholder:text-white bg-search_button rounded-md text-white py-1 px-2 w-64 shadow-md" type="text" placeholder="Search...">
    </div>
</div>
<div class="container-2xl md:flex justify-center items-center mx-auto">
    <ul class="hidden md:flex flex-1 justify-center items-center gap-7 text-gray-50 text-base mr-5 font-sans">
        <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">All</button>
        <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Images</button>
        <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Video</button>
        <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Audio</button>
        <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Script</button>
    </ul>
</div>

<div class="container-2xl md:flex justify-center items-center mx-auto px-12 space-x-12 py-5">
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-register_orange">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">
                <button type="button" data-modal-toggle="defaultModal"> Abstract Mode</button>
            </div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-white text-xs">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-white text-xs">61.5 K</p>
        </div>
    </div>

    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
</div>
<div class="container-2xl md:flex justify-center items-center mx-auto px-12 space-x-12 py-5">
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">Fajar</p>
                <p class="font-thin font-sans text-orange-500">Images</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-amber-100">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-amber-100">61.5 K</p>
        </div>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="container-2xl bg-zinc-800 py-3 px-16 rounded-md">
                <div class="container-2xl md:flex flex-1 mb-3 items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Nama Karya</p>
                        <p class="font-thin font-sans text-xs text-white">Tono Sucipto <strong class="font-sans text-xs font-bold text-orange-500"> Follow </strong></p>
                    </div>
                    <div class="container-2xl md:flex flex-1 justify-end items-end gap-3">
                        <button class="bg-orange-500 hover:bg-orange-700 text-white rounded-md p-2 text-xs font-sans">Save</button>
                        <button class="bg-orange-500 hover:bg-orange-700 text-white rounded-md p-2 text-xs font-sans">Like</button>
                    </div>
                </div>
                <img class="mx-auto" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                <div class="container-2xl mx-auto my-3">
                    <p class="text-white font-sans text-xs leading-relaxed">deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi </p>
                </div>
                <div class="container-2xl md:flex flex-1 pb-3 border-b border-amber-200 gap-3">
                    <button class="bg-orange-500 hover:bg-orange-700 text-white rounded-md p-2 text-xs font-sans">#poster</button>
                    <button class="bg-orange-500 hover:bg-orange-700 text-white rounded-md p-2 text-xs font-sans">#cool</button>
                </div>
                <div class="container-2xl my-3">
                    <p class="font-sans text-white">Comment <sup class="font-sans text-base text-orange-500">3</sup></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection