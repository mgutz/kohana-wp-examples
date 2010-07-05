<div>
    <h2>My Pizza Shop! Summary</h2>
	<p><b>Thank you! Here is a summary of your order.</b></p>
	<h4>Pizza</h4>
    <table>
        <tr><th>Items</th><th>Description</th></tr>
        <tr><td>#1</td><td><?= $order['item1'] ?></td></tr>
        <tr><td>#2</td><td><?= $order['item2'] ?></td></tr>
        <tr><td><b>Special Instructions</b></td><td><?= $order['instructions'] ?></td></tr>
    </table>
	<h4>Side Items</h4>
    <table>
        <tr><th>Items</th><th>Description</th></tr>
        <tr><td>#1</td><td><?= $order['side1'] ?></td></tr>
        <tr><td>#2</td><td><?= $order['side2'] ?></td></tr>
    </table>
	
	<p><b>Total Cost:</b> $9.99</p>

</div>