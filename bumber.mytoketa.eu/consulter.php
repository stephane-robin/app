<!DOCTYPE HTML>
<html>

<?php include('fonctionsPHP.php'); ?>

<!-- HEAD -->
<?php include('head.html') ?>

<!-- BODY -->
<body>

<!-- HEADER -->
<?php include('header.html'); ?>

<div class='contenu'>

<h1>Consulter</h1>



<!-- SECURITE -->

<form method="post" action="" style="margin-top:5%;">
    <p style="font-weight: bold;">Bien vouloir choisir la catégorie :<p/>
    <input type="radio" name="categorie" id="service"/> <label for="service">
    service </label> <br/>
    <input type="radio" name="categorie" id="administration"/> <label for="administration">
    administration </label> <br/>
    <input type="radio" name="categorie" id="travail"/> <label for="travail">
    travail </label> <br/>
    <input type="radio" name="categorie" id="commerce"/> <label for="commerce">
    commerce </label>
</form>


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
$output = shell_exec('python consulter.py');
echo $output;
?>

</body>
</html>