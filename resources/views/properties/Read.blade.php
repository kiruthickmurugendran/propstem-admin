<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">

            <div>
                <h2 class="font-semibold  -xl text-gray-800 leading-tight">
                    {{ __('Properties') }}
                </h2>
            </div>

            <div>
                <a href="{{ route('prop.create') }}" > + ADD</a>
            </div>


        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

               
                 
                        <form method="get">
                            <div class="flex justify-between">
    
                               <div>

                                    <label for="limit">Entries:</label>
                                    <select id="limit" name="limit">
        
                                        <option value=10>10</option>
                                        <option value=10>25</option>
                                        <option value=10>50</option>
                                        <option value=100>100</option>
        
                                    </select>
                               </div>

                               <div>

                                    <input type="search" name="prop"></input>
                                    <input type="submit"></input>

                               </div>
    
                                
                            </div>    
                        </form>
                        

                    </div>

                    <style>
                        table, th, td {
                          border:1px solid black;
                        }
                    </style>
                    
                  <table style="width:100%">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Property Name</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Address</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                   <tbody>
                        @foreach ($properties as $property )

                            <tr>
                                <td>{{ $property->id }}</td>
                                <td>{{ $property->name }}</td>
                                <td>{{ $property->address }}</td>
                                <td>{{ $property->location }}</td>
                                <td>{{ $property->city }}</td>
                                <td>{{ $property->district }}</td>
                                <td>{{ $property->state }}</td>
                                <td>{{ $property->latitude }}</td>
                                <td>{{ $property->longitude }}</td>
                                <td>
                                    <a href={{ URL("prop/edit", $property->id) }} >Edit</a>
                                </td>
                            </tr>
                            
                        @endforeach
                   </tbody>
                    
                  </table>
                  <div class="pt-5">
                    {{ $properties->links() }}
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
