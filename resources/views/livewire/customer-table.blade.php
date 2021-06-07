<div>
    <div class="shadow sm:hidden">
        <ul class="mt-2 divide-y dark:divide-gray-600 divide-gray-200 overflow-hidden shadow sm:hidden">
            <li>
                <a href="#" class="block px-4 py-4 dark:bg-gray-800 dark:hover:bg-gray-700 bg-white hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                  <span class="flex-1 flex space-x-2 truncate">
                    <!-- Heroicon name: solid/cash -->
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"/>
                    </svg>
                    <span class="flex flex-col text-gray-500 text-sm truncate">
                      <span class="truncate">Payment to Molly Sanders</span>
                      <span><span class="dark:text-gray-200 text-gray-900 font-medium">$20,000</span> USD</span>
                      <time datetime="2020-07-11">July 11, 2020</time>
                    </span>
                  </span>
                    <!-- Heroicon name: solid/chevron-right -->
                  <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                       viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"/>
                  </svg>
                </span>
                </a>
            </li>

            <!-- More transactions... -->
        </ul>

        <nav class="bg-white px-4 py-3 flex items-center justify-between border-t dark:border-gray-700 border-gray-200"
             aria-label="Pagination">
            <div class="flex-1 flex justify-between">
                <a href="#"
                   class="relative inline-flex items-center px-4 py-2 border dark:border-gray-600 border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                    Previous
                </a>
                <a href="#"
                   class="ml-3 relative inline-flex items-center px-4 py-2 border dark:border-gray-600 border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                    Next
                </a>
            </div>
        </nav>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-900 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Activity table (small breakpoint and up) -->
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col mt-2">
                        <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                            <div class="hidden sm:block">
                                <div class="flex-1 flex border border-gray-600">
                                        <label for="search_field" class="sr-only">Search</label>
                                        <div
                                            class="relative w-full dark:text-gray-500 dark:focus-within:text-gray-400 text-gray-400 focus-within:text-gray-600">
                                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none"
                                                 aria-hidden="true">
                                                <!-- Heroicon name: solid/search -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <input
                                                id="search_field"
                                                name="search_field"
                                                class="block w-full h-full pl-8 pr-3 py-2 border-transparent dark:bg-gray-900 dark:text-white text-gray-900 dark:placeholder-gray-600 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm"
                                                placeholder="Search customers"
                                                type="search"
                                                wire:model="searchTerm"
                                            >
                                        </div>
                                </div>
                                <table class="min-w-full divide-y dark:divide-gray-700 divide-gray-200">
                                    <thead>
                                    <tr>
                                        <th class="px-6 py-3 dark:bg-gray-800 bg-gray-50 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">
                                            ID
                                        </th>
                                        <th class="px-6 py-3 dark:bg-gray-800 bg-gray-50 text-left text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th class="hidden px-6 py-3 dark:bg-gray-800 bg-gray-50 text-right text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider md:block">
                                            Balance
                                        </th>
                                        <th class="px-6 py-3 dark:bg-gray-800 bg-gray-50 text-right text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">
                                            Overdue
                                        </th>
                                        <th class="px-6 py-3 dark:bg-gray-800 bg-gray-50 text-center text-xs font-medium dark:text-gray-400 text-gray-500 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody
                                        class="dark:bg-gray-800 bg-white divide-y dark:divide-gray-700 divide-gray-200">
                                    @foreach($customers as $customer)
                                        <tr class="dark:bg-gray-900 bg-white group">
                                            <td class="text-sm whitespace-nowrap dark:group-hover:bg-gray-800 group-hover:bg-gray-50 dark:text-gray-200 text-gray-900">
                                                <a href="{{route('admin.customers.show', $customer->id)}}" class="px-6 py-4"># {{ $customer->id }}</a>
                                            </td>
                                            <td class="text-sm whitespace-nowrap dark:group-hover:bg-gray-800 group-hover:bg-gray-50 dark:text-gray-200 text-gray-900">
                                                <a href="{{route('admin.customers.show', $customer->id)}}" class="px-6 py-4">{{$customer->name}}</a>
                                            </td>
                                            <td class="px-6 py-4 text-right whitespace-nowrap dark:group-hover:bg-gray-800 group-hover:bg-gray-50 text-sm dark:text-gray-400 text-gray-500">
                                                {{ $customer->currentBalanceAmount }}
                                            </td>
                                            <td class="px-6 py-4 text-right whitespace-nowrap dark:group-hover:bg-gray-800 group-hover:bg-gray-50 text-sm dark:text-gray-400 text-gray-500">
                                                {{ $customer->overdueBalanceAmount }}
                                            </td>
                                            <td class="hidden px-6 py-4 text-center whitespace-nowrap dark:group-hover:bg-gray-800 group-hover:bg-gray-50 text-sm dark:text-gray-400 text-gray-500 md:block">
                                                <a class="hover:underline text-blue-500 mx-1" href="{{route('admin.customers.show', $customer->id)}}">View</a>
                                                <a class="hover:underline text-yellow-500 mx-1" href="{{route('admin.customers.edit', $customer->id)}}">Edit</a>
                                                <a class="hover:underline text-red-500 mx-1" href="{{route('admin.customers.destroy', $customer->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div
                                    class="dark:bg-gray-800 bg-white px-4 py-3 border-t dark:border-gray-700 border-gray-200 dark:text-gray-400">
                                    {{ $customers->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
