@extends('admin.blank')


@section('content')

<div class="w-full xl:w-2/3 block px-10 bg-white rounded-xl py-5 shadow-md">
    
    @if(session('status'))
          <span class="text-green-800 block bg-white px-2  rounded-full shadow-xl w-1/3 text-md"> {{ session()->get('status') }}</span>
    @endif

    <div class="flex justify-between py-3 mx-5">
        <span class="text-xl font-semibold text-gray-700">Update Subcategory</span>
        <a href="{{ route('admin.subcategory.index') }}" class="bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full text-white font-bold">Back</a>
    </div>

    <form action="{{ route('admin.subcategory.update', $subcategory) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Subcategory EN</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $subcategory->subcategory_en }}" name="subcategory_en" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter EN Category Name" />
                @error('subcategory_en')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <hr>
        
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Subcategory MK</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input value="{{ $subcategory->subcategory_mk }}" name="subcategory_mk" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter MK Category Name" />
                @error('subcategory_mk')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Category</label>
            </div>
            <label class="md:w-2/3 md:flex-grow">
                <select class="form-select block w-full mt-1 rounded-lg" name="category_id"  >

                    @foreach ($categories as $category)
                        <option  class="text-xs md:text-lg" value="{{ $category->id }}" {{ ( $category->id === $subcategory->category_id) ? 'selected="selected"' : '' }} >
                        {{ $category->category_en }} | {{ $category->category_mk }} 
                        </option>

                    @endforeach
                </select>
                @error('category_id')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </label>
           
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