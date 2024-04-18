<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card">
                        <h5 class="card-header">Manage Company</h5>
                        <div class="card-body">
                          <h5 class="card-title">Perform CRUD on Companies.</h5>
                         
                          <a href="{{ route('company.create') }}" class="btn btn-primary">Continue</a>
                        </div>
                      </div>
                    
                      <div class="card">
                        <h5 class="card-header">Manage Employees</h5>
                        <div class="card-body">
                          <h5 class="card-title">Perform CRUD on Employees.</h5>
                         
                          <a href="{{ route('employees.create') }}" class="btn btn-primary">Continue</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
