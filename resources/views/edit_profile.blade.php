@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-8">
        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">EDIT PROFILE</h5>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter Student ID" required value="{{ $user->student_id }}">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role">
                        @if ($user->role == 'admin')
                            <option value="admin" selected>Admin</option>
                            <option value="user">User</option>
                        @elseif (($user->role == 'user'))
                          <option value="admin">Admin</option>
                          <option value="user" selected>User</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-block bg-orange" style="background-color: #ff9400; color:white;">Register</button>
            </div>
        </form>
      </div>
  </div>
@endsection
