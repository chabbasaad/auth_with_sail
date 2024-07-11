<form method="POST" action{{route('register')}}>
@csrf
<div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{old('name')}}" >
</div>
<div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{old('email')}}" >
</div>
<div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
</div>
<div>
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>
</div>

<div>
    <label for="email">age</label>
    <input type="text" name="age" id="age" value="{{old('age')}}" >
</div>

<div>
    <button type="submit">Register</button>
</div>
</form>
