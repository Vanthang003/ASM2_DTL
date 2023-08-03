<h1 style="color:aqua">Trang Number</h1>
<form action="viewform" method="POST">
   Number: <input type="text" placeholder="fấđá">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <button type="submit">In ra</button>
</form>
@if(isset($numbers))
    <h2>Dãy số:</h2>
    @for($i = 1; $i <= $numbers; $i++)
        {{ $i }}
    @endfor
@endif
