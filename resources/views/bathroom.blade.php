<form>

    <button type="button" onclick="bathroomUpgrade()" id="bathroomUpgradeID" name="upgrade">+</button>
    <button type="button" onclick="bathroomDowngrade()" id="bathroomDowngradeID" name="downgrade">-</button>


</form>

Result: <br>
{{ isset($result) ? $result : 0 }}

<script>
    function bathroomUpgrade() {
        var bathroom = document.getElementById('bathroomResult').value;
        var upgraded = parseInt(bathroom) + 1;
        console.log(bathroom);
        window.location.href = '/bathroom/upgrade/';
    }

    function bathroomDowngrade() {
        var bathroom = document.getElementById('bathroomResult').value;
        window.location.href = '/bathroom/downgrade/';
    }

</script>