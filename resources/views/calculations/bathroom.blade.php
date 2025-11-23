<label for="bathroomAction">Bathrooms</label>
<form action="bathroomAction" method="POST" id="bathroomActionForm">
    @csrf
        <button type="submit" id="bathroomUpgradeID" value="-" name="action">-</button>
        <input type="text" disabled="true" name="result" value="{{ (session('bathroomActionResult')) ?? 0 }}" size=5/>
        <button type="submit" id="bathroomDowngradeID" value="+" name="action">+</button>
</form>
