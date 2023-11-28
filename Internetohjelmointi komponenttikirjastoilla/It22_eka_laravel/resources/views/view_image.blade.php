<x-layout>
    <div class="container">
        <h2 style="color: white;">Kaikki kuvat</h2><hr>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Image id</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            @foreach($imageData as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>
                        <img src="{{ url('public/Image/'.$data->image) }}" style="height: 100px; width: 150px;">
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</x-layout>