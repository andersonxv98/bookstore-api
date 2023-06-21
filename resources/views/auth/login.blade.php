<!DOCTYPE html>
<html>
<head>
    <title>Login in</title>
</head>
<body>
    <h2>Login in</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
