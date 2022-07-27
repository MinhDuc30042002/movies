<x-app-layout>
    <div class="py-12">
        <div class="max-w mx-auto sm:px-6 lg:px-8">
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
                                        Hình ảnh
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Tên phim
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Trạng thái
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Đạo diễn
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Quốc gia
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Sản xuất
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Thao tác
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($movies as $item)
                                <tbody>
                                    <tr class="border-b">
                                        <th scope="row"
                                            class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:black">
                                            {{ $item->id }}
                                        </th>
                                        <th scope="row" class="py-4 px-3">
                                            <img src=" {{ asset($item->link_img) }}" alt="Image movie">
                                        </th>
                                        <th scope="row" class="py-4 px-3 font-medium  whitespace-nowrap dark:black ">
                                            {{ $item->name }}
                                        </th>
                                        <th scope="row" class="py-4 px-3 font-medium  whitespace-nowrap dark:black ">
                                            {{ $item->status }}
                                        </th>
                                        <th scope="row" class="py-4 px-2 font-medium  whitespace-nowrap dark:black ">
                                            {{ $item->director }}
                                        </th>
                                        <th scope="row" class="py-4 px-3 font-medium  whitespace-nowrap dark:black ">
                                            {{ $item->national }}
                                        </th>
                                        <th scope="row" class="py-4 px-3 font-medium  whitespace-nowrap dark:black ">
                                            {{ $item->released }}
                                        </th>
                                        <th scope="row"
                                            class="py-4 px-3 font-medium  whitespace-nowrap overflow-ellipsis">
                                            <button type="button"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Sửa</button>

                                            <button type="button"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Xóa</button>

                                        </th>
                                        <div class="clearfix"></div>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="class="py-4 px-6 mt-3">
                            {{ $movies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
