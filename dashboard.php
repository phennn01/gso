<?php
  // Check if function exists to prevent fatal errors
  if (function_exists('get_total_request') && isset($con)) {
      $total = get_total_request($con);
  } else {
      $total = 0; // Fallback value
  }
?>

<div class="container mx-auto p-6">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 flex flex-col items-center justify-center text-center">
      <div class="bg-blue-100 p-3 rounded-full mb-3">
        <span class="text-2xl" role="img" aria-label="clipboard">📋</span>
      </div>
      <p class="text-gray-500 font-bold uppercase text-sm tracking-widest">Total Requests</p>
      
      <h2 class="text-5xl font-black text-blue-800 mt-2">
        <?php echo htmlspecialchars($total); ?>
      </h2>
      
      <div class="mt-4 h-1.5 w-20 bg-blue-600 rounded-full"></div>
    </div>
  </div>
</div>