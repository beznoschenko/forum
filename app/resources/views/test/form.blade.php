<form action ="" method="POST">
{{ csrf_field() }}
<input type='number' name="numb" value={{old('numb')}}>
<br>
<input type="submit">

</form>
