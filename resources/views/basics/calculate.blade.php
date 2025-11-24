<label for=@yield('formID')>@yield('formLabel')</label>
<form action=@yield('formAction') method="POST" id=@yield('formID')>
    @csrf
        <button type="submit" id=@yield('buttonDowngradeID') value="-" name="action">-</button>
        <input type="text" disabled="true" name="result" value=@yield('sessionResultID') size=5/>
        <button type="submit" id=@yield('buttonUpgradeID') value="+" name="action">+</button>
</form>
