<label for="roomActionForm">Rooms</label>
<form action="roomAction" method="POST" id="roomActionForm">
    @csrf
        <button type="submit" id="roomUpgradeID" value="-" name="action">-</button>
        <input type="text" disabled="true" name="result" value="{{ (session('roomActionResult')) ?? 0 }}" size=5/>
        <button type="submit" id="roomDowngradeID" value="+" name="action">+</button>
</form>
