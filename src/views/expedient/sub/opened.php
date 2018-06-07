<form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Estado</td>
            <td><input type="text" name="name" value="<?php echo $expedient->status;?>"></td>
        </tr>
        <tr>
            <td>Encargado</td>
            <td><input type="text" name="age" value="<?php echo $expedient->in_charge;?>"></td>
        </tr>
        <tr>
            <td>Zona</td>
            <td><input type="text" name="email" value="<?php echo $expedient->zone;?>"></td>
        </tr>
        <tr>
            <td>Tareas</td>
            <td><input type="text" name="email" value="<?php echo $expedient->tasks;?>"></td>
        </tr>
        <tr>
            <td>Herramientas</td>
            <td><input type="text" name="email" value="<?php echo $expedient->tools;?>"></td>
        </tr>
    </table>
</form>
