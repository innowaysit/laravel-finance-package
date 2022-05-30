@extends('layouts.app')


@section('content')
    <div class="container bg-white p-4">
        <div class="row">
            <div class="col-12 h4">
                Create new category
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 text-end">
                    <button class="text-right btn btn-success">save</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label id="name_label" for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control"
                            value="{{ old('name', $category->name) }}" />
                    </div>
                    <div class="select">
                        <label id="status_label" for="status">Status</label>
                        <div class="input-group mb-3">
                            <select id="status" name="status" class="form-control form-select" aria-label="Status" required>
                                <option value="ACTIVE" @if ($category->status == 'ACTIVE') selected @endif>ACTIVE</option>
                                <option value="INACTIVE" @if ($category->status == 'INACTIVE') selected @endif>INACTIVE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="select">
                        <label id="type_label" for="type">type</label>
                        <div class="input-group mb-3">
                            <select id="type" name="type" class="form-control form-select" aria-label="type" required>
                                <option value=""></option>
                                <option value="INCOME" @if ($category->type == 'INCOME') selected @endif>Income</option>
                                <option value="EXPENSE" @if ($category->type == 'EXPENSE') selected @endif>Expense</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
