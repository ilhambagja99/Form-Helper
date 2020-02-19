<h2><?php echo $title; ?></h2>
<br>
<button onclick="location.href='<?php echo base_url('Cnews/create') ?>'  " > Create </button>
<table border='1' cellpadding='4'>
 <tr>
 <td><strong>Nama Barang</strong></td>
 <td><strong>Harga</strong></td>
 <td><strong>Action</strong></td>
 </tr>
<?php foreach ($news as $news_item): ?>
	<tr>
 <td><?php echo $news_item['title']; ?></td>
 <td><?php echo $news_item['text']; ?></td>
 <td>
 <a href="<?php echo site_url('Cnews/view/'.$news_item['slug']); ?>">View</a> |
 <a href="<?php echo site_url('Cnews/edit/'.$news_item['id']); ?>">Edit</a> |
 <a href="<?php echo site_url('Cnews/delete/'.$news_item['id']); ?>" onClick="return
confirm('Are you sure you want to delete?')">Delete</a>
 </td>
 </tr>
<?php endforeach; ?>
</table>