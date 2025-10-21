<x-layout>
<form action="{{ route('login') }}" method="POST">
@csrf

<h2>Log In to Your Account</h2>

<div class="form-row">
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
</div>

<div class="form-row">
    <label for="password">Password:</label>
    <input type="password" name="password" required>
</div>

<button type="submit" class="button-primary">Log in</button>

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
