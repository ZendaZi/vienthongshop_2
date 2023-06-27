
<!-- Modal toggle -->
<button data-modal-target="update_pro{{ $_listSP->id_sp}}" data-modal-toggle="update_pro{{ $_listSP->id_sp}}"
     class="block text-white w-32 h-12 bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Cập nhật sản phẩm
  </button>
  
  <!-- Main modal -->
  <div id="update_pro{{ $_listSP->id_sp}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cập nhật sản phẩm
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="update_pro{{ $_listSP->id_sp}}">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-6 space-y-6">
    <form action="{{ url('updatesp') }}" method="post" class="text-left">  
        @csrf   
        <input type="hidden" name="id_sp" value="{{ $_listSP->id_sp}}">
    <div class="mb-6">
      <label for="maso_sp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mã sản phẩm</label>
      <input type="text" value="{{ $_listSP->maso_sp}}" id="maso_sp" name="maso_sp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-6">
      <label for="ten_sp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
      <input type="text" id="ten_sp" value="{{ $_listSP->ten_sp}}" name="ten_sp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-6">
        <label for="id_danhmuc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thuộc danh mục</label>
        <select id="id_danhmuc" name="id_danhmuc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        
          @foreach ($danhmuc_sp as $_danhmuc_sp)
          @if ($_listSP->id_danhmuc ==$_danhmuc_sp->id_dm)
          <option value="{{$_danhmuc_sp->id_dm}}" selected>{{$_danhmuc_sp->ten_dm}}</option>
         @else
          <option value="{{$_danhmuc_sp->id_dm}}">{{$_danhmuc_sp->ten_dm}}</option>
          @endif 
          @endforeach
        </select>
    </div>
      <div class="mb-6">
        <label for="giaithich_sp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả sản phẩm</label>
        <textarea id="giaithich_sp" name="giaithich_sp" rows="4"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
         placeholder="Mô tả về sản phẩm..." required>
         {{ $_listSP->giaithich_sp}}
        </textarea>    
      </div>
      <div class="mb-6">
        <label for="link_imgsp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hình ảnh sản phẩm</label>
        <input type="text" id="link_imgsp" value="{{ $_listSP->link_imgsp}}" name="link_imgsp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      </div>
      <div class="mb-6">
        <label for="gia_sp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Đơn giá sản phẩm</label>
        <input type="number" value="{{ $_listSP->gia_sp}}"  id="gia_sp" name="gia_sp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      </div>
      <div class="mb-6">
        <label for="kho" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tồn kho</label>
        <input type="number" value="{{ $_listSP->kho}}"  id="kho" name="kho" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      </div>
   <div class="text-center">
    <button type="submit"
    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >Cập nhật</button>
   </div>
  </form>
              </div>
             
          </div>
      </div>
  </div>
  