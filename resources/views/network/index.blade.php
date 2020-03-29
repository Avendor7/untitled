@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Untitled Network Simulator</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('network.create') }}"> Create New network</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($networks as $network)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $network->name }}</td>
            <td>{{ $network->detail }}</td>
            <td>
                <form action="{{ route('network.destroy',$network->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('network.show',$network->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('network.edit',$network->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection
