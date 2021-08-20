<?php 

include 'layout/cabecalho.php';
// $empresa = $_GET['codigo'];
?>

<div class="formulario-curriculo">
    <h3>Envie seu currículo com foto:</h3>
    <form action="enviar_curriculo.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome"><br />
        <label>E-mail:</label>
        <input type="email" name="email"><br />
        <label>Departamento:</label>
        <select name="departamento">
<?php
    $empresa_departamento = include 'dados/empresa_departamento.php';
    $departamentos = $empresa_departamento [$empresa]['departamentos'];
    foreach ($departamentos as $indice => $departamento) {
?>
                <option value="<?php echo $indice?>"><?php echo ucfirst ($indice)?></option>
<?php                
    } 
?>           
        </select><br />
        <label>Foto:</label>
        <input type="file" name="foto"><br />
        <input type="hidden" name="empresa" value="<?php echo $empresa?>" />
        <input type="submit" value="enviar" />
    </form>
</div>

<?php 
    include 'layout/rodape.php';
?>

