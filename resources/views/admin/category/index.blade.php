@extends('admin.blank')


@section('content')
<!-- strat content -->
<!-- component -->

<div class="w-full overflow-x-auto ">
    <div class="align-middle inline-block min-w-full rounded-tl-lg rounded-tr-lg  w-full py-4 overflow-hidden bg-white shadow-lg px-12">
      
        <div class="flex justify-between">
            
            <div class="border rounded w-1/2 px-2 lg:px-6 h-12 bg-transparent hidden md:block">
                <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative ">
                    <div class="flex">
                        <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                            <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px  border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-base text-gray-500 font-thin" placeholder="Search">
                </div>
                
            </div>
            <div class="">
                <a href="{{ route('admin.category.create') }}">
                <button  class="font-bold w-5/2 border border-indigo-500 bg-gray-800 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-600 focus:outline-none focus:shadow-outline">
                   Add Category
                </button>
                </a>
            </div>    
        </div>
        
    </div>
   
    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white  px-8 pt-3 rounded-bl-lg rounded-br-lg">
        <table class=" min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">#</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Category EN</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Category MK</th>
                    <th class="text-center py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
              
{{-- ----row --}}
@foreach ($categories as $category)
<tr>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
            <div class="flex items-center">
                <div>
                    <div class="text-sm leading-5 text-gray-800">#{{$category->id}}</div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
            <div class="text-sm leading-5 text-blue-900">{{ $category->category_en}}</div>
        </td>
        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $category->category_mk}}</td>
        <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
            <a href="{{ route('admin.category.edit', $category) }}"><button  type="button" class="font-bold border border-gray-500 bg-yellow-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Edit</button></a>
            <form class="inline-flex" action="{{ route('admin.category.destroy', $category) }}" method="POST">
                @csrf
                @method('DELETE')
                <button  type="submit" class="font-bold border border-gray-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                    Delete
                </button>
            </form>
        </td>
</tr>

@endforeach


{{-- ---end-row --}}

            </tbody>
        </table>
        @if(session('status'))
        <span class="text-green-800 flex bg-white w-full pt-4 justify-center font-md"> {{ session()->get('status') }}</span>
        @endif
      <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
<div>


</div>

<div class="flex items-center justify-center mx-10 my-3">
    {!! $categories->links('pagination::simple-tailwind') !!}
</div>
</div>
    </div>
</div>
  <!-- end content -->
@endsection