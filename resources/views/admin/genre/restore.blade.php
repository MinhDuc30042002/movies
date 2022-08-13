<x-app-layout>

    <div class="py-12">
        <div class="max-w mx-auto sm:px-6 lg:px-8">
            @if (null !== Session::get('msg'))
                <div id="toast-success"
                    class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow"
                    role="alert">
                    <div
                        class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-300 rounded-lg">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal"> {{ Session::get('msg') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-black">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        ID
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Thể loại
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Slug
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Thao tác
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($onlySoftDeleted as $item)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $item->id }}

                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $item->category }}

                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->slug }}
                                    </td>

                                    <th scope="row"
                                        class="py-4 px-3 font-medium  whitespace-nowrap overflow-ellipsis">
                                        <a href="/admin/the-loai/restore/{{ $item->id }}">
                                            <button type="button"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Khôi
                                                phục</button>
                                        </a>

                                        <a href="/admin/the-loai/restore/destroy/{{ $item->id }}}">
                                            <button type="button"
                                                class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Xóa
                                                vĩnh viễn</button>
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
