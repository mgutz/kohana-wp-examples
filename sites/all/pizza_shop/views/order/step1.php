<div>
	<p><img src="<?php print $kwp->link_to('~/public/images/pizza.jpg'); ?>" /> <br/></p>
    <h2>Pizza Ingredients</h2>
    <form name='order' action="<?php print $kwp->link_to('step2'); ?>" method="POST">
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
