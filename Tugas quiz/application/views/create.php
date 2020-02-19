

<?php echo form_open('Cnews/create'); ?>
 <table>
 <tr>
 <td><label for="title">Nama Barang</label></td>
 <td><input type="input" name="title" size="50" /></td>
 </tr>
 <tr>
 <td><label for="text">Harga</label></td>
 <td><textarea name="text" rows="10" cols="40"></textarea></td>
 </tr>
 <tr>
 <td><label for="title">Jumlah pesanan</label></td>
 <td><input type="input" name="title" size="50" /></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="submit" value="Create " /></td>
 </tr>
 </table>
</form>