<x-layout>
  <style>
    .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
      background-color: #740000 !important;
      border-color: black !important;
      color: white !important;
    }
  </style>
  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <div class="card" style="border-color: black !important;">
        <div class="card-header" style="background-color: #740000; color: white;">Todo Edit</div>
        <div class="card-body" style="background-color: #8B0000;">
          <form action="{{route('todoUpdate', ['todo' => $todo->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Todo otsikko</label>
                <div class="col-md-6">
                  <input type ="text" name="otsikko" class="form-control" placeholder="{{$todo->otsikko}}" value="{{$todo->otsikko}}" style="background-color: #740000; border-color: #740000; color: white;">
                  @error('otsikko')
                      <div class="m-0 small alert alert-danger shadow-sm">
                          {{$message}}
                      </div>   
                  @enderror
                </div>
            </div>
            <br>
            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Status</label>
                <div class="col-md-6">
                  <input type="radio" name="status" {{($todo->status=="idea") ? "checked" : ""}} value="idea" ><label style="color: white !important;">&nbsp;Idea</label><br>
                  <input type="radio" name="status" {{($todo->status=="aloitettu") ? "checked" : ""}} value="aloitettu"><label style="color: white !important;">&nbsp;Aloitettu</label><br>
                  <input type="radio" name="status" {{($todo->status=="50") ? "checked" : ""}} value="50"><label style="color: white !important;">&nbsp;50% Tehty</label><br>
                  <input type="radio" name="status" {{($todo->status=="valmis") ? "checked" : ""}} value="valmis"><label style="color: white !important;">&nbsp;Valmis</label><br>
                  @error('status')
                      <div class="m-0 small alert alert-danger shadow-sm">
                          {{$message}}
                      </div>
                  @enderror
                </div>
            </div>
            <br>
            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Kiireellisyys</label>
                <div class="col-md-6">
                  <input type="radio" name="kiireellisyys" {{($todo->kiireellisyys=="heti") ? "checked" : ""}} value="heti"><label style="color: white !important;">&nbsp;Heti</label><br>
                  <input type="radio" name="kiireellisyys" {{($todo->kiireellisyys=="huomenna") ? "checked" : ""}} value="huomenna"><label style="color: white !important;">&nbsp;Huomenna</label><br>
                  <input type="radio" name="kiireellisyys" {{($todo->kiireellisyys=="joskus") ? "checked" : ""}} value="joskus"><label style="color: white !important;">&nbsp;Joskus</label><br>
                  @error('kiireellisyys')
                      <div class="m-0 small alert alert-danger shadow-sm">
                          {{$message}}
                      </div>   
                  @enderror
                </div>
            </div>
            <br>

            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Todo selite</label>
                <div class="col-md-6">
                  <textarea name="selite" rows="4" cols="50"  class="form-control" placeholder="{{$todo->selite}}" style="background-color: #740000; border-color: #740000; color: white;">{{$todo->selite}}</textarea>
                  @error('selite')
                      <div class="m-0 small alert alert-danger shadow-sm">
                          {{ $message }}
                      </div>   
                  @enderror
                </div>
            </div>
            <br>
            <div class="mb-3 row">
              <div class="col-md-6">
                <input class="btn btn-primary" type="submit" value="Päivitä Todo lomake">
                <input class="btn btn-primary" type="reset" value="Tyhjä lomake">
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>