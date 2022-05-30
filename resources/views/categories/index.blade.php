@extends('layouts.app')


@section('content')
    <div class="container">
        <h3>Categories</h3>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-white">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Created By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td scope="row">{{ $category->name }}</td>
                                <td>{{ $category->type }}</td>
                                <td>{{ $category->status }}</td>
                                <td>
                                    @if ($category->created_by !== null)
                                        {{ $category->user->name }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('categories.edit', $category) }}"
                                        class="btn btn-warning btn-sm">edit</a>

                                    <form action="{{ route('categories.destroy', $category) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm d-inline">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No data found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
