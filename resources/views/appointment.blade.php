@if (Auth::check())
    
@else
    <a href="">Войти</a>
@endif


    <form action="/appointment/book" method="POST">
        @csrf
        <textarea name="appointment_notes" type="text" size=10></textarea>
        <br>
        <label for="select-slot">{{ __("Choose available slot") }}</label>
        <select name="select_slot" id="select-slot">
            @foreach ($appointments as $appointment)
                <option value="{{ $appointment->id }}">{{ $appointment->id }}</option>
            @endforeach
        </select>
        <button type="submit"> {{ __("Submit") }} </button>
    </form>
