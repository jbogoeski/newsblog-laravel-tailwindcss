@extends('admin.blank')

@section('content')
@if(session('status'))
<span class="absolute text-white text-center font-bold block  bg-indigo-400 px-2  rounded-full shadow-xl w-1/3 text-md"> {{ session()->get('status') }}</span>
@endif
<div class="w-full xl:w-2/3 block px-10 bg-white rounded-xl py-5 shadow-md">
    

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="bg-red-300 font-bold mx-8">{{$error}}</div>
     @endforeach
    @endif
    <form action="{{ route('admin.ads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        
        

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Link Ads</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="link" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter Link" />
                @error('link')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Upload Ads Image</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="ads" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file"/>
                @error('ads')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>



        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Category</label>
            </div>
            <label class="md:w-2/3 md:flex-grow">
                <select class="form-select block w-full mt-1 rounded-lg" name="type"  >
                    <option disabled selected>- Select Ads Type</option>
                        <option  class="text-xs md:text-lg" value="1">Vertical Ads </option>
                        <option  class="text-xs md:text-lg" value="2">Horizontal Ads </option>
                </select>
                @error('type')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </label>
           
        </div>




        <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button class="w-1/2 lg:w-1/3 border-indigo-500 bg-gray-800 text-white font-bold rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">Create New Post</button>
            </div>
        </div>

    </form>

</div>

@endsection