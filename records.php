<h2 class="text-2xl font-bold mb-6">📁 Records</h2>
<a href="print.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">🖨️ Print</a>
<?php
include 'db_connection.php';
$result = $con->query("SELECT * FROM trip_tickets");
?>

<table class="min-w-full bg-white rounded-xl shadow border-collapse border border-gray-300">
<thead>
<tr class="bg-gray-200">
  <th class="border border-gray-300 p-2">Name</th>
  <th class="border border-gray-300 p-2">Destination</th>
  <th class="border border-gray-300 p-2">Date</th>
  <th class="border border-gray-300 p-2">Action</th>
</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc()): ?>
<tr class="text-center border-t">
  <td class="border border-gray-300 p-2"><?= $row['fullname'] ?></td>
  <td class="border border-gray-300 p-2"><?= $row['destination'] ?></td>
  <td class="border border-gray-300 p-2"><?= $row['date_departure'] ?></td>
  <td class="border border-gray-300 p-2">
    <a href="print.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">🖨️ Print</a>
  </td>
</tr>
<?php endwhile; ?>
</tbody>
</table>