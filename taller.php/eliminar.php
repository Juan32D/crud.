
<form action="eliminar.php" method="post">
    <!-- Aquí pasamos el ID del usuario que se quiere eliminar -->
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>"> <!-- Reemplaza esto con el ID dinámico del usuario -->
    
    <button type="submit">Eliminar Usuario</button>
</form>
