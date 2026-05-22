<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Estoque Prof</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <style>
      body {
        background: #f7f7f7;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .login-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 400px;
      }
      .login-container h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 1.75rem;
        color: #333;
      }
      .form-label {
        font-weight: bold;
        color: #555;
      }
      .form-control {
        border-radius: 8px;
        padding: 12px;
        font-size: 1rem;
        border: 1px solid #ddd;
        margin-bottom: 15px;
        transition: border-color 0.3s ease;
      }
      .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 1.1rem;
        padding: 12px 20px;
        border-radius: 8px;
        width: 100%;
      }
      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
      }
      .text-center {
        margin-top: 15px;
      }
      .text-center a {
        text-decoration: none;
        color: #007bff;
        font-size: 0.9rem;
      }
      .text-center a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <h1>Bem-vindo ao App Estoque Professor</h1>

      <form method="POST" action="Controllers/ControllerLogin.php">
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" name="email" required class="form-control" id="inputEmail" placeholder="Digite seu email">
        </div>
        
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Senha</label>
          <input type="password" name="senha" required class="form-control" id="inputPassword" placeholder="Digite sua senha">
        </div>
        
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>

      <div class="text-center">
        <a href="#">Esqueceu a senha?</a>
      </div>
    </div>
  </body>
</html>