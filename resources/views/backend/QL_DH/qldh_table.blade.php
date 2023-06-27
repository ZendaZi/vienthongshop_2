<div>
    <legend class="text-lg text-black font-bold">QUẢN LÝ SẢN ĐƠN HÀNG</legend>
</div>

<div class="relative overflow-x-auto mt-24">
    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-sky-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Mã đơn hàng
                </th>
                <th scope="col" class="px-6 py-3">
                    Tên sản phẩm
                </th>
                <th scope="col" class="px-6 py-3">
                    Số lượng
                </th>
                <th scope="col" class="px-6 py-3">
                    Thành tiền
                </th>
                <th scope="col" class="px-6 py-3">
                    Thông tin khách mua
                </th>
                <th scope="col" class="px-6 py-3">
                    Trạng thái
                </th>
                <th scope="col" class="px-6 py-3">
                    Thao tác
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donhang as $_donhang)
            @foreach ($chitiet as $_chitiet)
                @if ($_donhang->id_donhang == $_chitiet->id_dh)
            <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white">
                  {{ $_donhang->id_donhang}}
                </th>
                <td class="px-6 py-4">
                    @foreach ($listSP as $_listSP)
                        @if ($_listSP->id_sp == $_chitiet->id_sp)
                        {{ $_listSP->ten_sp}}
                        @endif
                    @endforeach
                    
                </td>
                <td class="px-6 py-4">
                    {{$_chitiet->soluong}}
                </td>
                <td class="px-6 py-4">
                    @foreach ($listSP as $_listSP)
                        @if ($_listSP->id_sp == $_chitiet->id_sp)
                        @php
                            $thanhtien=$_listSP->gia_sp*$_chitiet->soluong;
                        @endphp
                        {{$thanhtien}} VND
                        @endif
                    @endforeach
                </td>
                <td class="px-6 py-4">
                    <div class="inline-flex px-4 rounded-md shadow-sm " role="group">
                        @include('backend.QL_DH.qldh_info')
                    </div>
                </td>
                <td class="px-6 py-4">
                    @if ($_donhang->trangthai=="Đã duyệt")
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        {{ $_donhang->trangthai}}
                    </li>
                    @else
                    <li class="flex items-center">
                        {{ $_donhang->trangthai}}
                    </li>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <div class="inline-flex px-4 rounded-md shadow-sm " role="group">
                        @if ($_donhang->trangthai!="Đã duyệt")
                        @include('backend.QL_DH.qldh_duyet')
                        @endif
                      
                    </div>
                </td>
            </tr>
            @endif
            @endforeach
            @endforeach
          
        </tbody>
    </table>
</div>
