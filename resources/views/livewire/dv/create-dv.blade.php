<div class="p-0 m-0" x-data ="{newDV : @entangle('newDV') ,isstep4open : @entangle('isstep4open') ,step1finished : @entangle('step1finished'), step2finished : @entangle('step2finished'), step3finished : @entangle('step3finished')}">
    <div class="" x-data="{ isstep1open : @entangle('isstep1open'),isstep2open : @entangle('isstep2open'),isstep3open : @entangle('isstep3open')}">
            {{-- steps --}}
                <div class="bg-white lg:border-b lg:border-gray-100">
                    <nav class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" aria-label="Progress">
                        <ol role="list"
                            class="overflow-hidden rounded-md lg:flex lg:border-l lg:border-r lg:border-gray-200 lg:rounded-none">
                            {{-- step 1 --}}
                            <li class="relative overflow-hidden lg:flex-1">
                                <div class="overflow-hidden border border-b-0 border-gray-200 rounded-t-md lg:border-0">
                                    <!-- step 1-->
                                    <a href="#" class="group" wire:click.prevent="validateForm(1)">
                                        <span x-bind:class="isstep1open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-400 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                            aria-hidden="true"></span>
                                        <span class="flex items-start px-6 py-5 text-sm font-medium">
                                             <span class="flex-shrink-0">
                                                   @if($step1finished)
                                                   <span class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary-bg">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                  </span>
                                                        
                                                    @elseif(!$step1finished)
                                                        <h1 class="hidden">{{$step1finished}}</h1>
                                                        <span
                                                        class="flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg">
                                                        <span class="text-secondary-bg">01</span>
                                                    </span>
                                                    @endif     
                                            </span>                                     
                                            <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                                <span x-bind:class="isstep1open ? 'text-xs font-bold tracking-wide uppercase text-black' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">DV Main
                                                    Information Form</span>
                                                <span class="text-sm font-medium text-gray-400">Fill up the form for DV.</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>


                            {{-- step 2 --}}

                            <li class="relative overflow-hidden lg:flex-1">
                                <div class="overflow-hidden border border-t-0 border-gray-200 rounded-b-md lg:border-0">
                                    <!-- Upcoming Step -->
                                    {{-- setsignatory({{1}}) --}}
                                    <a href="#" class="group" wire:click.prevent="validateForm(2)">
                                        <span x-bind:class="isstep2open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-400 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                        aria-hidden="true"></span>
                                        <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                            <span class="flex-shrink-0">
                                                @if($step2finished)
                                                <span class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary-bg">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                  </span>
                                                  @elseif(!$step2finished)
                                                <span
                                                x-bind:class="isstep2open ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg' : 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-gray-400'">
                                                    <span x-bind:class="isstep2open ? 'text-secondary-bg' : 'text-gray-400'">02</span>
                                                </span>
                                                @endif   
                                            </span>
                                            <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                                <span
                                                x-bind:class="isstep2open ? 'text-xs font-bold tracking-wide uppercase text-black' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">Upload Related Documents</span>
                                                <span class="text-sm font-medium text-gray-500">Please upload PDF files only</span>
                                            </span>
                                        </span>
                                    </a>

                                    <!-- Separator -->
                                    <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                                        <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                            preserveAspectRatio="none">
                                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                                vector-effect="non-scaling-stroke" />
                                        </svg>
                                    </div>
                                </div>
                            </li>

                            {{-- step 3 --}}
                            

                            <li class="relative overflow-hidden lg:flex-1">
                                <div class="overflow-hidden border border-gray-200 lg:border-0">
                                    <!-- Current Step -->
                                    <a href="#" aria-current="step" wire:click.prevent="validateForm(3)">
                                        <span x-bind:class="isstep3open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-400 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                        aria-hidden="true"></span> 
                                        <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                            <span class="flex-shrink-0">
                                                @if($step3finished)
                                                <span class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary-bg">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                  </span>
                                                @elseif(!$step3finished)
                                                <span
                                                x-bind:class="isstep3open ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg' : 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-gray-400'">
                                                    <span x-bind:class="isstep3open ? 'text-secondary-bg' : 'text-gray-400'">03</span>
                                                </span>
                                                @endif
                                            </span>
                                            <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                                <span
                                                x-bind:class="isstep3open ? 'text-xs font-bold tracking-wide uppercase text-black' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">Signatory</span>
                                                <span class="text-sm font-medium text-gray-500">Choose Signatory</span>
                                            </span>
                                        </span>
                                    </a>

                                    <!-- Separator -->
                                    <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                                        <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                            preserveAspectRatio="none">
                                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                                vector-effect="non-scaling-stroke" />
                                        </svg>
                                    </div>
                                </div>
                            </li>
                            {{-- step 4  --}}
                            
                            <li class="relative overflow-hidden lg:flex-1">
                                <div class="overflow-hidden border border-gray-200 lg:border-0">
                                    <!-- Current Step -->
                                    <a href="#" aria-current="step" wire:click.prevent="validateForm(4)">
                                        <span x-bind:class="isstep4open ? 'absolute top-0 left-0 w-1 h-full bg-secondary-bg lg:w-full lg:h-1 lg:bottom-0 lg:top-auto' : 'absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-400 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto'"
                                        aria-hidden="true"></span>
                                        <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                            <span class="flex-shrink-0">
                                                <span
                                                x-bind:class="isstep4open ? 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-secondary-bg' : 'flex items-center justify-center w-10 h-10 border-2 rounded-full border-gray-400'">
                                                    <span x-bind:class="isstep4open ? 'text-secondary-bg' : 'text-gray-400'">04</span>
                                                </span>
                                            </span>
                                            <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                                <span
                                                x-bind:class="isstep4open ? 'text-xs font-bold tracking-wide uppercase text-black' : 'text-xs font-bold tracking-wide uppercase text-gray-400'">Preview</span>
                                                <span class="text-sm font-medium text-gray-500">Review and confirm information for <voucher></voucher></span>
                                            </span>
                                        </span>
                                    </a>

                                    <!-- Separator -->
                                    <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                                        <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                            preserveAspectRatio="none">
                                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                                vector-effect="non-scaling-stroke" />
                                        </svg>
                                    </div>
                                </div>
                            </li>

                        </ol>
                    </nav>
                </div>






            {{-- container sang tanan --}}
            

                {{-- first step --}}

                <div class="">
                    {{-- <div class="px-4 py-5 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div> --}}
                    <div x-cloak x-show="isstep1open" class="px-4 py-5 overflow-hidden sm:p-6" 
                    x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="-translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-300 sm:duration-300"
                    x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full">
                        <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
                            <div class="grid grid-cols-3 gap-6 divide-x-2 divide-gray-300">
                                <div class="space-y-2 md:col-span-1">
                                    <h3 class="text-xl font-medium leading-6 text-gray-900">Disbursement Voucher</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                    </p>
                                    <input class="p-2 text-sm border-gray-500 rounded-lg" type="text" wire:model.debounce.500ms="searchuser" placeholder="Search here first...">
                                    <div class="grid grid-cols-3 gap-2 px-2 pt-2 mx-auto">
                                       @if($searchedusers->count() > 0) 
                                            @foreach($searchedusers as $searcheduser)
                                            <div class="col-span-1 space-x-1">
                                                <button class="" wire:click="sUid({{$searcheduser->id}})">
                                                <img src="{{asset($searcheduser->profile_photo_url)}}" class="w-20 h-20 mx-auto rounded-full lg:w-24 lg:h-24">
                                                <p class="mt-1 text-sm text-blue-53">
                                                {{$searcheduser->first_name}} {{$searcheduser->middle_name}}  {{$searcheduser->last_name}} 
                                                </p>                                        
                                                </button>
                                            </div>                                    
                                            @endforeach
                                        @else
                                            <div class="col-span-3">
                                                <p class="mt-1 text-sm text-gray-500">
                                                No Employee found with '{{$searchuser}}'
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-span-2 pl-2 mt-0">
                                {{-- form here --}}
                                    <form action="#" method=""> 
                                        <div class="grid grid-cols-6 gap-6">
                                            



                                            <div class="col-span-3">
                                                <label for="first-name" class="block text-sm font-medium text-gray-700">Payee first
                                                    name</label>
                                                <input type="text" wire:model="fn" name="first-name" id="first-name" autocomplete="given-name"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" disabled >
                                                    @error('first_name')
                                                    <span class="text-sm text-red-500">{{$message}}</span>
                                                    @enderror
                                            </div>

                                            <div class="col-span-3">
                                                <label for="last-name" class="block text-sm font-medium text-gray-700">Payee last
                                                    name</label>
                                                <input type="text" wire:model="ln" name="last-name" id="last-name" autocomplete="family-name"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" disabled>
                                            </div>

                                            {{-- mode of payment --}}
                                            <div class="col-span-2">
                                                <label for="mode_of_payment" class="block text-sm font-medium text-gray-700">Mode Of Payment</label>
                                                <select wire:model="mode_id" 
                                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                                    @foreach ($mode_of_payment as $payment)
                                                    <option value="{{$payment->id}}">{{$payment->mode_of_payment}}</option>       
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- DV Category --}}
                                            <div class="col-span-4">
                                                <label for="dv_category" class="block text-sm font-medium text-gray-700">Voucher Type</label> 
                                                <input type="text"
                                                   wire:model="voucher_type" class="block w-full px-3 py-2 mt-1 uppercase bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" disabled>
                                                
                                            </div>

                                            <div class="col-span-6">
                                            <h3 class="font-bold text-md">Particular/s</h3>
                                                <div class="grid grid-cols-9 gap-3 pt-2">
                                                    {{-- input group start --}}
                                                    <div class="grid grid-cols-3 col-span-9 border-2 border-gray-400 rounded-md shadow-sm ">
                                                        <div class="col-span-3 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Entry</label>
                                                            <input type="text" wire:model="entry.0" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                                                @error('entry.0')
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-span-1 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Responsibility Center</label>
                                                            <input type="text" wire:model="responsibility_center.0" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                @error('responsibility_center.0')
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div> 
                                                        <div class="col-span-1 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">MFO/PAP</label>
                                                            <input type="text" wire:model="mfo_pap.0" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                @error('mfo_pap.0')
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-span-1 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Amount</label>
                                                            <input type="number" wire:model="amount.0" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                @error('amount.0')
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                    {{-- input group end --}}
                                                    {{-- loops HERE start --}}
                                                    @foreach($inputs as $key => $value)
                                                    <div class="grid grid-cols-3 col-span-8 border-2 border-gray-400 rounded-md shadow-sm ">
                                                        <div class="col-span-3 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Entry</label>
                                                            <input type="text" wire:model="entry.{{ $value }}" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                                                @error('entry.'.$value)
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-span-1 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700 truncate">Responsibility Center</label>
                                                            <input type="text" wire:model="responsibility_center.{{ $value }}" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                @error('responsibility_center.'.$value)
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-span-1 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">MFO/PAP</label>
                                                            <input type="text" wire:model="mfo_pap.{{ $value }}" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                @error('mfo_pap.'.$value)
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-span-1 m-2">
                                                            <label for="first-name" class="block text-sm font-medium text-gray-700">Amount</label>
                                                            <input type="number" wire:model="amount.{{ $value }}" 
                                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                @error('amount.'.$value)
                                                                <span class="text-sm text-red-500">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-span-1 shadow-sm ">
                                                        <button class="w-full h-full bg-red-600 rounded-md" wire:click.prevent="remove({{$key}})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto text-blue-51" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    @endforeach
                                                    {{-- loops HERE end --}}
                                                    {{-- add button --}}
                                                    <button class="col-span-3 col-start-4 m-2 text-gray-800 rounded-full hover:bg-indigo-600 bg-blue-52" wire:click.prevent="add({{$i}})"><span class="m-2 text-sm font-extrabold">ADD ENTRY</span>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <div class="justify-end col-span-4 col-start-2" >
                                            <button class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-blue-54 focus:ring-indigo-500 focus:border-indigo-500" wire:click.prevent="validateForm(2)"> Proceed </button>
                                                
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="px-4 py-4 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div> --}}
                </div>


                {{-- 2nd step upload --}}

                  <div class="">
                    {{-- <div class="px-4 py-5 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div> --}}
                    <div x-cloak x-show="isstep2open" class="px-4 py-5 overflow-hidden sm:p-6" 
                    x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0">
                           <div class="bg-white rounded-md">
                                {{-- 
                                    <div class="space-y-12">
                                        <button class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-blue-54 focus:ring-indigo-500 focus:border-indigo-500" wire:click.prevent="validateForm(3)"> Proceed </button>
                                        {{-- <form method="POST" wire:submit.prevent="submit">
    
                                            <input id="name" wire:model.debounce.500ms="name">
                                        
                                            <x-media-library-attachment name="myUpload" />
                                        
                                            <button type="submit">Submit</button>
                                        </form> --}}

                                        {{-- make form for medialib here--




                                        
                                    </div>
                                </div> --}}
                                <div class="px-4 py-8 mx-auto max-w-7xl">
                                <h3 class="mb-5 text-4xl font-extrabold drop-shadow-lg">Documents required : </h3>
                                @if ($related_docs->count() > 0)
                                        <div class="mx-auto overflow-hidden bg-white border border-gray-300 rounded-md">
                                            
                                            <ul role="list" class="">
                                                
                                                @foreach ($related_docs as $doc)

                                                <li class="flex justify-start px-6 py-4">

                                                    <div class="flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 my-auto" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <div class="flex">
                                                        <h3 class="my-auto uppercase">{{$doc->related_docs}}</h3>
                                                    </div>
                                                </li>                             
                                                @endforeach
                                            </ul>
                                           
                                        </div>
                                        @else
                                        <h1>No documents here</h1>
                                        @endif 
                                        <button class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-blue-54 focus:ring-indigo-500 focus:border-indigo-500" wire:click.prevent="validateForm(3)"> Proceed </button>
                                    </div>

                            </div>

                    </div>
                    {{-- <div class="px-4 py-4 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div> --}}
                </div>


                {{-- 3rd --}}

                <div class="">
                    {{-- <div class="px-4 py-5 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card headers on desktop than on body sections -->
                    </div> --}}
                    <div x-cloak x-show="isstep3open" class="px-4 py-5 overflow-hidden sm:p-6" 
                    x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0">
                           <div class="bg-white rounded-md">
                            <div class="px-4 py-8 mx-auto max-w-7xl">
                                <div class="space-y-12">
                                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Select Signatory</h2>
                                    <p class="text-xl text-gray-500">Please select appropriate signatory for your Disbursement voucher application. You may start by searching...</p>
                                </div>
                            <input class="w-1/2 p-2 text-sm border-gray-500 rounded-lg" type="text" wire:model.debounce.500ms="searchsignatory" placeholder="Search here...">
                                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">

                                  @if($searchedsignatories->count() > 0)

                                     @foreach($searchedsignatories as $searchedsignatory)

                                        <li>
                                            <div class="space-y-4">
                                                <button class="space-y-2 rounded-lg hover:ring-blue-500 hover:ring-4" wire:click.prevent="setsignatory({{$searchedsignatory->id}})">
                                                    <div class="aspect-w-3 aspect-h-2">
                                                        <img class="object-cover rounded-lg shadow-lg " src="{{asset($searchedsignatory->profile_photo_url)}}" alt="n/a">
                                                    </div>

                                                    <div class="space-y-2">
                                                    <div class="space-y-1 text-lg font-medium leading-6">
                                                        <h3>{{$searchedsignatory->first_name}} {{$searchedsignatory->middle_name}}  {{$searchedsignatory->last_name}}</h3>
                                                        <p class="text-indigo-600">Department Name</p>
                                                    </div>
                                                    </div>
                                                </button>
                                            </div>
                                        </li>

                                        @endforeach

                                    @else

                                        <p class="text-gray-500 text-md">The system found no one with '{{$searchsignatory}}' on his/her name (╯°□°）╯︵ ┻━┻</p>

                                    @endif

                                    <!-- More people... -->
                                </ul>
                                </div>
                            </div>
                            </div>

                    </div>
                    {{-- <div class="px-4 py-4 sm:px-6">
                        <!-- Content goes here -->
                        <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
                    </div> --}}
                </div>



                {{-- 4th --}}

                <div class="p-2">

                        {{-- outermost wrapper --}}
                        <div id="dvPrint" class="grid w-full h-full grid-cols-8 bg-white border-4 border-black" x-cloak x-show="isstep4open" x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                        x-transition:enter-start="translate-x-full"
                        x-transition:enter-end="translate-x-0">
                    

                            {{-- G1 header part --}}
                            <div class="col-span-8 ">
                                <div class="grid grid-cols-8 grid-rows-4">
                                    {{-- logo --}}
                                    <div class="flex justify-between col-span-6 col-start-1 row-span-3 row-start-1 border-2 border-black ">
                                        <div class="pl-6 my-auto"><img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png" alt="sksu logo" class="w-auto h-20"></div>
                                        <div class="grid grid-rows-4 mr-3">
                                            <div class="row-span-3 px-0 mx-auto my-auto ">{!! QrCode::size(65)->margin(2)->generate((string)$dvno_temp); !!}
                                            </div>
                                            <div class="row-span-1">
                                                <span class="font-medium text-black text-md">Dv No.{{$dvno_temp}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- dV --}}
                                    <div class="col-span-6 col-start-1 row-span-1 row-start-4 text-center border-2 border-black">
                                        <span class="mx-auto my-auto font-sans font-extrabold text-black uppercase text-md">Disbursement Voucher</span>
                                    </div>
                                    {{-- fund cluster --}}
                                    <div class="col-span-2 col-start-7 row-span-2 border-2 border-black">
                                        <span class="mx-auto font-sans font-extrabold text-black uppercase text-md">Fund Cluster:</span>
                                    </div>
                                    {{-- Date and DV no --}}
                                    <div class="col-span-2 col-start-7 row-span-2 border-2 border-black">
                                        <div class="grid grid-rows-2 text-left"> 
                                            <span class="row-span-1 ml-2 font-sans font-extrabold text-black uppercase text-md">Date:</span>
                                            <span class="mx-auto font-sans font-extrabold text-black uppercase text-md">{!! date('F d, Y', strtotime($date)) !!}</span>
                                        </div>
                                        
                                    </div>
                                {{-- table for particulars --}}
                                <div class="col-span-8">
                                    <table class="min-w-full border-2 border-black table-fixed ">
                                        <thead class="border-2 border-black ">
                                            <tr class="bg-gray-300 border-2 border-black ">
                                                <th class='w-2/5 uppercase border-2 border-black '>Particulars</th>
                                                <th class='w-1/5 uppercase border-2 border-black '>responsibility center</th>
                                                <th class='w-1/5 uppercase border-2 border-black '>mfo/pap</th>
                                                <th class='w-1/5 uppercase border-2 border-black '>amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm border-2 border-black">
                                                     
                                                    <tr>
                                                        <td class="whitespace-normal border-2 border-black">
                                                            @if(isset($entry['0']))
                                                            {{$entry['0']}}
                                                            @endif
                                                        </td>
                                                        <td class="border-2 border-black ">
                                                            @if(isset($responsibility_center['0']))
                                                            {{$responsibility_center['0']}}
                                                            @endif
                                                             </td>
                                                        <td class="border-2 border-black ">
                                                            @if(isset($mfo_pap['0']))
                                                            {{$mfo_pap['0']}}
                                                            @endif
                                                        </td>
                                                        <td class="text-right border-2 border-black ">
                                                             @if(isset($amount['0']))
                                                            {{$amount['0']}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @foreach ($inputs as $key => $value)  
                                                    <tr>
                                                        <td class="whitespace-normal border-2 border-black ">
                                                           @if(isset($entry[(string)$value]))
                                                            {{$entry[(string)$value]}}
                                                            @endif
                                                        </td>
                                                        <td class="border-2 border-black ">
                                                            @if(isset($responsibility_center[(string)$value]))
                                                            {{$responsibility_center[(string)$value]}}
                                                            @endif
                                                        </td>
                                                        <td class="border-2 border-black ">
                                                            @if(isset($mfo_pap[(string)$value]))
                                                            {{$mfo_pap[(string)$value]}}
                                                            @endif
                                                            </td>
                                                        <td class="text-right border-2 border-black ">
                                                            @if(isset($amount[(string)$value]))
                                                            {{$amount[(string)$value]}}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                        </tbody>
                                        <tfoot class="border-2 border-black ">
                                            <tr>
                                                <td class="border-2 border-r-0 border-black "></td>
                                                <td class=""></td>
                                                <td class="text-center uppercase ">Amount Due</td>
                                                <td class="text-right border-2 border-black ">{{$total}}</td>
                                            </tr>                                    
                                        </tfoot>

                                    </table>
                                </div>
                                {{-- table for particulars end--}}
                                {{-- signatory A--}}
                                <div class ="col-span-8">
                                    <div class="grid grid-cols-5 grid-rows-4 border-2 border-black ">
                                        <div class="col-span-5 row-span-1 text-sm text-left"><span class="border-b border-r border-black ">&nbsp;A.&nbsp;</span> Certified: Expenses/Cash Advance necessary, lawful and incurred under my direct supervision
                                        </div>
                                        @if(isset($signatory))
                                        <div class="col-span-3 col-start-2 row-span-1 row-start-3 font-bold text-center border-b border-black">{{$signatory->first_name}} {{ \Illuminate\Support\Str::limit($signatory->middle_name, 1, $end='.') }} {{$signatory->last_name}}</div>
                                        {{-- {{$responsibility_center[(string)$value]}} --}}
                                        @endif
                                        @if(isset($position))
                                        <div class="col-span-3 col-start-2 row-span-1 row-start-4 font-semibold text-center">{{$position->position_name}} for {{$department->department_name}}</div>
                                        @endif
                                    </div>
                                </div>
                                {{-- signatory A--}}
                                <div class="col-span-8 text-sm border-t-2 border-l-2 border-r-2 border-collapse border-black">
                                    <span class="font-bold border-b border-r border-black ">&nbsp;B.&nbsp;</span>
                                        Accounting Entry:
                                </div>
                                {{-- signatory A end--}}

                                {{-- accounting entry --}}
                                <div class="col-span-8">
                                    <table class="min-w-full border-b-2 border-l-2 border-r-2 border-collapse border-black table-fixed ">
                                        <thead class="border-2 border-black ">
                                            <tr class="bg-gray-300 border-2 border-black ">
                                                <th class='w-3/6 font-bold uppercase border-2 border-black'>Account Title</th>
                                                <th class='w-1/6 uppercase border-2 border-black '>UACS CODE</th>
                                                <th class='w-1/6 uppercase border-2 border-black '>Debit</th>
                                                <th class='w-1/6 uppercase border-2 border-black '>Credit</th>
                                            </tr>
                                        </thead>
                                        <tbody class="border-2 border-black ">

                                                <tr>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                    <td class="border-l border-r border-black">&nbsp;</td>
                                                </tr>

                                        </tbody>

                                    </table>
                                </div>
                                 {{-- accounting entry end--}}
                                <div class="col-span-8 border-2 border-black">
                                    <div class="grid grid-cols-6 grid-rows-9">
                                        {{-- cd --}}
                                        <div class="col-span-3 col-start-1 row-span-1 row-start-1 border-r-2 border-black">
                                            <span class="font-bold border border-black ">&nbsp;C.&nbsp;</span>
                                            Certified:
                                        </div>
                                        <div class="col-span-3 col-start-4 row-span-1 row-start-1">
                                            <span class="font-bold border-t border-b border-r border-black ">&nbsp;D.&nbsp;</span>
                                            Approved for Payment
                                        </div>
                                        {{-- cd --}}
                                        <div class="col-span-3 col-start-1 row-span-3 row-start-2 border border-black">
                                            <div class="relative flex items-start m-3 ">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments" class="text-xs font-medium text-gray-700">Cash Available</label>                                                    
                                                </div>
                                            </div>
                                            <div class="relative flex items-start m-3">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments" class="text-xs font-medium text-gray-700">Subject to Authority to Debit Account (when applicable)</label>                                                    
                                                </div>
                                            </div>
                                            <div class="relative flex items-start m-3">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments" class="text-xs font-medium text-gray-700">Supporting documents complete and amount claimed proper</label>                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-span-3 col-start-4 row-span-3 row-start-2 border border-black"></div>


                                        <div class="col-span-1 row-span-1 border border-black">
                                        <span class="ml-2">Signature</span>
                                        </div>
                                        <div class="col-span-2 col-start-2 row-span-1 border border-black"></div>

                                        <div class="col-span-1 col-start-4 row-span-1 border border-black">
                                            <span class="ml-2">Signature</span>
                                        </div>
                                        <div class="col-span-2 col-start-5 row-span-1 border border-black"></div>

                                        <div class="col-span-1 row-span-1 border border-black">
                                            <span class="ml-2">Printed Name</span>
                                        </div>
                                        {{-- accountant name --}}
                                        <div class="col-span-2 col-start-2 row-span-1 text-center border border-black">
                                            <span class="font-extrabold">Name Here</span>
                                        </div>
                                        <div class="col-span-1 col-start-4 row-span-1 border border-black">
                                            <span class="ml-2">Printed Name</span>
                                        </div>
                                        <div class="col-span-2 col-start-5 row-span-1 text-center border border-black">
                                            <span class="font-extrabold">Name Here</span>
                                        </div> 
                                        <div class="col-span-1 col-start-1 row-span-1 border border-black">
                                            <span class="my-auto ml-2">Position</span>
                                        </div>
                                        <div class="grid col-span-2 col-start-2 grid-rows-2 row-span-1 text-center border border-black">
                                            <div class="relative col-span-1 text-xs border border-black"><span class="absolute inset-x-0 bottom-0"> Accountant</span></div>
                                            <div class="col-span-1 text-xs border border-black">Head, Accounting Unit/Authorized Representative</div>
                                        </div>
                                        <div class="col-span-1 col-start-4 row-span-1 border border-black">
                                            <span class="my-auto ml-2">Position</span>
                                        </div>
                                        <div class="grid col-span-2 col-start-5 grid-rows-2 row-span-1 text-center border border-black">
                                           <div class="relative col-span-1 text-xs border border-black"><span class="absolute inset-x-0 bottom-0"> University President</span></div>
                                            <div class="col-span-1 text-xs border border-black">Agency Head/Authorized Representative</div>
                                        </div>
                                        <div class="col-span-1 col-start-1 row-span-1 border border-black">
                                            <span class="ml-2">Date</span>
                                        </div>
                                        <div class="col-span-2 col-start-2 row-span-1 text-center border border-black">
                                            <span class="font-extrabold"></span>
                                        </div>
                                        <div class="col-span-1 col-start-4 row-span-1 border border-black">
                                            <span class="ml-2">Date</span>
                                        </div>
                                        <div class="col-span-2 col-start-5 row-span-1 text-center border border-black">
                                            <span class="font-extrabold"></span>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-8 col-span-8 grid-rows-4 border border-black">
                                        <div class="col-span-7 row-span-1 text-xs border border-black">
                                            <span class="font-bold border-t border-b border-r border-black ">&nbsp;E.&nbsp;</span>
                                            Reciept of Payment
                                        </div>
                                        <div class="col-span-7 col-start-1 row-span-1 row-start-4 text-xs border border-black">
                                            <span class="ml-2">Official Receipt No. & Date/Other Documents</span>
                                        </div>
                                        
                                        <div class="col-span-1 row-span-1 row-start-2 border border-black text-md"><span class="ml-2">Check/ADA No. :</span></div>
                                        <div class="col-span-1 row-span-1 row-start-3 border border-black text-md"><span class="ml-2">Signature :</span></div>
                                        <div class="col-span-2 col-start-2 row-span-1 row-start-2 border border-black"></div>
                                        <div class="col-span-2 col-start-2 row-span-1 row-start-3 border border-black"></div>
                                        <div class="col-span-1 col-start-4 row-span-1 row-start-2 border border-black">Date:</div>
                                        <div class="col-span-1 col-start-4 row-span-1 row-start-3 border border-black">Date:</div> 

                                        <div class="col-span-3 col-start-5 row-span-1 row-start-2 text-xs border border-black"><span class="ml-2">Bank Name & Account Number:</span></div>   
                                        <div class="col-span-3 col-start-5 row-span-1 row-start-3 text-xs border border-black"><span class="ml-2">Printed Name:</span></div>                                      

                                        <div class="col-span-1 col-start-8 row-span-2 text-sm border border-black"><span class="ml-2">JEV No.</span></div>
                                        <div class="col-span-1 col-start-8 row-span-2 row-start-3 text-sm border border-black"><span class="ml-2">Date</span></div>

                                    </div> 

                                </div>

                            </div>
                        </div>
                    
                    </div>

                    <input  type="button" class="inline-flex items-center px-4 py-2 mt-3 ml-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"  x-cloak x-show="isstep4open" x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0" onclick="printDiv('dvPrint')" value = "Print DV"/>
                  
                        
                     
                    
                    

                </div>














                
@push('scripts')
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endpush
    </div>

</div>
