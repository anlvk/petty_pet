<h5>SET DOCTOR'S SPECIALIZATION</h5>

<form action="/users/doctor" method="POST" id="doctorForm">
    @csrf
    <input type="hidden" name="userID" value="{{ $userID }}">
    <input type="text" name="specialization" value="">
    <input type="submit">
</form>