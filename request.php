<?php
include 'db_connection.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO trip_tickets 
    (fullname, department, destination, date_departure, time_departure, time_arrival, passengers, purpose, fuel_issued, fuel_purchased, fuel_balance, mileage_start, mileage_end, distance, remarks)
    VALUES (
        '{$_POST['fullname']}',
        '{$_POST['department']}',
        '{$_POST['destination']}',
        '{$_POST['date_departure']}',
        '{$_POST['time_departure']}',
        '{$_POST['time_arrival']}',
        '{$_POST['passengers']}',
        '{$_POST['purpose']}',
        '{$_POST['fuel_issued']}',
        '{$_POST['fuel_purchased']}',
        '{$_POST['fuel_balance']}',
        '{$_POST['mileage_start']}',
        '{$_POST['mileage_end']}',
        '{$_POST['distance']}',
        '{$_POST['remarks']}'
    )";

    if ($con->query($sql)) {
        echo '<div class="bg-green-100 p-4 rounded mb-4">✅ Request submitted successfully!</div>';
    } else {
        echo '<div class="bg-red-100 p-4 rounded mb-4">❌ Error: '.$con->error.'</div>';
    }
}
?>

<h2 class="text-2xl font-bold mb-6">📋 Vehicle Request Form</h2>

<form method="POST" class="bg-white p-6 rounded-xl shadow max-w-4xl mx-auto space-y-6">

  <!-- Personal Info -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
      <label class="block font-medium mb-1">Full Name</label>
      <input type="text" name="fullname" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
    <div>
      <label class="block font-medium mb-1">Department</label>
      <input type="text" name="department" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
  </div>

  <div>
    <label class="block font-medium mb-1">Destination</label>
    <input type="text" name="destination" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
  </div>

  <!-- Date & Time -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div>
      <label class="block font-medium mb-1">Date of Departure</label>
      <input type="date" name="date_departure" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
    <div>
      <label class="block font-medium mb-1">Time of Departure</label>
      <input type="time" name="time_departure" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
    <div>
      <label class="block font-medium mb-1">Arrival Time</label>
      <input type="time" name="time_arrival" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
    </div>
  </div>

  <div>
    <label class="block font-medium mb-1">Number of Passengers</label>
    <input type="number" name="passengers" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
  </div>

  <!-- Purpose -->
  <div>
    <label class="block font-medium mb-1">Purpose of Trip</label>
    <textarea name="purpose" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" rows="3" required></textarea>
  </div>

  <!-- Fuel Information -->
  <h3 class="font-bold text-lg mb-2 mt-4">⛽ Fuel Information</h3>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div>
      <label class="block font-medium mb-1">Fuel Issued (L)</label>
      <input type="number" step="0.1" name="fuel_issued" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
      <label class="block font-medium mb-1">Fuel Purchased (L)</label>
      <input type="number" step="0.1" name="fuel_purchased" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
      <label class="block font-medium mb-1">Fuel Balance (L)</label>
      <input type="number" step="0.1" name="fuel_balance" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
  </div>

  <!-- Mileage -->
  <h3 class="font-bold text-lg mb-2 mt-4">📏 Mileage</h3>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div>
      <label class="block font-medium mb-1">Start Mileage (km)</label>
      <input type="number" name="mileage_start" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
      <label class="block font-medium mb-1">End Mileage (km)</label>
      <input type="number" name="mileage_end" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
      <label class="block font-medium mb-1">Distance Travelled (km)</label>
      <input type="number" name="distance" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
  </div>

  <!-- Remarks -->
  <div>
    <label class="block font-medium mb-1">Remarks</label>
    <textarea name="remarks" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" rows="2"></textarea>
  </div>

  <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Submit Request</button>

</form>