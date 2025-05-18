<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cameriere - Perfil</title>
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="menu">
        <a href="#">Home</a>
        <a href="#">Perfil</a>
        <a href="#">Came</a>
        <a href="#">Productos</a>
        <a href="#">Facturas</a>
        <a href="#" class="logout">Salir</a>
      </div>
    </aside>

    <main class="content">
      <header class="header">
        <h1 class="title">Cameriere</h1>
      </header>

      <div class="profile">
        <img src="img/Foto perfil.webp" alt="Foto de perfil" class="profile-pic">
        <p>Foto de perfil</p>
      </div>

      <form class="form">
        <label>Nombre Admin
          <input type="text" placeholder="Nombre Admin">
        </label>
        <label>Nombre restaurante
          <select>
            <option>Selecciona restaurante</option>
          </select>
        </label>
        <label>Contraseña
          <input type="password" placeholder="Contraseña">
        </label>
        <label>Correo
          <input type="email" placeholder="Correo">
        </label>
        <button type="submit" class="save-button">Guardar</button>
      </form>
    </main>
  </div>
</body>
</html>
