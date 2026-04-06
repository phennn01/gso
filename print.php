<?php
include 'db_connection.php';

if (!isset($_GET['id'])) {
    die("No record specified.");
}

$id = intval($_GET['id']);

$result = $conn->query("SELECT * FROM trip_tickets WHERE id = $id");

if ($result->num_rows == 0) {
    die("Record not found.");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trip Ticket - <?= htmlspecialchars($row['fullname']) ?></title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">
  <h1 class="text-2xl font-bold mb-4 text-center">📝 Trip Ticket</h1>

  <div class="grid grid-cols-2 gap-4 mb-2">
    <div class="font-medium">Full Name:</div><div><?= htmlspecialchars($row['fullname']) ?></div>
    <div class="font-medium">Department:</div><div><?= htmlspecialchars($row['department']) ?></div>
    <div class="font-medium">Destination:</div><div><?= htmlspecialchars($row['destination']) ?></div>
    <div class="font-medium">Date of Departure:</div><div><?= htmlspecialchars($row['date_departure']) ?></div>
    <div class="font-medium">Time of Departure:</div><div><?= htmlspecialchars($row['time_departure']) ?></div>
    <div class="font-medium">Arrival Time:</div><div><?= htmlspecialchars($row['time_arrival']) ?></div>
    <div class="font-medium">Passengers:</div><div><?= htmlspecialchars($row['passengers']) ?></div>
  </div>

  <div class="mb-2">
    <div class="font-medium">Purpose:</div>
    <div><?= nl2br(htmlspecialchars($row['purpose'])) ?></div>
  </div>

  <h2 class="font-bold text-lg mt-4 mb-2">⛽ Fuel Info</h2>
  <div class="grid grid-cols-3 gap-4 mb-2">
    <div>Issued: <?= htmlspecialchars($row['fuel_issued']) ?> L</div>
    <div>Purchased: <?= htmlspecialchars($row['fuel_purchased']) ?> L</div>
    <div>Balance: <?= htmlspecialchars($row['fuel_balance']) ?> L</div>
  </div>

  <h2 class="font-bold text-lg mt-4 mb-2">📏 Mileage</h2>
  <div class="grid grid-cols-3 gap-4 mb-2">
    <div>Start: <?= htmlspecialchars($row['mileage_start']) ?> km</div>
    <div>End: <?= htmlspecialchars($row['mileage_end']) ?> km</div>
    <div>Distance: <?= htmlspecialchars($row['distance']) ?> km</div>
  </div>

  <div class="mt-4">
    <div class="font-medium">Remarks:</div>
    <div><?= nl2br(htmlspecialchars($row['remarks'])) ?></div>
  </div>

  <div class="text-center mt-6">
    <button onclick="window.print()" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Print Ticket 🖨️</button>
  </div>
</div>

</body>
</html>