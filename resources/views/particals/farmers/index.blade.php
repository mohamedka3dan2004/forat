@extends('dashboard')

@section('content')
<div class="container-fluid">
    <div class="mb-4 card">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Farmers Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Account</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Account</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($farmers as $farmer)
                    <tr>
                        <td>{{ $farmer->id }}</td>
                        <td>{{ $farmer->name }}</td>
                        <td>{{ $farmer->phone }}</td>
                        <td>{{ $farmer->account }}</td>
                        <td>{{ $farmer->created_at }}</td>
                        <td>{{ $farmer->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
