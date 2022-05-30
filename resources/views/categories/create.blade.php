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
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 text-end">
                    <button class="text-right btn btn-success">save</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label id="name_label" for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control" />
                    </div>
                    <div class="select">
                        <label id="status_label" for="status">Status</label>
                        <div class="input-group mb-3">
                            <select id="status" name="status" class="form-control form-select" aria-label="Status" required>
                                <option value="ACTIVE">ACTIVE</option>
                                <option value="INACTIVE">INACTIVE</option>
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
                                <option value="INCOME">Income</option>
                                <option value="EXPENSE">Expense</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
