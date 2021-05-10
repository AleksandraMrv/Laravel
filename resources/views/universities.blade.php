<x-layout>
    <x-slot name="title">
        Universities
    </x-slot>

    <div class='row mt-2'>
        <div class='col-12'>
            <table class='table display table-dark'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>World rank</th>
                        <th>Number of faculties</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($universities as $university)
                    <tr>
                        <td>{{$university->id}}</td>
                        <td>{{$university->name}}</td>
                        <td>{{$university->address}}</td>
                        <td>{{$university->world_rank}}</td>
                        <td>{{$university->faculties->count()}}</td>
                        <td>
                        <a href="/university/{{$university->id}}/show">
                            <button class='btn btn-success form-control'>
                            Details
                            </button>
                        </a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
</x-layout>