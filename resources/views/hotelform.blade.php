<form action="/hotels/store.php" method="post">
@csrf
    <input type="text" id="name" name="Name:"><br><br>
    <input type="text" id="address1" name="Address1:"><br><br>
    <input type="text" id="address2" name="Address2:"><br><br>
    <input type="text" id="city" name="City:"><br><br>
    <input type="text" id="state" name="State:"><br><br>
    <input type="text" id="zip" name="Zip:"><br><br>
    <input type="text" id="description" name="Description:"><br><br>
    <input type="image" id="image" name="Image:" alt="image"><br><br>
    <input type="submit" value="Submit">
</form>
