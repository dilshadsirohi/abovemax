<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Company') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mt-5">
                        <form action="{{route('company.update',$company->id)}}" method="POST" enctype="multipart/form-data">
                            @CSRF
                            @method('PUT')
                            <div class="row">
                                <!-- First Column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="file" class="form-control-file" id="logo" name="logo" value="{{$company->logo}}" >
                                    </div>

                                    
                                    
                                </div>
                                <!-- Second Column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$company->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$company->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="text" class="form-control" id="website" placeholder="Enter website URL" name="website" value="{{$company->website}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update data</button>
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
                   <a href="{{route('company.index')}}"><p>Show and Edit all data here</p></a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
