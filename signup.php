<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 min-h-screen flex items-center justify-center font-sans">
  <div class="bg-white shadow-xl rounded-3xl w-full max-w-lg p-8 relative overflow-hidden">

    <!-- Logo -->
    <div class="absolute top-0 left-0 w-full bg-gradient-to-r from-blue-500 to-purple-600 h-24 rounded-t-3xl flex items-center justify-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" class="h-12" alt="Logo">
    </div>

    <div class="mt-28">
      <h2 class="text-3xl font-bold text-gray-700 text-center mb-6">Create Your Account</h2>

      <?php if (!empty($errors)): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-4">
          <ul class="list-disc list-inside">
            <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
          </ul>
        </div>
      <?php elseif ($success): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 p-4 rounded mb-4">
          <?= $success ?>
        </div>
      <?php endif; ?>

    </div>

  </div>
<body>

</body>
</html>