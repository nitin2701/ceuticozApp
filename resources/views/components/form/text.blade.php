<div {{ $attributes->merge(['class' => 'form-group']) }}>
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($require)<span>*</span> @endif </label>
        <input name="{{ $name }}" id={{$id}}  type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($name)?old($name):$value }}"  @if($require)required @endif @if($multiple) multiple @endif @if($readonly)readonly @endif @if($disabled)disabled @endif /> 
        @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>
