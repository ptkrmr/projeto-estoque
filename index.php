<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Estoque Júlia | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
      :root {
        --cafe-escuro: #6F4E37;
        --cafe-medio: #A67B5B;
        --bege-claro: #ECB176;
        --creme: #FED8B1;
        --fundo: #FFF8E1;
      }

      body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--fundo);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        overflow: hidden;
        position: relative;
      }

      /* Decoração de Gatinhos ao Fundo */
      .cat-bg {
        position: absolute;
        font-size: 2rem;
        color: rgba(111, 78, 55, 0.1);
        z-index: -1;
        user-select: none;
      }

      /* Card de Login */
      .login-card {
        background: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(111, 78, 55, 0.1);
        width: 100%;
        max-width: 400px;
        border: 2px solid var(--creme);
      }

      .login-card h2 {
        color: var(--cafe-escuro);
        font-weight: 600;
        text-align: center;
        margin-bottom: 1.5rem;
      }

      .form-label {
        color: var(--cafe-medio);
        font-weight: 500;
      }

      .form-control {
        border-radius: 10px;
        border: 1px solid var(--bege-claro);
        padding: 0.7rem;
      }

      .form-control:focus {
        border-color: var(--cafe-medio);
        box-shadow: 0 0 0 0.25rem rgba(166, 123, 91, 0.25);
      }

      .btn-login {
        background-color: var(--cafe-escuro);
        border: none;
        border-radius: 10px;
        padding: 0.8rem;
        font-weight: 600;
        color: white;
        transition: 0.3s;
        width: 100%;
        margin-top: 1rem;
      }

      .btn-login:hover {
        background-color: var(--cafe-medio);
        transform: translateY(-2px);
      }

      .cat-icon-header {
        font-size: 3rem;
        color: var(--cafe-medio);
        display: block;
        text-align: center;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>

    <i class="fas fa-cat cat-bg" style="top: 10%; left: 10%; transform: rotate(-15deg);"></i>
    <i class="fas fa-paw cat-bg" style="top: 20%; right: 15%; transform: rotate(20deg);"></i>
    <i class="fas fa-cat cat-bg" style="bottom: 15%; left: 5%; transform: rotate(10deg);"></i>
    <i class="fas fa-paw cat-bg" style="bottom: 10%; right: 10%; transform: rotate(-25deg);"></i>

    <div class="login-card">
      <i class="fas fa-cat cat-icon-header"></i>
      <h2>Estoque da Júlia</h2>
      
      <form method="POST" action="Controllers/ControllerLogin.php">
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail" placeholder="seu@email.com" required>
        </div>
        
        <div class="mb-4">
          <label for="inputPassword2" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control" id="inputPassword2" placeholder="••••••••" required>
        </div>
        
        <button type="submit" class="btn btn-login">Entrar no Sistema</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
