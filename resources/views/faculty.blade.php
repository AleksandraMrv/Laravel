<x-layout>
    <x-slot name="title">
        Faculties
    </x-slot>

    <div class='row mt-2'>
        <div class='col-12'>
            <table class='table display table-striped table-dark'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Scientific field</th>
                        <th>University</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faculties as $faculty)
                    <tr>
                        <td>{{$faculty->id}}</td>
                        <td>{{$faculty->name}}</td>
                        <td>{{$faculty->address}}</td>
                        <td>{{$faculty->scientific_field}}</td>
                        <td>{{$faculty->university->name}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
    </div>
</x-layout>