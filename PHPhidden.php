<!DOCTYPE html>
<html>
    <body>
        <h1> A Hidden field </h1>
        <form action="/action_page.php">
            <label for="fname">First Name : </label>
            <input type="text" id="fname" name="fname"> <br><br>
<input type="hidden" id="custId" name="cusId" Value="2487">
<input type="submit" value="submit">
</form>
<p><strong>Note : </strong> The hidden is not shown to the user , but the data is sent when the form is submitted </p>
</body>
</html>