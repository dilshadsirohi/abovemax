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
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Website</th>
                                <th scope="col">Update</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($cmp as $item)
                                  <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->website}}</td>
                                    <td><a href="{{route('company.edit',$item->id)}}">Edit</a> | 
                                        <form action="{{route('company.destroy',$item->id)}}" method="POST" style="display:inline-block;">
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
                            {{$cmp->links() }}
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
                   <a href="{{route('company.create')}}"><p>Back to the registration</p></a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
