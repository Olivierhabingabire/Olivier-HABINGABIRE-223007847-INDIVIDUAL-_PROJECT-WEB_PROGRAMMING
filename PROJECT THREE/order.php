<?php include 'connect.php'; ?>

<form method="POST">
<input type="text" name="fullname" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>

<select name="menu" required>
<option value="">-- Select Food --</option>

<option>Fish - $10</option>
<option>Drink - $5</option>
<option>Fresh Juice - $7</option>
<option>Burger - $8</option>
<option>Margherita pizza with tomato - $10</option>
<option>Pasta in red sauces - $12</option>
<option>Grilled chicken steak - $18</option>
<option>Fish and chips with crispy batter - $20</option>
<option>Biryani (veg/chicken/mutton) - $16</option>
<option>Dal makhani - $30</option>
<option>Butter chicken - $40</option>
<option>Paneer butter masala - $29</option>
<option>Noodles (Hakka/Singapore) - $8</option>
<option>Steak with peppercorn sauce - $12</option>

</select>

<textarea name="address" placeholder="Address"></textarea>
<input type="date" name="date">

<button name="submit">Order</button>
</form>

<?php
if(isset($_POST['submit'])){
$conn->query("INSERT INTO orders VALUES('', '$_POST[fullname]', '$_POST[email]', '$_POST[phone]', '$_POST[menu]', '$_POST[address]', '$_POST[date]')");
echo "Order placed!";
}
?>