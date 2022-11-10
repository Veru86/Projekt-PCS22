<?
$predmet = $_POST['predmet'];
$email = $_POST['email'];
$spam = $_POST['spam'];
$zprava = $_POST['zprava'];

if ($predmet!="" and $email!="" and $zprava!="" and $spam=="2")
{
Mail("realitykopicova@seznam.cz", $predmet, $zprava, "From: " . $email);
echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
}
else
{
echo "<p>Váš e-mail se <strong>nepodařilo odeslat</strong> pravděpodobně jste nevyplnili všechny údaje, nebo nevíte kolik je 1 + 1.</p>";
}
