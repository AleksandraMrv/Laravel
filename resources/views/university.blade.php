<x-layout>
  <x-slot name="title">
    University
  </x-slot>
  <div class='row mt-2'>
    <div class='col-6'>
      <h1>{{$university->name}}</h1>
    </div>
    <div class="col-3">
      <a href="/university/{{$university->id}}/edit">
        <button class="btn btn-secondary mt-2">Edit this university</button>
      </a>

    </div>
    <div class="col-3">
      <form action="/university/{{$university->id}}/delete" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-danger mt-2">Delete this university</button>
      </form>
    </div>
  </div>


  <div class="row mt-2">
    <div class="col-5">
      <div>
        <label><b>Address: </b></label>
        <span>{{$university->address}}</span>
      </div>
      <div>
        <label><b>World rank: </b></label>
        <span>{{$university->world_rank}}</span>
      </div>
      <div>
        <label><b>Description:</b></label>
        <p>{{$university->description}}</p>
      </div>
    </div>
    <div class='col-7'>
      <table class="table table-dark table-striped">
        <h3>Faculties</h3>
        <thead>
          <tr>

            <th>Name</th>
            <th>Address</th>
            <th>Scientific field</th>
          </tr>
        </thead>
        <tbody>
          @foreach($university->faculties as $faculty)
          <tr>

            <td>{{$faculty->name}}</td>
            <td>{{$faculty->address}}</td>
            <td>{{$faculty->scientific_field}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>