@extends('admin.blank')


@section('content')

<div class="w-full xl:w-2/3 block px-10 bg-white rounded-xl py-5 shadow-md">
    
    @if(session('status'))
          <span class="text-green-800 block bg-white px-2  rounded-full shadow-xl w-1/3 text-md"> {{ session()->get('status') }}</span>
    @endif

    <div class="flex justify-between py-3 mx-5">
        <span class="text-xl font-semibold text-gray-700">Edit Website</span>
        <a href="{{ route('admin.website.index') }}" class="bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full text-white font-bold">Back</a>
    </div>

    <form action="{{ route('admin.website.update', $website->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Website Name</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $website->website_name }}" name="website_name" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text"/>
                @error('website_name')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <hr>
        
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Website Link</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $website->website_link }}" name="website_link" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text"  />
                @error('website_link')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
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