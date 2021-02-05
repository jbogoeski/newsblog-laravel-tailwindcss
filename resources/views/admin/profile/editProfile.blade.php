@extends('admin.blank')

@section('content')

<div class="bg-gray-100 w-full ">
    <div class="border-b-2 block md:flex ">
  
      <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md rounded-md">
        <div class="flex justify-between">
          <span class="text-xl font-semibold block">Admin Profile</span>
          <a href="{{ route('profileadmin') }}" class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Profile</a>
        </div>
  
        <span class="text-gray-600">This information is secret so be careful</span>
        <div class="w-full p-8 mx-2 flex justify-center">
          <img id="showImage" class="max-w-xs w-32 items-center border" src="{{ (!empty($editDataAdmin->profile_photo_path)) ? asset('upload/admin_images/'.$editDataAdmin->profile_photo_path) : asset('upload/noimage.png') }}" alt="">                          
        </div>
        <form action="{{ route('profile.admin.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <!-- select image and update -->
        <div class="w-full flex justify-between ">
            
          <!-- select image -->
          <div class="">
            <label class="text-white bg-gray-800 w-full flex justify-center items-center py-1 px-4  rounded-lg shadow-lg tracking-wide uppercase border border-gray-500 cursor-pointer font-bold hover:bg-gray-700">
                <svg class="w-4 h-4 mx-2 " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="my-1 text-base leading-normal">Select  Image</span>
                <input
                id="image"
                name="profile_photo_path"
                type="file"
                class="hidden" />
            </label>
          </div>
          
          <!-- update -->
          <div class="flex items-center justify-center">
            <button type="submit" class="border border-gray-500 flex w-full items-center justify-center rounded-md text-center bg-gray-800 text-white py-2 px-4 font-bold hover:bg-gray-700">
                <svg
                fill="none"
                class="w-4 text-white mr-2"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                />
              </svg>
              Update
            </button>
          </div>
    
        </div>

        <!-- end select image and update -->

      </div>
      
      <div class="w-full md:w-3/5 p-8 bg-white shadow-md lg:ml-4 rounded-md ">
        <div class="rounded  shadow p-6">
          <div class="pb-6">
            <label for="name" class="font-semibold text-gray-700 block pb-1">Name</label>
            <div class="flex">
              <input  name="name" class="border-1  rounded-r px-4 py-2 w-full" type="text" value="{{ $editDataAdmin->name }}" />
            </div>
          </div>
          <div class="pb-4">
            <label for="email" class="font-semibold text-gray-700 block pb-1">Email</label>
            <input  name="email" class="border-1  rounded-r px-4 py-2 w-full" type="email" value="{{ $editDataAdmin->email }}" />
            <span class="text-gray-600 pt-4 block opacity-70">Personal login information of your account</span>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

 
<!-- script -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

{{-- image auto show --}}
<script type="text/javascript">

  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>

@endsection