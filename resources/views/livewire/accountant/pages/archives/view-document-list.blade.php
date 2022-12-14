<div class="w-full h-screen min-w-full px-4 mx-auto max-w-screen">
    <div class="container mx-auto my-4">
        {{-- table start --}}
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow-md shadow-primary-500/50 sm:rounded-lg bg-gray-50 ">
                        <div class="flex justify-between max-w-full m-4">
                            <div class="flex justify-start max-w-full m-4">
                                <div class="m-2">
                                    <details class="open:" id="filters">
                                        <summary class="text-secondary-700">Filters</summary>
                                        <div class="grid max-w-sm grid-cols-3 gap-3">
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last7days" aria-describedby="comments-description"
                                                        name="last7days" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last7days"
                                                        class="font-medium text-gray-700 truncate">Last 7 days</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last15days" aria-describedby="comments-description"
                                                        name="last15days" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last15days"
                                                        class="font-medium text-gray-700 truncate">Last 15 days</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last30days" aria-describedby="comments-description"
                                                        name="last30days" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last30days"
                                                        class="font-medium text-gray-700 truncate">Last 30 days</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last3months" aria-describedby="comments-description"
                                                        name="last3months" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last3months"
                                                        class="font-medium text-gray-700 truncate">Last 3 months</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last6months" aria-describedby="comments-description"
                                                        name="last6months" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last6months"
                                                        class="font-medium text-gray-700 truncate">Last 6 months</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last12months" aria-describedby="comments-description"
                                                        name="last12months" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last12months"
                                                        class="font-medium text-gray-700 truncate">Last 12
                                                        months</label>
                                                </div>
                                            </div>
                                        </div>
                                    </details>
                                </div>
                                <div class="m-2">
                                    <details class="open:" id="filters">
                                        <summary class="text-secondary-700">Location</summary>
                                        <div class="grid max-w-sm grid-cols-3 gap-3">
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last7days" aria-describedby="comments-description"
                                                        name="last7days" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last7days"
                                                        class="font-medium text-gray-700 truncate">Building A</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last15days" aria-describedby="comments-description"
                                                        name="last15days" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last15days"
                                                        class="font-medium text-gray-700 truncate">Building B</label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start col-span-1">
                                                <div class="flex items-center h-5">
                                                    <input id="last30days" aria-describedby="comments-description"
                                                        name="last30days" type="checkbox"
                                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="last30days"
                                                        class="font-medium text-gray-700 truncate">Building C</label>
                                                </div>
                                            </div>

                                        </div>
                                    </details>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="search" id="search" wire:model.debounce='searchText' placeholder="Search here"
                                    class="px-5 rounded-full max-h-16 w-md active:border-secondary-alt-500 focus:border-secondary-alt-500 focus:border-2 focus:ring-0">
                            </div>
                        </div>

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                {{-- <tr> --}}
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Folder name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Document Code
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Description/Document Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Date Archived
                                </th>
                                <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Legacy Document
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            
                                @if (count($disbursement_vouchers)>0 || count($legacy_documents)>0)
                               
                                    @foreach ($legacy_documents as $legacy_document)
                                    <tr>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            {{$legacy_document->folder->folder_name}}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            {{$legacy_document->document_code}}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            {{$legacy_document->name}}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            {{$legacy_document->created_at->format('F d, Y')}}
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap">
                                            YES
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="{{  route('archive-detail', ['id'=>$legacy_document->id,'islegacy'=>1])  }}" target="_blank" class="inline-flex text-indigo-600 hover:text-indigo-900">
                                                <span class="inline pr-3">View</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                    @foreach ($disbursement_vouchers as $disbursement_voucher)
                                    <tr>
                                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                </div>
                                                <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Jane Cooper
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    jane.cooper@example.com
                                                </div>
                                                </div>
                                            </div>
                                            </td>  --}}
                                            
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        {{ $disbursement_voucher->name }} aa
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Construction</div>
                                            <div class="text-sm text-gray-500">Holy fukcing noodles</div>
                                        </td>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Active
                                            </span>
                                            </td> --}}
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            Dec. 21, 2021
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="{{  route('archive-detail', ['id'=>1])  }}" target="_blank" class="inline-flex text-indigo-600 hover:text-indigo-900">
                                                <span class="inline pr-3">View</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td class="px-6 py-4 italic text-center text-gray-500 text-md whitespace-nowrap" colspan="4">
                                    NOTHING TO SHOW
                                    </td>
                                </tr>
                                @endif

                                <!-- More people... -->
                            </tbody>
                            
                        </table>
                        {{ $legacy_documents->links() }}
                    </div>
                </div>
            </div>
        </div>

        {{-- table end --}}            
    </div>
</div>
