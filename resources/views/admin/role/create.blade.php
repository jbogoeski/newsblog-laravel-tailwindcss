@extends('admin.blank')

@section('content')
  <!-- strat content -->
  <div class="bg-white rounded-md">
    <section class="bg-white  bg-opacity-50  ">
        <div class="">
        
            <div class="">
                <div class="flex flex-wrap ">
                  <div class="w-full ">
                    <div
                      class="relative flex flex-col min-w-0 break-words mb-6 shadow-lg rounded-lg bg-white border-0"
                    >
                      <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="w-full md:w-1/2 text-center flex justify-between">
                          <h6 class="text-gray-800 text-xl font-bold">Add Role</h6>
                          <a
                            href="{{ route('admin.role.index') }}"
                            class="bg-gray-800 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button"
                          >
                            Back
                        </a>
                        </div>
                      </div>
                      <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                     
                        <form action="{{ route('admin.role.store') }}" method="POST">
                          @csrf
                          <h6
                            class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                          >
                            User Information
                          </h6>
                          <div class="flex flex-col">
                            @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                       
                            @endif
                            @if (session('error'))
      
                            <span class="text-green-800"> {{ session()->get('error') }}</span>
      
                            @endif
                         
                       
                            <div class="w-full lg:w-6/12 px-4">
                              <div class="relative w-full mb-3">
                                <label
                                  class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                >
                                  Name
                                </label>
                                <input
                                  id="name"
                                  name="name"
                                  type="text"
                                  class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                />
                                <span class="text-xs text-gray-600" id="passwordHelp">Enter Username.</span>

                              </div>
                            </div>
                      
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                  >
                                    Email
                                  </label>
                                  <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                  />
                                  <span class="text-xs text-gray-600" id="passwordHelp">Enter Email.</span>
  
                                </div>
                            </div>

                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                  <label
                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                  >
                                    Password
                                  </label>
                                  <input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                  />
                                  <span class="text-xs text-gray-600" id="passwordHelp">Enter Password.</span>
  
                                </div>
                            </div>

                            <label class="items-center p-2 flex px-4">
                                <input name="admin" type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="1"
                                ><span class="ml-2 text-gray-700">Content Writer</span>
                                <input name="admin" type="checkbox" class="ml-10 form-checkbox h-5 w-5 text-blue-600 " value="2"
                                ><span class="ml-2 text-gray-700">Super Admin</span>
                                
                            </label>
                            <span class="text-xs text-gray-600 px-4" id="passwordHelp">Select type of Role.</span>

                            <hr class=" bg-gray-400 border-t-2 my-3">
      
                            <button
                            class="bg-gray-800 w-1/2 text-white hover:bg-gray-700 font-bold uppercase text-md px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="submit"
                          >
                            Create
                          </button>
                           
                          </div>
      
                     
                        </form>
                      </div>
                    </div>
                  </div>
            
      
                  
                </div>
                
              </div>
        </div>
      </section>
  </div>
  <!-- end content -->

@endsection