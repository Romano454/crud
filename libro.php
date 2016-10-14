<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <h1 align="center">Editar Libro</h1>
    <div align="center">
      <form action="" method="post">
        Titulo: <input type="text" name="titulo"><br><br>
        Autor/res: <input type="text" name="autor"><br><br>
        Editorial: <input type="text" name="editorial"><br><br>
        fecha: <input type="date" name="fecha"><br><br>
        Categoria:
        <select name="categoria">
          <option value="a">nuevo</option>
          <option value="b">usado</option>
          <option value="c">antiguo</option>
        </select>
        Precio: <input type="text" name="precio"><br><br>
        Resumen: <textarea name="resumen" rows="3" cols="20"></textarea><br><br>
        <input type="submit" name="enviar">
      </form>
    </div>
  </body>
</html>
