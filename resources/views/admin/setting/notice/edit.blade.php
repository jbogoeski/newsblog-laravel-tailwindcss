@extends('admin.blank')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

@section('content')

<div class="w-full xl:w-2/3 block px-10 bg-white rounded-xl py-5 shadow-md">
    
    @if(session('status'))
          <span class="absolute text-green-800 block -mt-3 px-2  rounded-full shadow-xl w-1/3 text-md"> {{ session()->get('status') }}</span>
    @endif

    <div class="flex justify-between py-3 mx-5">
        <span class="text-xl font-semibold text-gray-700">Live TV Setting</span>
        @if ($notice->status == 1)
        <span class="float-right bg-green-500 px-3 py-1 rounded-full border-black font-bold text-white">ACTIVE</span>
            
        @else
        <span class="float-right bg-indigo-500 px-3 py-1 rounded-full border-black font-bold text-white">INACTIVE</span>
            
        @endif
    </div>

    <form action="{{ route('admin.notice.update', $notice->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="text-gray-700 md:flex md:items-center p-4">
            <div class="mb-1 md:mb-0 md:w-1/3">
                <label class="text-gray-800 font-bold">Notice Text</label>
            </div>
            <div class="md:w-2/3 md:flex-grow">
                <textarea id="summernote" name="notice" class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                 type="text">{{ $notice->notice }}</textarea>
               
            </div>
        </div>

    
        <label class="inline-flex items-center p-4">
            <input name="status" type="hidden" value="0">
            <input name="status" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"
            {{ $notice->status == 1 ? 'checked' : ''}}
            ><span class="ml-2 text-gray-700">Status</span>
        </label>        
        <hr>

        <div class="flex p-2 mt-4">
            <div class="flex-auto flex flex-row-reverse">
                <button class="w-1/2 lg:w-1/3 border-indigo-500 bg-gray-800 text-white font-bold rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">Update</button>
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

@endsection