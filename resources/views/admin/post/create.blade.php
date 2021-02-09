@extends('admin.blank')

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


@section('content')
@if(session('status'))
<span class="absolute text-white text-center font-bold block  bg-indigo-400 px-2  rounded-full shadow-xl w-1/3 text-md"> {{ session()->get('status') }}</span>
@endif
<div class="w-full xl:w-2/3 block px-10 bg-white rounded-xl py-5 shadow-md">
    
  

    <div class="flex justify-between py-3 mx-5">
        <span class="text-xl font-semibold text-gray-700">Create Post</span>
        <a href="{{ route('admin.post.index') }}" class="bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full text-white font-bold">Back</a>
    </div>

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="bg-red-300 font-bold mx-8">{{$error}}</div>
     @endforeach
    @endif
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
       
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Title EN</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="title_en" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter EN Title" />
                @error('title_en')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Title MK</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="title_mk" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter MK Title" />
                @error('title_mk')
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
                    <option disabled selected>---> Select Category</option>
                    @foreach ($categories as $category)
                        <option  class="text-xs md:text-lg" value="{{ $category->id}}">{{ $category->category_en }} | {{ $category->category_mk }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </label>
           
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">SubCategory</label>
            </div>
            <label class="md:w-2/3 md:flex-grow">
                <select id="subcategory_id" class="form-select block w-full mt-1 rounded-lg" name="subcategory_id"  >
                    <option disabled selected>---> Select SubCategory</option>
                </select>
                @error('subcategory_id')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </label>
           
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Area</label>
            </div>
            <label class="md:w-2/3 md:flex-grow">
                <select class="form-select block w-full mt-1 rounded-lg" name="area_id"  >
                    <option disabled selected>---> Select Area</option>
                    @foreach ($areas as $area)
                        <option  class="text-xs md:text-lg" value="{{ $area->id}}">{{ $area->area_en }} | {{ $area->area_mk }}</option>
                    @endforeach
                </select>
                @error('area_id')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </label>
           
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Sub Area</label>
            </div>
            <label class="md:w-2/3 md:flex-grow">
                <select id="subarea_id" class="form-select block w-full mt-1 rounded-lg" name="subarea_id" >
                    <option disabled selected>---> Select Subarea</option>
                    </select>
                </select>
                @error('subarea_id')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </label>
           
        </div>


        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Tags EN</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="tags_en" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter EN Tags" />
                @error('tags_en')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Tags MK</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="tags_mk" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Enter MK Tags" />
                @error('tags_mk')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Upload Image</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <input name="image" class="w-full h-10 px-3 text-sm placeholder-gray-600 border rounded-lg focus:shadow-outline" type="file"/>
                @error('image')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Description EN</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <textarea id="summernote1" name="description_en" class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                type="text" placeholder="Enter EN Description Text"></textarea>                
                @error('description_en')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Description MK</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <textarea id="summernote" name="description_mk" class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                 type="text" placeholder="Enter MK Description Text"></textarea>
                @error('description_mk')
                <span class="bg-red-500 px-3 py-1 text-xs text-white font-semibold rounded-full">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        
        <hr>

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Extra Options</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                
                <label class="inline-flex items-center p-2">
                    <input name="status" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"><span class="ml-2 text-gray-700">Status</span>
                </label>

                <label class="inline-flex items-center p-2">
                    <input name="headline" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"><span class="ml-2 text-gray-700">Headline</span>
                </label>

                <label class="inline-flex items-center p-2">
                    <input name="first_section" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"><span class="ml-2 text-gray-700">First Section</span>
                </label>

                <label class="inline-flex items-center p-2">
                    <input name="first_section_thumbnail" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"><span class="ml-2 text-gray-700">First Section Thumbnail</span>
                </label>
                <label class="inline-flex items-center p-2">
                    <input name="bigthumbnail" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"><span class="ml-2 text-gray-700">Big Thumbnail</span>
                </label>
    
              
    
                
            </div>
        </div>

               
    
    

        <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button class="w-1/2 lg:w-1/3 border-indigo-500 bg-gray-800 text-white font-bold rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">Create New Post</button>
            </div>
        </div>

    </form>

</div>

<!-- summernote css/js -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>
<script type="text/javascript">
    $('#summernote1').summernote({
        height: 400
    });
</script>

<!-- SubCategory search from Category -->
<script type="text/javascript">
$(document).ready(function(){
    $('select[name="category_id"]').on('change', function(){
        var category_id = $(this).val();
        if(category_id) {
            $.ajax({
                url: "{{ url('/get/subcategory/') }}/"+category_id,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $("#subcategory_id").empty();
                        $.each(data,function(key,value){
                            $('#subcategory_id').append('<option value="'+value.id+'">'+value.subcategory_en+' | '+value.subcategory_mk+'</option');
                        });
                },
            });
        } else {
            alert('danger');
        }
    });
});
</script>

<!-- SubArea search from Area -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="area_id"]').on('change', function(){
            var area_id = $(this).val();
            if(area_id) {
                $.ajax({
                    url: "{{ url('/get/subarea/') }}/"+area_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $("#subarea_id").empty();
                            $.each(data,function(key,value){
                                $('#subarea_id').append('<option value="'+value.id+'">'+value.subarea_en+' | '+value.subcarea_mk+'</option');
                            });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>
@endsection