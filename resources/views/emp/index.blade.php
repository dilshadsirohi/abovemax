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
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Company</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Update</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($emp as $item)
                                  <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->firstname}}</td>
                                    <td>{{$item->lastname}}</td>
                                    <td>{{$item->company}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>

                                    <td><a href="{{route('employees.edit',$item->id)}}">Edit</a> | 
                                        <form action="{{route('employees.destroy',$item->id)}}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                  </tr>
                              @endforeach
                            
                              
                            </tbody>
                          </table>
                          <div>
                            {{$emp->links() }}
                          </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <a href="{{route('employees.create')}}"><p>Back to the registration</p></a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
