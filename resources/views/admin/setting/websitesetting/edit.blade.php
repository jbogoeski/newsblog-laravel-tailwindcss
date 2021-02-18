@extends('admin.blank')


@section('content')

<div class="w-full xl:w-2/3 block px-10 bg-white rounded-xl py-5 shadow-md">
    
    @if(session('status'))
          <span class="absolute text-green-800 block -mt-3 px-2  rounded-full shadow-xl w-1/3 text-md"> {{ session()->get('status') }}</span>
    @endif

    <div class="flex justify-between py-3 mx-5">
        <span class="text-xl font-semibold text-gray-700">Site Setting</span>
    </div>

    <form action="{{ route('admin.websitesetting.update', $websitesetting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Address En</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $websitesetting->address_en }}" name="address_en" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text"  />
            </div>
        </div>
        <hr>
        
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Adress MK</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $websitesetting->address_mk }}" name="address_mk" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text"  />
            </div>
        </div>


        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Phone EN</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $websitesetting->phone_en }}" name="phone_en" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text"  />
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Phone MK</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $websitesetting->phone_mk }}" name="phone_mk" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text"  />
            </div>
        </div>
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Email</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $websitesetting->email }}" name="email" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="email"  />
            </div>
        </div>
        <hr>
        
     

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Logo</label>
            </div>

            <div class="md:w-2/3 md:flex-grow">
                <input name="logo" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file"  />
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">

            @if ($websitesetting->logo)
            <img src="{{ asset($websitesetting->logo) }}" class="w-24" alt="">
            <input type="hidden" name="oldlogo" value="{{ $websitesetting->logo }}">
            @else
            <span class="bg-indigo-500 px-4 py-1 font-bold text-gray-800 rounded-full">Please upload logo</span>
            @endif
        </div>


        <hr>

        <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button class="w-1/2 lg:w-1/3 border-indigo-500 bg-gray-800 text-white font-bold rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">Update</button>
            </div>
        </div>

    </form>

</div>

@endsection