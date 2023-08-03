<h1> add Categories</h1>
<form action="<?php echo route('categories.add')?>" method="post">
    <input type="text" name="CategoryName">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <button type="submit">Send</button>
</form>
