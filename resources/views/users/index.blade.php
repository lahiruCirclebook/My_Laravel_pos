@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Add Users</h4>
                            <a href="" style="float: right" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#userAddModal"><i class="fa fa-plus"></i> Add Users</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($data))
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->contact }}</td>
                                                <td>{{ $item->isAdmin }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Search user</h4>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add user model --}}
    <div id="userAddModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 35%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel" style=" font-weight: bold;">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('addUser') }}" method="post" enctype="multipart/form-data" id="demo">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Contact Number</label>
                                    <input type="number" class="form-control"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        maxlength="10" id="contact" name="contact" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Role</label>
                                    <select name="isAdmin" id="isAdmin" class="form-select">
                                        <option value="Admin">Admin</option>
                                        <option value="Cashier">Cashier</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                        required>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save
                            </button>
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
