<div>
    <legend class="text-lg text-black font-bold">QUẢN LÝ SẢN PHẨM</legend>
</div>
<div class="absolute right-0 top-48 ">
    @include('backend.QL_SP.qlsp_add')
</div>
<div class="relative overflow-x-auto mt-24">
    
    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-sky-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Mã số
                </th>
                <th scope="col" class="px-6 py-3">
                    Tên sản phẩm
                </th>
                <th scope="col" class="px-6 py-3">
                    Chi tiết SP
                </th>
                <th scope="col" class="px-6 py-3">
                    Đơn giá
                </th>
                <th scope="col" class="px-6 py-3">
                    Tồn kho
                </th>
                <th scope="col" class="px-6 py-3">
                    Thao tác
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listSP as $_listSP)
            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white">
                   {{ $_listSP->maso_sp}}
                </th>
                <td class="px-6 py-4">
                    {{ $_listSP->ten_sp}}
                </td>
                <td class="px-6 py-4">
                    {{ $_listSP->giaithich_sp}}
                </td>
                <td class="px-6 py-4">
                    {{ $_listSP->gia_sp}}
                </td>
                <td class="px-6 py-4">
                    {{ $_listSP->kho}}
                </td>
                <td class="px-6 py-4">
                    <div class="inline-flex px-4 rounded-md shadow-sm " role="group">
                        @include('backend.QL_SP.qlsp_update')
                        @include('backend.QL_SP.qlsp_delete')
                    </div>
                </td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>
