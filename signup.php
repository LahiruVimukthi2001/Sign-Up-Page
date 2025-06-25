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

       <form method="POST" class="space-y-4">
        <div>
          <label class="block text-gray-600 mb-1">Full Name</label>
          <input name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text">
        </div>

        <div>
          <label class="block text-gray-600 mb-1">Email</label>
          <input name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" type="email">
        </div>

        <div class="flex gap-4">
          <div class="w-1/2">
            <label class="block text-gray-600 mb-1">Password</label>
            <input name="password" class="w-full px-4 py-2 border rounded-lg" type="password">
          </div>
          <div class="w-1/2">
            <label class="block text-gray-600 mb-1">Confirm</label>
            <input name="confirm" class="w-full px-4 py-2 border rounded-lg" type="password">
          </div>
        </div>

        <div>
          <label class="block text-gray-600 mb-1">Phone</label>
          <input name="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>" class="w-full px-4 py-2 border rounded-lg" type="text">
        </div>

        <div class="flex gap-4">
          <div class="w-1/2">
            <label class="block text-gray-600 mb-1">Gender</label>
            <select name="gender" class="w-full px-4 py-2 border rounded-lg">
              <option value="">Select</option>
              <option value="male" <?= ($_POST['gender'] ?? '') === 'male' ? 'selected' : '' ?>>Male</option>
              <option value="female" <?= ($_POST['gender'] ?? '') === 'female' ? 'selected' : '' ?>>Female</option>
              <option value="other" <?= ($_POST['gender'] ?? '') === 'other' ? 'selected' : '' ?>>Other</option>
            </select>
          </div>
          <div class="w-1/2">
            <label class="block text-gray-600 mb-1">Date of Birth</label>
            <input name="dob" value="<?= htmlspecialchars($_POST['dob'] ?? '') ?>" class="w-full px-4 py-2 border rounded-lg" type="date">
          </div>
        </div>

       </form>

    </div>

  </div>
<body>

</body>
</html>