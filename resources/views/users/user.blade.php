<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script>
            function toSetDoctor() {
                alert("Are you sure?");
                document.getElementById('setDoctorForm').submit();
            }
        </script>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

<h1>USER</h1>

    <body>
        @if ($isDoctor)
            <div style="background-color: blue; color: white;">
        @endif
            <div>
                {{ $user->name }}
            </div>
            <form action="/users/setDoctor" method="POST" id="setDoctorForm">
                @csrf
                <input type="hidden" name="userID" value="{{ $user->id }}" readonly>
                <input type="checkbox" id="isDoctorID" name="isDoctor" value="{{ $user->id }}" {{ ($isDoctor) ? 'checked' : '' }} onClick="toSetDoctor()">
            </form>
    </body>
</html>
