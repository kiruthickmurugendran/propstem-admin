<x-app-layout>
    <x-slot name="header" class="bg-blue">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Property') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                    <form  action='/prop/store' method="post">

                        @csrf

                            <div class="flex">
                                <div class="w-1/4">
                                    <label for="name" >Name : </label>
                                </div>
                                <div class="w-3/4 pb-4">
                                    <input type="text" id="name" name="name" class="w-4/5">
                                </div>
                            </div>   
                            @if ($errors->has('name'))
                                <ul>
                                    @foreach ($errors->get('name') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif 
                               
                                

                            <div class="flex">    
                                <div class="w-1/4">
                                    <label for="address" >Address : </label>
                                </div>
                                <div class="w-3/4 pb-4">
                                    <input type="text" id="addres" name="address" class="w-4/5">
                                </div>
                            </div>
                            @if ($errors->has('address'))
                                 <ul> 
                                    @foreach ($errors->get('address') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul> 
                            @endif   
                           
                                

                            <div class="flex pb-3 items-center">  
                                <div class="w-1/4">
                                    <label for="location"> Location : </label>
                                </div>
                                <div class="w-3/4 pb-4" >
                                    <input type="text" id="text" name="location" class="w-4/5">
                                </div>  
                            </div> 
                            @if ($errors->has('location'))
                                <ul>
                                    @foreach ($errors->get('location') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif      
                               
                                
                            <div class="flex">    
                                <div class="w-1/4">
                                    <label for="city">City : </label>
                                </div>
                                <div class="w-3/4 pb-4">
                                    <input type="text" id="city" name="city" class="w-4/5">
                                </div>
                            </div> 
                            @if ($errors->has('city'))
                                <ul>   
                                    @foreach ($errors->get('city') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="flex">
                                <div class="w-1/4 ">
                                    <label for="district">District : </label>
                                </div>
                                <div class="pb-4 w-3/4">
                                    <input type="text" id="district" name="district" class="w-4/5">
                                </div>
                            </div>
                            @if ($errors->has('district'))
                                <ul>
                                    @foreach ($errors->get('district') as $error)
                                    <li class="text-red-500 ">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            
 

                            <div class="flex">
                                <div class="w-1/4">
                                    <label for="state">State : </label>
                                </div>
                                <div class="w-3/4 pb-4">
                                    <input type="text" id="state" name="state" class="w-4/5">
                                </div>
                            </div>
                            @if ($errors->has('state'))
                                <ul>
                                    @foreach ($errors->get('state') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
            

                            <div class="flex">
                                <div class="w-1/4">
                                    <label for="latitude">Latitude : </label>
                                </div>
                                <div class="w-3/4 pb-4">
                                    <input type="text" id="latitude" name="latitude" class="w-4/5">
                                </div>
                            </div>
                            @if ($errors->has('latitude'))
                                <ul>
                                    @foreach ($errors->get('latitude') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul>    
                            @endif


                            <div class="flex">
                                <div class="w-1/4">
                                    <label for="longitude">Longitude : </label>
                                </div>
                                <div class="w-3/4 pb-4">
                                    <input type="text" id="longitude"name="longitude" class="w-4/5">
                                </div>
                            </div>
                            @if ($errors->has('longitude'))
                                <ul>    
                                    @foreach ($errors->get('longitude') as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                    @endforeach
                                </ul>

                            @endif
                           
                            <div class="flex">
                                <button type="submit" class="text-white w-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </div>
                            
                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>