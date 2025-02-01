@extends('layouts.app')

@section('content')
<h1>Edit Profile</h1>

@if (session('status') === 'profile-updated')
<div class="alert alert-success">
    Profile successfully updated.
</div>
@endif

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
    </div>

    <button type="submit">Update Profile</button>
</form>

<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')

    <div>
        <label for="password">Current Password</label>
        <input type="password" name="password" required>
    </div>

    <button type="submit">Delete Account</button>
</form>
@endsection