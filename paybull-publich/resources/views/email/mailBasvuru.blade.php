<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamlar!</div>
                
                <div class="card-body">
                        <br>
                    <div class="col-md-12"> Ad Soyad: {{$details['fullname']}} </div> <br>
                    
                  <div class="col-md-12">    İşletme Adı / Marka Adı:  {{$details['companyName']}}</div><br>
                   <div class="col-md-12">   Platform : {{$details['platform']}}</div><br>
                   <div class="col-md-12">   Website : {{$details['webSite']}}</div><br>
                   <div class="col-md-12">   Email Adresi: {{$details['email']}}</div><br>
                   <div class="col-md-12">   Cep Telefonu: {{$details['phone']}}</div><br>
                   <div class="col-md-12">   Aylık Beklenen Ciro: {{$details['ciro']}}</div ><br>

                </div>
            </div>
        </div>
    </div>
</div>
