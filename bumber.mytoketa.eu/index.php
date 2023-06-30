<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include('head.html') ?>

<!-- BODY -->
<body>

<!-- HEADER -->
<?php include('header.html'); ?>

<h1>Bienvenue sur Bumber</h1>

<div class='contenu'>

<form method="post" action="" style="margin-top:5%;">
    <p style="font-weight: bold;">Confirmer votre identité :</p>
    <table>
    <tr><td><label for="identifiant">identifiant : </label></td>
    <td><input type="text" name="identifiant" id="identifiant" maxlength=16 required/></td></tr>

    <tr><td><label for="pw">mot de passe : </label></td>
    <td><input type="password" name="pw" id="pw" maxlength=16 required/></td></tr>

    <tr><td><label for="code_telephone">code reçu par téléphone : </label></td>
    <td><input type="text" name="code_telephone" id="code_telephone" maxlength=6 required/></td></tr>

    </table>
</form>

<input type="submit" value="Valider"/>

</div>

<?php
$output = shell_exec('python scriptPY.py');
echo "<p>".$output."</p>";
?>

</body>
</html>