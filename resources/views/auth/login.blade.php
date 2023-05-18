<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: 'Poppins', sans-serif;" class="bg-gray-100 flex justify-center p-10">
    <div class="w-[300px]">
        <img src="{{ asset('assets/log-in 1.png') }}" alt="login-image">
        <h1 class="text-3xl font-semibold mt-5"
        >Login</h1>
        <h6 class="font-light tracking-wide text-[13px] mt-5"
        >Please enter your login credentials below to access your account</h6>
        <form method="post" class="mt-5">
            @csrf
            
            <div class="group">
                <label class="text-[13px] text-gray-500 group-hover:text-sm ease-linear duration-200"
                >Username</label>
                <input type="text" name="username" class="w-full bg-white rounded-md p-2 hover:bg-gray-200 ease-linear duration-200">
            </div>
            <div class="group mt-2">
                <label class="text-[13px] text-gray-500 group-hover:text-sm ease-linear duration-200"
                >Password</label>
                <input type="password" name="password" class="w-full bg-white rounded-md p-2 hover:bg-gray-200 ease-linear duration-200">
            </div>
            <input type="submit" value="Login" class="bg-blue-600 hover:bg-blue-700 ease-in duration-200 p-3 w-full text-white font-semibold rounded-md text-sm mt-10"
            >
        </form>

    </div>
</body>
</html>
