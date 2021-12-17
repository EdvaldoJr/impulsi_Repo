<?php
    // 1)Conexão
    include_once("system/connect.php");
    
    $sqlAreas = "SELECT * FROM tbAreas";
    $areas = mysqli_query($conn, $sqlAreas);
?>
    
<div class="container">
    <form  action="php/CRUD/discPorArea.php" method="get">
        <div class="my-3">
            <label for="area">Área do conhecimento:</label>
            <div class="input-group">
                <select  id="area" class="form-control d-block " name="f_area_id">
                    <?php
                        $sql = "SELECT * FROM tbAreas";
                        $areas = mysqli_query($conn, $sqlAreas);
                        while($row_result = mysqli_fetch_assoc($areas))
                    {?>
                        <option value="<?php echo $row_result['area_id'];?>"> <?php echo $row_result['area_nome'];?> </option>
                        <?php } 
                    ?>
                </select>    
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </div>
    </form>
</div>

    