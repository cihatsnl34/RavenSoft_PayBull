<html>
<head>
  <title>PayBull Evrak Yukleme</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>


<h2 class="mb-12 text-9xl md:text-10xl xl:text-11xl leading-tight font-heading font-medium"><center><img style="width:25%" src="{{asset('assets')}}/admin/images/PaybullLogo.png"></center></h2>
<div class="max-w-4xl p-6 sm:p-10 mx-auto bg-coolGray-50 rounded-lg">
  <h1>Şirket ismi : {{$data->companyName}}</h1><br><br>
    <form action="{{ route('documents_add',['applications_id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Firma Yetkilisinin Arkalı Önlü Kimlik Fotokopisi</label>
          <input id="file-upload" multiple required class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "firmaYetkiliKimlik[]" type="file" placeholder="Dosya Seçilmedi"></div>
        <div class="w-full md:w-1/2 px-4">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Diğer Firma Yetkilisinin Arkalı Önlü Kimlik Fotokopisi</label>
          <input id="file-upload" multiple class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "digerYetkiliKimlik[]" type="file" placeholder="Dosya Seçilmedi"></div>
      </div>
      <div class="mb-8">
        <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Adres Belgesi</label>
        <input id="file-upload" required class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" name = "adresBelgesi" type="file" placeholder="Dosya Seçilmedi"></div>
      <div class="flex flex-wrap -mx-4 mb-8">
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">İmza Sirküleri</label>
          <input id="file-upload" required name = "imzaSirküleri" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="file" placeholder="Dosya Seçilmedi"></div>
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Vergi Levhası</label>
          <input id="file-upload" required name = "vergiLevhasi" class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="file" placeholder="Dosya Seçilmedi"></div>
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
              <td class="py-5 px-6 font-medium"><a href="{{ route('admin.admin_documents_download',['applications_id' =>$rs->applications_id]) }}"><img width="25" src="{{asset('assets')}}/admin/icon/download.png"></a></td>
              <td>
                <a class="inline-block" href="{{route('documents_delete',['id' =>$rs->id,'applications_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure ?')">
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
      <button onclick="return VerifyUploadSizeIsOK()" type="submit" class="block py-5 px-10 mx-auto w-full md:max-w-max text-xl leading-6 text-white font-medium tracking-tighter font-heading text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Evrak Yükle</button><br><br>
     
    </form>
  </div>
  <script type="text/javascript">
function VerifyUploadSizeIsOK()
{
   var UploadFieldID = "file-upload";
   var MaxSizeInBytes = 5000000;
   var fld = document.getElementById(UploadFieldID);
   if( fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes )
   {
      alert("5 MB den büyük dosya seçmeyiniz.");
      return false;
   }
   return true;
} // function VerifyUploadSizeIsOK()
</script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="{{asset('assets')}}/admin/js/charts-demo.js"></script>
  <script>function windowsClose(){
   close();
   window.close();
  }</script>
</body>
</html>