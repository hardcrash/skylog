<x-layout>
<form action="{{ route('register') }}" method="POST">
@csrf

<h2>Register for an Account</h2>

<label for="name">Name:</label></br>
<input
type="text"
name="name"
value="{{ old('name') }}"
required
></br>

<label for="email">Email:</label></br>
<input
type="email"
name="email"
required
value="{{ old('email') }}"
></br>

<label for="password">Password:</label></br>
<input
type="password"
name="password"
required
></br>

<label for="password_confirmation">Confirm Password:</label></br>
<input
type="password"
name="password_confirmation"
required
></br>

<button type="submit" class="btn mt-4">Register</button>

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
