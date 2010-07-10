<div>
	<p><img src="<?php print KWP_APP_URL.'/public/images/pizza.jpg' ?>" /> <br/></p>
    <h2>Step 1 - Select Pizza Toppings</h2>
    <form name='order' action="<?php print KWP_CONTROLLER_URL.'/step2' ?>" method="POST">
        <p>
            <label>Item 1</label><br />
            <input name='order[item1]' size="70" />
        </p>
        <p>
            <label>Item 2</label><br />
            <input name='order[item2]' size="70"/>
        </p>
        <p>
            <label>Special Instructions</label><br />
            <textarea name='order[instructions]' rows="8" cols="70"></textarea>
        </p>
        <p>
            <input type="submit" value="Next" />
        </p>
    </form>
</div>
