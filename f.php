<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="process.php" method="post">

    ������� ��� ��������: <input type="text" name="FName"/><br>
    ��� ��������: <input type="text" name="FDate"/><br>
    <br>
    �������� �������:
    PHP<input type="checkbox" name="formDoor[]" value="PHP" />
    SQL <input type="checkbox" name="formDoor[]" value="SQL" />
    JS <input type="checkbox" name="formDoor[]" value="JS" />
    HTML<input type="checkbox" name="formDoor[]" value="HTML" />
    CSS <input type="checkbox" name="formDoor[]" value="CSS" />
    <br>
    Message:   <textarea name="Message" cols="30" rows="5"></textarea>

    <input type="submit" name="submit" value="Submit Data"/>

</form>

</body>
</html>