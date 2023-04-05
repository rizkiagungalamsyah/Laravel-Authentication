@extends('layouts.app')
@section('title', 'HomePage')
@section('content')
    <h1>Edit Profile</h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @if ($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" class="img-fluid">
                @else
                    <img src="https://cdn1.iconfinder.com/data/icons/mix-color-3/502/Untitled-7-1024.png" class="img-fluid">
                @endif
            </div>
            <div class="col">
                <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" disabled name="email"
                            value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $user->name }}">
                        @error('name')
                            <div class="nameHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Foto Profil</label>
                        <input type="file" class="form-control" id="avatar" name="avatar">
                        @error('avatar')
                            <div class="avatarHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
