<?php
$page = $_GET['page'] ?? 'dashboard';
?>

<?php  
session_start(); 
     include("db_connection.php");     include("functions.php"); 
 
    $user_data = check_login($con); 
 
?> 
 



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vehicle Request Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <div class="w-64 bg-blue-800 text-white p-5 flex-shrink-0">

    <!-- Logo -->
    <div class="flex items-center gap-2 mb-8">
      <img src="logo/isu_logo.png" class="w-8 h-8 rounded-full">
      <span class="text-xl">🚗</span>
      <h1 class="text-lg font-bold">Vehicle System</h1>
    </div>
    

    <!-- Menu -->
    <nav class="space-y-3">
      <a href="/gso/dashboard"  class="block w-full text-left px-4 py-2 rounded<?= $page=='dashboard' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">🏠 Dashboard</a>
      <a href="/gso/request"  class="block w-full text-left px-4 py-2 rounded<?= $page=='request' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">📋 Requests</a>
      <a href="/gso/records"  class="block w-full text-left px-4 py-2 roundedclass="<?= $page=='records' ? 'bg-blue-600' : 'hover:bg-blue-600' ?>">📁 Records</a>

    </nav>

    

    
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-6">

    <div class="flex justify-end items-center gap-4 mb-4">

    <!-- Dashboard Link -->
    <a href="/gso/dashboard" 
       class="flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow transition">
        
        <!-- House Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5-8h-2m-12 0H3" />
        </svg>

        Dashboard
    </a>

    <!-- User Info -->
    <div class="flex items-center gap-2 bg-white px-3 py-2 rounded-lg shadow">
        
        <!-- User Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5 text-gray-600" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M5.121 17.804A9 9 0 1118.879 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>

        <span class="text-gray-700 font-medium">
            <?php echo $user_data['user_name']; ?>
        </span>
    </div>

    <!-- Logout -->
    <a href="log-out.php" 
       class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow transition">
        
        <!-- Logout Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M17 16l4-4m0 0l-4-4m4 4H7" />
        </svg>

        Logout
    </a>

</div>

    <?php
    // Include page content
    if ($page == 'dashboard') {
        include 'dashboard.php';
    } elseif ($page == 'request') {
        include 'request.php';
    } elseif ($page == 'records') {
        include 'records.php';
    } else {
        echo "<h2>Page not found</h2>";
    }
    ?>
    

  </div>
</div>



</body>
</html>