<div>
    <h2>My Pizza Shop! Side Items</h2>
    <form name='order' action="<?= $H->link_to('summary') ?>" method="POST">
        <p>
            <label>Item 1</label><br />
            <input name='order[side1]' size="70" />
        </p>
        <p>
            <label>Item 2</label><br />
            <input name='order[side2]' size="70"/>
        </p>
        <p>
            <input type="submit" value="Place Order" />
        </p>
    </form>
</div>
