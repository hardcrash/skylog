<x-layout>
<form action="{{ route('register') }}" method="POST">
@csrf

<h2>Register for an Account</h2>

<div class="form-row">
    <label for="name">Name:</label>
    <input type="text" name="name" size="30" value="{{ old('name') }}" required>
</div>

<div class="form-row">
    <label for="email">Email:</label>
    <input type="email" name="email" size="30" required value="{{ old('email') }}">
</div>

<div class="form-row">
    <label for="password">Password:</label>
    <input type="password" name="password" size="30"  required>
</div>

<div class="form-row">
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" size="30" required>
</div>

<div class="form-row">
    <button type="submit" class="button-primary">Log in</button>
</div>

<!-- validation errors -->
@if ($errors->any())
<ul class="px-4 py-2 bg-red-100">
@foreach ($errors->all() as $error)
<li class="my-2 text-red-500">{{ $error }}</li>
@endforeach
</ul>
@endif


</form>
</x-layout>
