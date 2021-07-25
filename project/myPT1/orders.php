<!DOCTYPE html>
<html>
<head>
  <title>Camerasque Store : Orders</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="orders.php" method="post">
      Order ID
      <input name="oid" type="text" disabled> <br>
      Order Date
      <input name="orderdate" type="date" disabled> <br>
      Staff
      <select name="sid">
        <option value="S001">Saiful</option>
        <option value="S002">Hakim</option>
        <option value="S003">Siti</option>
      </select> <br>
      Customer
      <select name="cid">
        <option value="C001">Izzudin</option>
        <option value="C002">Nina</option>
        <option value="C003">Afif</option>
      </select> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order ID</td>
        <td>Order Date</td>
        <td>Staff ID</td>
        <td>Customer ID</td>
        <td></td>
      </tr>
      <tr>
        <td>O5603f03a9349f0.39900158</td>
        <td>09-09-2015</td>
        <td>Saiful</td>
        <td>Izzudin</td>
        <td>
          <a href="orders_details.php">Details</a>
          <a href="orders.php">Edit</a>
          <a href="orders.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>