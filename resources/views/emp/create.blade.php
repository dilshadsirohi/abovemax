<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Employees') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-5">
                        <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
                            @CSRF
                            <div class="row">
                                <!-- First Column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                                    </div>
                                    
                                </div>
                                <!-- Second Column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        
                                        {{-- <input type="text" class="form-control" id="company" placeholder="Enter website URL" name="company"> --}}
                                        
                                        <label for="company">Company</label>
                                         <select class="form-select" aria-label="Default select example" name="company">
                                            <option selected>Open this select menu</option>
                                          @foreach ($cmp as $item)
                                          <option value="{{$item}}" >{{$item}}</option>   
                                          @endforeach
                                           
                                          
                                          </select>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <a href="{{route('employees.index')}}"><p>Show and Edit all data here</p></a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
