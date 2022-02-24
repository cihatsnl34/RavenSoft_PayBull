<html>
<head>
  <title>Documents</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
  <link rel="stylesheet" href="{{asset('assets')}}/admin/css/tailwind/tailwind.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
  <script src="{{asset('assets')}}/admin/js/main.js"></script>
</head>
<body>



<div class="max-w-4xl p-6 sm:p-10 mx-auto bg-coolGray-50 rounded-lg">
  <h1>Şirket ismi : {{$data->companyName}}</h1><br><br>
    <form action="{{ route('personal.personal_documents_add',['applications_id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Firma Yetkilisinin Arkalı Önlü Kimlik Fotokopisi</label>
          <input class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "firmaYetkiliKimlik" type="file" placeholder="Dosya Seçilmedi"></div>
        <div class="w-full md:w-1/2 px-4">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Diğer Firma Yetkilisinin Arkalı Önlü Kimlik Fotokopisi</label>
          <input class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "digerYetkiliKimlik" type="file" placeholder="Dosya Seçilmedi"></div>
      </div>
      <div class="mb-8">
        <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Adres Belgesi</label>
        <input class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "adresBelgesi" type="file" placeholder="Dosya Seçilmedi"></div>
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">İmza Sirküleri</label>
          <input name = "imzaSirküleri" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="file" placeholder="Dosya Seçilmedi"></div>
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Vergi Levhası</label>
          <input name = "vergiLevhasi" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="file" placeholder="Dosya Seçilmedi"></div>
      </div>
      <div class="p-4 mb-6 bg-white shadow rounded overflow-x-auto">
        <table class="table-auto w-full">
          <thead>
            <tr class="text-xs text-gray-500 text-left">
              <th class="pl-6 pb-3 font-medium">ID</th>
              <th class="pl-6 pb-3 font-medium">Başvuru Id</th>
              <th class="pb-3 font-medium">Documents Download</th>
              <th class="pb-3 font-medium">Action</th></tr>
          </thead>
          <tbody>
          @foreach ($files as $rs)
            <tr class="text-xs bg-gray-50">
              <td class="py-5 px-6 font-medium">{{$rs->id}}</td>
              <td class="py-5 px-6 font-medium">{{$rs->applications_id}}</td>
              <td class="py-5 px-6 font-medium"><a href="{{ route('personal.personal_documents_download',['applications_id' =>$rs->applications_id]) }}"><img width="25" src="{{asset('assets')}}/admin/icon/download.png"></a></td>
              <td>
                
                <a class="inline-block mr-2" href="{{ route('personal.personal_application_edit',['id' =>$rs->id]) }}" onclick="return confirm('Onayla ! onaylamak ister misiniz?')">
                  <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.2667 6.32499L7.69169 9.90832L6.31669 8.53332C6.24198 8.44609 6.15005 8.37524 6.04666 8.32522C5.94328 8.2752 5.83067 8.24709 5.7159 8.24266C5.60114 8.23823 5.48669 8.25756 5.37975 8.29946C5.27282 8.34135 5.17569 8.4049 5.09448 8.48611C5.01327 8.56733 4.94972 8.66445 4.90783 8.77139C4.86593 8.87833 4.84659 8.99277 4.85102 9.10753C4.85546 9.2223 4.88357 9.33491 4.93359 9.4383C4.9836 9.54169 5.05446 9.63362 5.14169 9.70832L7.10002 11.675C7.17789 11.7522 7.27024 11.8133 7.37177 11.8548C7.4733 11.8963 7.58202 11.9173 7.69169 11.9167C7.91031 11.9157 8.11981 11.8289 8.27502 11.675L12.4417 7.50832C12.5198 7.43085 12.5818 7.33869 12.6241 7.23714C12.6664 7.13559 12.6882 7.02667 12.6882 6.91666C12.6882 6.80665 12.6664 6.69773 12.6241 6.59618C12.5818 6.49463 12.5198 6.40246 12.4417 6.32499C12.2856 6.16978 12.0743 6.08266 11.8542 6.08266C11.634 6.08266 11.4228 6.16978 11.2667 6.32499ZM9.00002 0.666656C7.35185 0.666656 5.74068 1.1554 4.37027 2.07108C2.99986 2.98675 1.93176 4.28824 1.30103 5.81096C0.670298 7.33368 0.50527 9.00923 0.826813 10.6257C1.14836 12.2423 1.94203 13.7271 3.10747 14.8925C4.2729 16.058 5.75776 16.8517 7.37427 17.1732C8.99078 17.4947 10.6663 17.3297 12.1891 16.699C13.7118 16.0683 15.0133 15.0002 15.9289 13.6297C16.8446 12.2593 17.3334 10.6482 17.3334 8.99999C17.3334 7.90564 17.1178 6.82201 16.699 5.81096C16.2802 4.79991 15.6664 3.88125 14.8926 3.10743C14.1188 2.33361 13.2001 1.71978 12.1891 1.30099C11.178 0.882205 10.0944 0.666656 9.00002 0.666656ZM9.00002 15.6667C7.68148 15.6667 6.39255 15.2757 5.29622 14.5431C4.19989 13.8106 3.34541 12.7694 2.84083 11.5512C2.33624 10.333 2.20422 8.99259 2.46146 7.69939C2.71869 6.40618 3.35363 5.2183 4.28598 4.28594C5.21833 3.35359 6.40622 2.71866 7.69942 2.46142C8.99263 2.20419 10.3331 2.33621 11.5512 2.84079C12.7694 3.34538 13.8106 4.19986 14.5432 5.29619C15.2757 6.39252 15.6667 7.68145 15.6667 8.99999C15.6667 10.7681 14.9643 12.4638 13.7141 13.714C12.4638 14.9643 10.7681 15.6667 9.00002 15.6667Z" fill="#17BB84"></path>
                  </svg>
                </a>
                <a class="inline-block" href="{{route('personal.personal_documents_delete',['id' =>$rs->id,'applications_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure ?')">
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
      <button type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Send</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="{{asset('assets')}}/admin/js/charts-demo.js"></script>
</body>
</html>