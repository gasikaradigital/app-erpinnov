<div>
    <select id="pays" wire:model="pays" class="select2 form-select" data-allow-clear="true">
        <option value="">--Choisir--</option>
        @foreach($countries as $code => $name)
            <option value="{{ $code }}" {{ $selected == $code ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</div>
