@extends('personal/layouts.app')

@section("content")
<section class="py-8 bg-blueGray-50">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6 lg:mb-0">
            <div class="md:px-12 lg:px-16 bg-white rounded-3xl">
              <div class="chart" data-type="radial-bar-beklenen"></div>
              <div class="chart" data-type="radial-bar-tamamlanan"></div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6 lg:mb-0">
            <div class="md:px-12 lg:px-16 bg-white rounded-3xl">
              <div class="chart" data-type="radial-bar-evrakBekleyen"></div>
              <div class="chart" data-type="radial-bar-eksikEvrak"></div>
            </div>
          </div>
          <div class="w-full lg:w-1/3 px-3">
            <div class="md:px-12 lg:px-16 bg-white rounded-3xl">
              <div class="chart" data-type="radial-bar-evrakIncelenen"></div>
              <div class="chart" data-type="radial-bar-redEdilen"></div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
<section class="py-8">
  <center>
  <a href="{{route('personal.personal_application_add')}}" class="block py-5 px-10 ml-4 md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-indigo-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Yeni Başvuru Ekle</a>
  </center>
  <br>
  <div class="container px-4 mx-auto">
    <h1>Basvurular</h1>
    <div class="p-4 mb-6 bg-white shadow rounded overflow-x-auto">
      <table class="table-auto w-full">
        <thead>
          <tr class="text-xs text-gray-500 text-left">
            <th class="pl-6 pb-3 font-medium">ID</th>
            <th class="pb-3 font-medium">Name</th>
            <th class="pb-3 font-medium">Joined</th>
            <th class="pb-3 font-medium">Updated</th>
            <th class="pb-3 font-medium">Company Name</th>
            <th class="pb-3 font-medium">Status</th>
            <th class="pb-3 font-medium"></th>
            <th class="pb-3 font-medium">Durum belirleme</th>
            <th class="pb-3 font-medium">Documents</th>
            <th class="pb-3 font-medium">Personel Id</th>
            <th class="pb-3 font-medium">Action</th></tr>
        </thead>
        <tbody>
          @foreach ($applicationList as $rs)
          <tr class="text-xs bg-gray-50">
            <td class="py-5 px-6 font-medium">{{$rs->id}}</td>
            <td class="flex px-4 py-3">
              <div>
                <p class="font-medium">{{$rs->fullname}}</p>
                <p class="text-gray-500">{{$rs->email}}</p>
              </div>
            </td>
            <td class="font-medium">{{$rs->created_at}}</td>
            <td class="font-medium">{{$rs->updated_at}}</td>
            <td>
              <span class="inline-block py-1 px-2 text-purple-500 bg-purple-50 rounded-full">{{$rs->companyName}}</span>
            </td>
            <td> 
              <span class="inline-block py-1 px-2 text-white bg-green-500 rounded-full">{{$stat[$rs->status_id]}}</span>
            </td>
            <form action="{{ route('personal.personal_application_completed',['id'=>$rs->id]) }}" method="POST">
              @csrf
            <td>
              <select name='status'>
              @foreach($statusList as $sL)
              <option value='{{$sL->id}}'>{{$sL->title}}</option>
              @endforeach
              </select>

            </td>
            <td>
              <a class="inline-block mr-2" href="{{route('personal.personal_application_completed',['id' =>$rs->id])}}">
              <button  type="submit" class="block py-2 px-4 mx-3 w-full md:max-w-max text-l leading-4 text-white font-medium tracking-tighter font-heading text-center bg-red-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">ONAYLA</button>
              </a>
            </td>
            </form>
            <td class="font-medium"><a href ="{{route('personal.personal_documents_create',['applications_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')">
              <img width="25" src="{{asset('assets')}}/admin/icon/document.png"></a>
            </td>
            <td class="font-medium">{{$rs->personelId}}</td>
            <td>
              <!--<a class="inline-block mr-2" href="{{route('personal.personal_application_edit',['id' =>$rs->id])}}">
                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.4999 9C16.2789 9 16.0669 9.0878 15.9106 9.24408C15.7544 9.40036 15.6666 9.61232 15.6666 9.83333V14.8333C15.6666 15.0543 15.5788 15.2663 15.4225 15.4226C15.2662 15.5789 15.0542 15.6667 14.8332 15.6667H3.16656C2.94555 15.6667 2.73359 15.5789 2.57731 15.4226C2.42103 15.2663 2.33323 15.0543 2.33323 14.8333V3.16667C2.33323 2.94565 2.42103 2.73369 2.57731 2.57741C2.73359 2.42113 2.94555 2.33333 3.16656 2.33333H8.16657C8.38758 2.33333 8.59954 2.24554 8.75582 2.08926C8.9121 1.93298 8.9999 1.72101 8.9999 1.5C8.9999 1.27899 8.9121 1.06702 8.75582 0.910744C8.59954 0.754464 8.38758 0.666667 8.16657 0.666667H3.16656C2.50352 0.666667 1.86764 0.930059 1.3988 1.3989C0.929957 1.86774 0.666565 2.50363 0.666565 3.16667V14.8333C0.666565 15.4964 0.929957 16.1323 1.3988 16.6011C1.86764 17.0699 2.50352 17.3333 3.16656 17.3333H14.8332C15.4963 17.3333 16.1322 17.0699 16.601 16.6011C17.0698 16.1323 17.3332 15.4964 17.3332 14.8333V9.83333C17.3332 9.61232 17.2454 9.40036 17.0892 9.24408C16.9329 9.0878 16.7209 9 16.4999 9ZM3.9999 9.63333V13.1667C3.9999 13.3877 4.0877 13.5996 4.24398 13.7559C4.40026 13.9122 4.61222 14 4.83323 14H8.36657C8.47624 14.0006 8.58496 13.9796 8.68649 13.9381C8.78802 13.8967 8.88037 13.8356 8.95823 13.7583L14.7249 7.98333L17.0916 5.66667C17.1697 5.5892 17.2317 5.49703 17.274 5.39548C17.3163 5.29393 17.3381 5.18501 17.3381 5.075C17.3381 4.96499 17.3163 4.85607 17.274 4.75452C17.2317 4.65297 17.1697 4.5608 17.0916 4.48333L13.5582 0.908333C13.4808 0.830226 13.3886 0.768231 13.287 0.725924C13.1855 0.683617 13.0766 0.661835 12.9666 0.661835C12.8566 0.661835 12.7476 0.683617 12.6461 0.725924C12.5445 0.768231 12.4524 0.830226 12.3749 0.908333L10.0249 3.26667L4.24156 9.04167C4.16433 9.11953 4.10323 9.21188 4.06176 9.31341C4.02029 9.41494 3.99926 9.52366 3.9999 9.63333ZM12.9666 2.675L15.3249 5.03333L14.1416 6.21667L11.7832 3.85833L12.9666 2.675ZM5.66656 9.975L10.6082 5.03333L12.9666 7.39167L8.0249 12.3333H5.66656V9.975Z" fill="#382CDD"></path>
                </svg>
              </a>-->
              <a class="inline-block mr-2" href="{{ route('personal.personal_application_edit',['id' =>$rs->id]) }}" onclick="return confirm('Onayla ! onaylamak ister misiniz?')">
                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.2667 6.32499L7.69169 9.90832L6.31669 8.53332C6.24198 8.44609 6.15005 8.37524 6.04666 8.32522C5.94328 8.2752 5.83067 8.24709 5.7159 8.24266C5.60114 8.23823 5.48669 8.25756 5.37975 8.29946C5.27282 8.34135 5.17569 8.4049 5.09448 8.48611C5.01327 8.56733 4.94972 8.66445 4.90783 8.77139C4.86593 8.87833 4.84659 8.99277 4.85102 9.10753C4.85546 9.2223 4.88357 9.33491 4.93359 9.4383C4.9836 9.54169 5.05446 9.63362 5.14169 9.70832L7.10002 11.675C7.17789 11.7522 7.27024 11.8133 7.37177 11.8548C7.4733 11.8963 7.58202 11.9173 7.69169 11.9167C7.91031 11.9157 8.11981 11.8289 8.27502 11.675L12.4417 7.50832C12.5198 7.43085 12.5818 7.33869 12.6241 7.23714C12.6664 7.13559 12.6882 7.02667 12.6882 6.91666C12.6882 6.80665 12.6664 6.69773 12.6241 6.59618C12.5818 6.49463 12.5198 6.40246 12.4417 6.32499C12.2856 6.16978 12.0743 6.08266 11.8542 6.08266C11.634 6.08266 11.4228 6.16978 11.2667 6.32499ZM9.00002 0.666656C7.35185 0.666656 5.74068 1.1554 4.37027 2.07108C2.99986 2.98675 1.93176 4.28824 1.30103 5.81096C0.670298 7.33368 0.50527 9.00923 0.826813 10.6257C1.14836 12.2423 1.94203 13.7271 3.10747 14.8925C4.2729 16.058 5.75776 16.8517 7.37427 17.1732C8.99078 17.4947 10.6663 17.3297 12.1891 16.699C13.7118 16.0683 15.0133 15.0002 15.9289 13.6297C16.8446 12.2593 17.3334 10.6482 17.3334 8.99999C17.3334 7.90564 17.1178 6.82201 16.699 5.81096C16.2802 4.79991 15.6664 3.88125 14.8926 3.10743C14.1188 2.33361 13.2001 1.71978 12.1891 1.30099C11.178 0.882205 10.0944 0.666656 9.00002 0.666656ZM9.00002 15.6667C7.68148 15.6667 6.39255 15.2757 5.29622 14.5431C4.19989 13.8106 3.34541 12.7694 2.84083 11.5512C2.33624 10.333 2.20422 8.99259 2.46146 7.69939C2.71869 6.40618 3.35363 5.2183 4.28598 4.28594C5.21833 3.35359 6.40622 2.71866 7.69942 2.46142C8.99263 2.20419 10.3331 2.33621 11.5512 2.84079C12.7694 3.34538 13.8106 4.19986 14.5432 5.29619C15.2757 6.39252 15.6667 7.68145 15.6667 8.99999C15.6667 10.7681 14.9643 12.4638 13.7141 13.714C12.4638 14.9643 10.7681 15.6667 9.00002 15.6667Z" fill="#17BB84"></path>
                </svg>
              </a>
              <a class="inline-block" href="{{route('personal.personal_application_delete',['id' =>$rs->id])}}" onclick="return confirm('Delete ! Are you sure ?')">
                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.33333 15C8.55435 15 8.76631 14.9122 8.92259 14.7559C9.07887 14.5996 9.16667 14.3877 9.16667 14.1667V9.16666C9.16667 8.94564 9.07887 8.73368 8.92259 8.5774C8.76631 8.42112 8.55435 8.33332 8.33333 8.33332C8.11232 8.33332 7.90036 8.42112 7.74408 8.5774C7.5878 8.73368 7.5 8.94564 7.5 9.16666V14.1667C7.5 14.3877 7.5878 14.5996 7.74408 14.7559C7.90036 14.9122 8.11232 15 8.33333 15ZM16.6667 4.99999H13.3333V4.16666C13.3333 3.50362 13.0699 2.86773 12.6011 2.39889C12.1323 1.93005 11.4964 1.66666 10.8333 1.66666H9.16667C8.50363 1.66666 7.86774 1.93005 7.3989 2.39889C6.93006 2.86773 6.66667 3.50362 6.66667 4.16666V4.99999H3.33333C3.11232 4.99999 2.90036 5.08779 2.74408 5.24407C2.5878 5.40035 2.5 5.61231 2.5 5.83332C2.5 6.05434 2.5878 6.2663 2.74408 6.42258C2.90036 6.57886 3.11232 6.66666 3.33333 6.66666H4.16667V15.8333C4.16667 16.4964 4.43006 17.1322 4.8989 17.6011C5.36774 18.0699 6.00363 18.3333 6.66667 18.3333H13.3333C13.9964 18.3333 14.6323 18.0699 15.1011 17.6011C15.5699 17.1322 15.8333 16.4964 15.8333 15.8333V6.66666H16.6667C16.8877 6.66666 17.0996 6.57886 17.2559 6.42258C17.4122 6.2663 17.5 6.05434 17.5 5.83332C17.5 5.61231 17.4122 5.40035 17.2559 5.24407C17.0996 5.08779 16.8877 4.99999 16.6667 4.99999ZM8.33333 4.16666C8.33333 3.94564 8.42113 3.73368 8.57741 3.5774C8.73369 3.42112 8.94565 3.33332 9.16667 3.33332H10.8333C11.0543 3.33332 11.2663 3.42112 11.4226 3.5774C11.5789 3.73368 11.6667 3.94564 11.6667 4.16666V4.99999H8.33333V4.16666ZM14.1667 15.8333C14.1667 16.0543 14.0789 16.2663 13.9226 16.4226C13.7663 16.5789 13.5543 16.6667 13.3333 16.6667H6.66667C6.44565 16.6667 6.23369 16.5789 6.07741 16.4226C5.92113 16.2663 5.83333 16.0543 5.83333 15.8333V6.66666H14.1667V15.8333ZM11.6667 15C11.8877 15 12.0996 14.9122 12.2559 14.7559C12.4122 14.5996 12.5 14.3877 12.5 14.1667V9.16666C12.5 8.94564 12.4122 8.73368 12.2559 8.5774C12.0996 8.42112 11.8877 8.33332 11.6667 8.33332C11.4457 8.33332 11.2337 8.42112 11.0774 8.5774C10.9211 8.73368 10.8333 8.94564 10.8333 9.16666V14.1667C10.8333 14.3877 10.9211 14.5996 11.0774 14.7559C11.2337 14.9122 11.4457 15 11.6667 15Z" fill="#E85444"></path>
                </svg>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="flex flex-wrap -mx-4 items-center justify-between">
      <div class="w-full lg:w-1/3 px-4 flex items-center mb-4 lg:mb-0">
        <p class="text-xs text-gray-400">Show</p>
        <div class="mx-3 py-2 px-2 text-xs text-gray-500 bg-white border rounded">
          <select name="" id="">
            <option value="1">15</option>
            <option value="1">25</option>
            <option value="1">50</option>
            <option value="1">100</option>
          </select>
        </div>
        <p class="text-xs text-gray-400">of 1200</p>
      </div>
      <div class="w-full lg:w-auto px-4 flex items-center justify-center">
        <a class="inline-flex mr-3 items-center justify-center w-8 h-8 text-xs text-gray-500 border border-gray-300 bg-white hover:bg-indigo-50 rounded" href="#">
          <svg width="6" height="8" viewbox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.53335 3.99999L4.86668 1.66666C5.13335 1.39999 5.13335 0.999992 4.86668 0.733325C4.60002 0.466659 4.20002 0.466659 3.93335 0.733325L1.13335 3.53333C0.866683 3.79999 0.866683 4.19999 1.13335 4.46666L3.93335 7.26666C4.06668 7.39999 4.20002 7.46666 4.40002 7.46666C4.60002 7.46666 4.73335 7.39999 4.86668 7.26666C5.13335 6.99999 5.13335 6.59999 4.86668 6.33333L2.53335 3.99999Z" fill="#A4AFBB"></path>
          </svg>
        </a>
        <a class="inline-flex mr-3 items-center justify-center w-8 h-8 text-xs text-gray-500 border border-gray-300 bg-white hover:bg-indigo-50 rounded" href="#">1</a>
        <span class="inline-block mr-3">
          <svg class="h-3 w-3 text-gray-200" viewbox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 0.666687C5.26667 0.666687 4.66667 1.26669 4.66667 2.00002C4.66667 2.73335 5.26667 3.33335 6 3.33335C6.73333 3.33335 7.33333 2.73335 7.33333 2.00002C7.33333 1.26669 6.73333 0.666687 6 0.666687ZM1.33333 0.666687C0.6 0.666687 0 1.26669 0 2.00002C0 2.73335 0.6 3.33335 1.33333 3.33335C2.06667 3.33335 2.66667 2.73335 2.66667 2.00002C2.66667 1.26669 2.06667 0.666687 1.33333 0.666687ZM10.6667 0.666687C9.93333 0.666687 9.33333 1.26669 9.33333 2.00002C9.33333 2.73335 9.93333 3.33335 10.6667 3.33335C11.4 3.33335 12 2.73335 12 2.00002C12 1.26669 11.4 0.666687 10.6667 0.666687Z" fill="currentColor"></path>
          </svg>
        </span>
        <a class="inline-flex mr-3 items-center justify-center w-8 h-8 text-xs text-white bg-indigo-500 rounded" href="#">12</a><a class="inline-flex mr-3 items-center justify-center w-8 h-8 text-xs text-gray-500 border border-gray-300 bg-white hover:bg-indigo-50 rounded" href="#">13</a><a class="inline-flex mr-3 items-center justify-center w-8 h-8 text-xs text-gray-500 border border-gray-300 bg-white hover:bg-indigo-50 rounded" href="#">14</a>
        <span class="inline-block mr-3">
          <svg class="h-3 w-3 text-gray-200" viewbox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 0.666687C5.26667 0.666687 4.66667 1.26669 4.66667 2.00002C4.66667 2.73335 5.26667 3.33335 6 3.33335C6.73333 3.33335 7.33333 2.73335 7.33333 2.00002C7.33333 1.26669 6.73333 0.666687 6 0.666687ZM1.33333 0.666687C0.6 0.666687 0 1.26669 0 2.00002C0 2.73335 0.6 3.33335 1.33333 3.33335C2.06667 3.33335 2.66667 2.73335 2.66667 2.00002C2.66667 1.26669 2.06667 0.666687 1.33333 0.666687ZM10.6667 0.666687C9.93333 0.666687 9.33333 1.26669 9.33333 2.00002C9.33333 2.73335 9.93333 3.33335 10.6667 3.33335C11.4 3.33335 12 2.73335 12 2.00002C12 1.26669 11.4 0.666687 10.6667 0.666687Z" fill="currentColor"></path>
          </svg>
        </span>
        <a class="inline-flex mr-3 items-center justify-center w-8 h-8 text-xs border border-gray-300 bg-white hover:bg-indigo-50 rounded" href="#">62</a>
        <a class="inline-flex items-center justify-center w-8 h-8 text-xs text-gray-500 border border-gray-300 bg-white hover:bg-indigo-50 rounded" href="#">
          <svg width="6" height="8" viewbox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.88663 3.52667L2.05996 0.700006C1.99799 0.637521 1.92425 0.587925 1.84301 0.554079C1.76177 0.520233 1.67464 0.502808 1.58663 0.502808C1.49862 0.502808 1.41148 0.520233 1.33024 0.554079C1.249 0.587925 1.17527 0.637521 1.1133 0.700006C0.989128 0.824915 0.919434 0.993883 0.919434 1.17001C0.919434 1.34613 0.989128 1.5151 1.1133 1.64001L3.4733 4.00001L1.1133 6.36001C0.989128 6.48491 0.919434 6.65388 0.919434 6.83001C0.919434 7.00613 0.989128 7.1751 1.1133 7.30001C1.17559 7.36179 1.24947 7.41068 1.33069 7.44385C1.41192 7.47703 1.49889 7.49385 1.58663 7.49334C1.67437 7.49385 1.76134 7.47703 1.84257 7.44385C1.92379 7.41068 1.99767 7.36179 2.05996 7.30001L4.88663 4.47334C4.94911 4.41136 4.99871 4.33763 5.03256 4.25639C5.0664 4.17515 5.08383 4.08801 5.08383 4.00001C5.08383 3.912 5.0664 3.82486 5.03256 3.74362C4.99871 3.66238 4.94911 3.58865 4.88663 3.52667Z" fill="#A4AFBB"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection