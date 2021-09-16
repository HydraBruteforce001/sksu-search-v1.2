<div class = "p-5">
        
        <div class="items-center mx-auto mb-5 text-center">
            <h3 class="font-sans text-4xl font-extrabold text-primary-text drop-shadow-md">SELECT TRANSACTION</h3>
        </div>

        <ul role="list" class="grid grid-cols-1 gap-3">
        {{-- loop here for type --}}
        @foreach ($types as $type)
           <h3 class="hidden">{{Illuminate\Support\Facades\Hash::make('aasd'.$dv_type_id = $type->id)}}</h3>
           @php
                if(isset($dv_type_id)){
                    $categories = App\Models\DVCategory::where('dv_type_id', '=', $dv_type_id)->get();
                }
            @endphp
            <li class="flex flex-col col-span-1 text-left bg-white rounded-md shadow-sm" x-data="{showMe : false}">
                @if($categories->count()>0)
                    <div class="flex justify-between min-w-full p-3" x-on:click="showMe = !showMe ">
                        <h3 class="my-auto text-xl font-extrabold text-primary-text">{{$type->dv_type}}</h3>
                        <div class="flex">
                        <button > <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 my-auto text-transparent text-primary-text" id="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                            </svg>
                            </button>
                        </div>
                    </div>
                @else
                    <a href="">
                        <div class="flex justify-between min-w-full p-3">
                            <h3 class="my-auto text-xl font-extrabold text-primary-text">{{$type->dv_type}}</h3>
                            <div class="flex">
                            <button > <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 my-auto text-transparent text-primary-text" id="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                </svg>
                                </button>
                            </div>
                        </div>    
                    </a>            
                @endif

                
                <div class="p-3 ml-3 bg-gray-200 rounded-md " x-cloak x-show="showMe">
                {{-- loop category here --}}
                
                 @foreach ($categories as $category)
                  <h3 class="hidden">{{Illuminate\Support\Facades\Hash::make('aasd'.$dv_category_id = $category->id)}}</h3>
                   <div x-data="{openCA:false}">
                        <h3 class="p-2 text-black rounded-md text-md hover:bg-gray-600 hover:text-white" x-on:click="openCA = !openCA ">{{$category->dv_category}}</h3>
                        <div class="grid flex-col grid-cols-1 p-3 ml-3 bg-gray-400 rounded-md " x-cloak x-show="openCA">
                        {{-- sub cat only a --}}
                        @php
                            if(isset($dv_type_id)){
                                $sub_categories = App\Models\DVSubCategory::where('dv_category_id', '=', $dv_category_id)->get();
                            }
                        @endphp
                                    @foreach ($sub_categories as $sub_category)
                                        <a href="{{route('cdv', ['id' => $sub_category->id])}}" class="p-2 text-black rounded-md text-md hover:bg-gray-800 hover:text-white">{{$sub_category->dv_sub_category}}</a>
                                    {{-- sub cat only a end--}}
                                    @endforeach 
                        </div>
                    </div>
                    @endforeach 
                {{-- loop category here end--}}
                </div>
            </li>
            @endforeach
           {{-- loop here for type  end--}}
        </ul>

</div>

 