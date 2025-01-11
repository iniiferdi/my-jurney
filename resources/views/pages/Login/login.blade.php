@extends('layouts.application')
@section('content')
    <!-- component -->
<div class="flex items-center justify-center w-full min-h-screen dark:bg-gray-100">
	<div class="max-w-md px-8 py-6 bg-white rounded-lg shadow-md dark:bg-gray-50">
		<h1 class="mb-4 text-2xl font-bold text-center dark:text-gray-600">DIARY PKL</h1>
		<form method="POST" action="{{route('login')}}">
            @csrf
			<div class="mb-4">
				<label for="username" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-600">Username</label>
				<input type="username" id="username" name="username" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your username" required>
			</div>

			<div class="mb-4">
				<label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-600">Password</label>
				<input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your password" required>
				<a href="#"
					class="text-xs text-gray-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Forgot
					Password?</a>
			</div>
            <div class="mb-4">
                <label for="semester" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-600">Semester</label>
                <select name="semester" id="semester" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                </select>
            </div>
			<div class="flex items-center justify-between mb-4">
				<div class="flex items-center">
					<input type="checkbox" id="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none" checked>
					<label for="remember" class="block ml-2 text-sm text-gray-700 dark:text-gray-700">Remember me</label>
				</div>

			</div>
			<button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
		</form>
	</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('succes'))
    <script>
        Swal.fire('{{$message}}');
    </script>
    @endif

    @if ($message = Session::get('failed'))
    <script>
        Swal.fire('{{$message}}');
    </script>
    @endif




@endsection
