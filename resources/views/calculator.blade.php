<form action="/order/action" method="post">
    <label for="rooms"></label>
    <select type="" placeholder="" name="" id="rooms" onchange="changeRooms()" disabled="true">
      @foreach ([1, 2, 3, 4, 5] as $i)
        <option>{{ $i }}</option>
      @endforeach
    </select>

    <button type="button" onclick="">+</button>
    <button type="button" onclick="">-</button>

    <script>
      function changeRooms() {
          var rooms = document.getElementById('rooms').value;
          window.location.href = '/rooms/' + rooms;
      }
    </script>

    <label for="bathroom"></label>
    <select type="" placeholder="" name="" id="bathrooms"  onchange="changeBathroom" disabled="true">
      @foreach ([1, 2, 3, 4, 5] as $i)
        <option>{{ $i }}</option>
      @endforeach
    </select>

    <script>
      function changeBathroom() {
          var bathrooms = document.getElementById('bathrooms').value;
          window.location.href = '/bathroom/' + bathrooms;
      }
    </script>
</form>

<form action="" method="POST" id="bathroomForm">
    @csrf
    <input type="submit" id="bathroomUpgradeID" value="+" name="action">
    <input type="submit" id="bathroomDowngradeID" value="-" name="action">
    <input type="text" disabled="true" name="result" value="{{ (session('bathroomActionResult')) ?? 0 }}"/>
</form>




<form action="/bathroomAction" method="POST" id="bathroomActionForm">
  @csrf
    <button type="submit" id="bathroomUpgradeID" value="+" name="action">+</button>
    <button type="submit" id="bathroomDowngradeID" value="-" name="action">-</button>
</form>

<input type="text" disabled="true" name="result" value="{{ (session('bathroomActionResult')) ?? 0 }}"/>





Result: <br>
{{ isset($result) ? $result : 0 }}


<script>

  function bathroomAction() {
    window.location.href = '/bathroomAction';
  }

  /**
  function bathroomUpgrade() {
    window.location.href = '/bathroom/upgrade/';
  }

  function bathroomDowngrade() {
    window.location.href = '/bathroom/downgrade/';
  }
*/

  /**
  function bathroomUpgrade() {
    var bathroom = document.getElementById('bathroomResult').value;
    var upgraded = parseInt(bathroom) + 1;
    console.log(bathroom);
    window.location.href = '/bathroom/upgrade/' + upgraded;
  }

  function bathroomDowngrade() {
    var bathroom = document.getElementById('bathroomResult').value;
    var downgraded = parseInt(bathroom) - 1 > 0 ? parseInt(bathroom) - 1 : 0;
    console.log(bathroom);
    window.location.href = '/bathroom/downgrade/' + downgraded;
  }
  */

</script>


<h3> {{ __('Your apartments') }} </h3>

@include('calculations.room')

@include('calculations.bathroom')