<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-xl mx-auto sm:px-6 lg:px-8">
            @if (null !== Session::get('message'))
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
                    <div class="ml-3 text-sm font-normal"> {{ Session::get('message') }}
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
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:gap-4">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="/admin/phim/them" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Tên
                                                phim
                                            </label>
                                            <input onkeyup="ChangeToSlug()" type="text" name="name" id="name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('name')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="slug"
                                                class="block text-sm font-medium text-gray-700">Slug</label>
                                            <input type="text" name="slug" id="slug"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('slug')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="director" class="block text-sm font-medium text-gray-700">Đạo
                                                diễn</label>
                                            <input type="text" name="director" id="director" autocomplete="director"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('director')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="Thể loại" class="block text-sm font-medium text-gray-700">Thể
                                                loại</label>
                                            <select id="id_category" name="id_category" autocomplete="id_category"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="timing" class="block text-sm font-medium text-gray-700">Thời
                                                gian</label>
                                            <input type="text" name="timing" id="timing" autocomplete="timing"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('timing')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="released" class="block text-sm font-medium text-gray-700">Năm
                                                sản xuất</label>
                                            <input type="text" name="released" id="released"
                                                autocomplete="address-level2"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('released')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="national" class="block text-sm font-medium text-gray-700">Quốc
                                                gia</label>
                                            <input type="text" name="national" id="national"
                                                autocomplete="address-level2"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('national')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="status" class="block text-sm font-medium text-gray-700">Trạng thái
                                                </label>
                                            <input type="text" name="status" id="status"
                                                autocomplete="address-level2"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('status')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="link_img" class="block text-sm font-medium text-gray-700">Hình
                                                ảnh</label>
                                            <input type="file" name="link_img" id="link_img"
                                                autocomplete="address-level2"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md">
                                            @error('link_img')
                                                <span class="font-medium text-red-700 p-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-6">
                                            <label for="message"
                                                class="block mb-2 text-sm font-medium text-gray-900">Mô tả</label>
                                            <textarea id="message" rows="4" name="description"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                                                </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Thêm
                                        mới</button>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
