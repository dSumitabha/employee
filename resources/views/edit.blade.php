<!-- resources/views/employees/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form action="{{ route('employee.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $employee->name) }}" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
