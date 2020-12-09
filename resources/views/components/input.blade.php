<div class="form-group full-width">
        <label for="{{ $name }}" class="full-width control-label mb-1">{{ $label ?? '' }}</label>
        {{ $extra_label ?? '' }}
        <!--  $input_group => boolean -->
        <div class="{{ isset($input_group) ? 'input-group' : '' }}">
            <input
                value="{{ isset($value) ? old($name, $value) : old($name, '') }}"
                class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }} {{ $class ?? '' }}"
                name="{{ $name }}"
                type="{{ $type ?? 'text' }}"
                id="{{ $id ?? '' }}"
                aria-required="true"
                step="{{ $step ?? '' }}"
                placeholder="{{ $placeholder ?? '' }}"
                style="{{ $style ?? '' }}"
                @isset($v_model)
                v-model="{{ $v_model }}"
                @endisset
                @if (isset($min))
                    min="{{ $min }}"
                @endif
                @if (isset($max))
                    max="{{ $max }}"
                @endif
                {{ $required ?? '' }}
                {{ $disabled ?? '' }}
                {{ $input_extra ?? '' }}
                {{ (isset($readonly) && $readonly ) ? 'readonly' : '' }}
                >

                {{ $append ?? '' }}
            @if ($errors->has($name))
                <span class="help-block text-danger">{{ $errors->first($name) }}</span>
            @endif
            @if (isset($input_btn))
                <div class="input-group-append">
                    <button type="{{ $input_btn_type ?? "submit"}}" id="{{ $input_btn_id ?? '' }}"  class="btn btn-info {{ $input_btn_class ?? '' }}" {{ $input_btn_extra ?? '' }} >
                        {{  $input_btn_label ?? 'Buscar'  }}
                    </button>
                </div>
            @endif
            {{ $extra ?? '' }}
        </div>

    </div>
