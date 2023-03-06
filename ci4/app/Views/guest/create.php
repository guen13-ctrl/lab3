
<!DOCTYPE html>
<html>
<head>
<title>Dawnfairy's Guest Form </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

</head>
<body class="w3-black">

<p style="float:right;font-size:18px;cursor:help;padding-right:30px"> 
	<a a class="ex3" href="http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/index">Go back to home</a></p>

<h2>Fill up the form</h2>

<hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F;width:350px;paddingt-top:0px">

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name: </label>
    <input style="margin-bottom:10px" type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email: </label>
    <input style="margin-bottom:10px" type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website: </label>
    <input style="margin-bottom:10px" type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment">Feedback: </label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label for="gender">Gender: </label>
    <input style="margin-bottom:10px;margin-top:10px" type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>

    <input style="margin-top:40px;margin-bottom:10px" type="submit" name="submit" value="Submit Feedback">
</form>

<hr style="height:2px;border-width:0;color:gray;background-color:#0F0F0F;width:200px;margin-top:15px">
<p><a href="http://apcwebprog.csf.ph/~gbalimodian/lab3/ci4/public/guest">View Guest List</a></p>


</body>	
</html>



