@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('inspections.create') }}" class="btn btn-primary">Add New Inspection</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Order No</th>
                <th>Project</th>
                <th>Status</th>
                <th>Inspection Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inspections as $inspection)
                <tr>
                    <td>{{ $inspection->id }}</td>
                    <td>{{ $inspection->customer_name }}</td>
                    <td>{{ $inspection->order_no }}</td>
                    <td>{{ $inspection->project }}</td>
                    <td>{{ $inspection->status }}</td>
                    <td>{{ $inspection->inspection_date }}</td>
                    <td>
                        <a href="{{ route('inspections.edit', $inspection->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('inspections.destroy', $inspection->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
