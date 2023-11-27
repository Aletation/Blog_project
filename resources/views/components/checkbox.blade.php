@php
    $id = Str::uuid()
@endphp

<div class="form-check">
    <input class="form-check-input" {{$attributes->merge([
        'value'=> 1,
        'checked'=> !! old($attributes->get('name')),
    ])}} type="checkbox" name="remember" value="1" id="{{$id}}">

    <label class="form-check-label" for="{{$id}}">
    {{$slot}}
    </label>
</div>