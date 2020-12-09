<div class="form-group">
    <label for="{{ $name }}" class="control-label mb-1 ">{{ $label ?? '' }}</label>
    <select name="{{ $name }}" id="{{ $id ?? '' }}" class="form-control {{$class ?? ''}} " {{ isset($disabled) && $disabled ? 'disabled' : '' }}>
        {{$option ?? ''}}
        @foreach ($object as $element)
            @php
                $a = old($name, $value ?? '');
            @endphp
        <option {{$a == $element['id'] ? 'selected' : '' }} value="{{ $element['id'] }}">{{ $element[ $descripcion ?? 'descripcion' ] }}</option>
        {{-- <option {{ isset($granja->tipo_produccion) && $granja->tipo_produccion->id == old('tipo_produccion', $tipo->id) ? 'selected' : '' }} value="{{ $tipo->id }}">{{ $tipo->descripcion }}</option> --}}
        @endforeach
    </select>
    @if ($errors->has($name))
        <span class="help-block text-danger">{{ $errors->first($name) }}</span>
    @endif
</div>