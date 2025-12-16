<h5>SET DOCTOR'S SPECIALIZATION</h5>

{{-- Check if a 'success' flash message exists --}}
@if(session()->has('success'))
    <div class="alert alert-success" style="background-color: green; color: white;">
        {{ session('success') }}
    </div>
@endif

{{-- Check for an 'error' or 'danger' message --}}
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="/users/doctor" method="POST" id="doctorForm">
    @csrf
    <input type="hidden" name="userID" value="{{ $userID }}">
    <input type="text" name="specialization" value="">
    <input type="submit">
</form>