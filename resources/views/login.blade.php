<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css">
    <style>
        body { display:flex; justify-content:center; align-items:center; height:100vh; font-family:sans-serif;}
        form { width:320px; padding:2rem; border:1px solid #ddd; border-radius:8px;}
        label{display:block;margin-bottom:8px;}
        input{width:100%;padding:.5rem;margin-bottom:1rem;}
        button{width:100%;padding:.75rem;cursor:pointer;}
        .error{color:#c00;font-size:.9rem;margin-bottom:1rem;}
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <h2>Entrar</h2>

        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label>E-mail
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        </label>

        <label>Senha
            <input type="password" name="password" required>
        </label>

        <label style="display:flex;align-items:center;gap:.5rem;">
            <input type="checkbox" name="remember"> Manter conectado
        </label>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
