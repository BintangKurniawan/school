<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>

<body class="p-3">
    <form action="login.php" method="post" class="w-fit m-auto  justify-center flex flex-col rounded-lg shadow">
        <table class="justify-center flex bg-gray-50 border-b-2 border-gray-200 w-full p-7">
            <tr>
                <th colspan="2">
                    <h1>Login</h1>
                </th>
            </tr>
            <tr>
                <td class="h-20 p-3 text-sm text-gray-700 whitespace-nowrap">
                    <label for="username">Username</label>
                </td>
                <td class="h-20">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="text" name="username">
                </td>
            </tr>
            <tr>
                <td class="h-20 p-3 text-sm text-gray-700 whitespace-nowrap">
                    <label for="username">Password</label>
                </td>
                <td class="h-20">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class="h-20">
                    <button type="submit" class="font-bold text-sky-50 bg-blue-500 p-3 rounded-lg w-25">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>