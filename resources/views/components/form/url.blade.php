<div {{ $attributes->merge(['class' => 'form-group']) }}>
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($require)<span>*</span> @endif</label>
        <input name="{{ $name }}" type="url" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" autocomplete="off" value="{{ old($name)?old($name):$value }}" @if($require)required @endif />
        @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>