<x-layout>
    <x-slot name="title">
       Edit university
    </x-slot>
    <div class='row mt-2'>
        <div class='col-12'>
        <h1>Edit  {{$university->name}}</h1>
        </div>
    </div>
    <div class='row mt-2'>
    <div class='col-7'>
        <form action="/university/{{$university->id}}/update" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label >Name</label>
        <input type="text" class='form-control' name='name' required value='{{$university->name}}'>
        <label >Address</label>
        <input type="text" class='form-control' name='address' required value='{{$university->address}}'>
        <label >World rank</label>
        <input type="number" class='form-control' name='world_rank' required min='1' value='{{$university->world_rank}}'>
        <label >Description</label>
        <textarea name="decription" class='form-control' cols="30" rows="10">
            {{$university->description}}
        </textarea>
        <button class='form-control mt-2 btn btn-primary'>Update</button>
        </form>
    </div>
    </div>
   
</x-layout>