<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MED+ | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="card login-card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="fw-bold" style="color: #ea3afb;">MED+</h2>
                    <p class="text-muted">Acesso ao sistema</p>
                </div>
                <form id="loginForm">
                    <div class="mb-3">
                        <input type="email" class="form-control ios-input" placeholder="E-mail" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control ios-input" placeholder="Senha" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Lembrar-me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 ios-btn">Entrar</button>
                </form>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none" style="color: #ea3afb;">Esqueceu a senha?</a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light ios-navbar">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#" style="color: #ea3afb;">MED+</a>
        <div class="d-flex">
            <button class="btn btn-outline-primary me-2 ios-btn">Cadastro</button>
            <button class="btn btn-outline-primary me-2 ios-btn">Atendimento</button>
            <button class="btn btn-outline-primary me-2 ios-btn">Agendamento</button>
            <div class="dropdown">
                <button class="btn dropdown-toggle ios-btn" data-bs-toggle="dropdown">
                    <i class="fas fa-user-circle"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    <script src="assets/js/login.js"></script>
</body>
</html>
