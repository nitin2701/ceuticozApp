<div {{ $attributes->merge(['class' => 'form-group']) }}>
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($require ?? '')<span>*</span> @endif </label>
        <textarea name="{{ $name }}" id={{$id}}  class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}"  @if($require ?? '')required @endif >{{$value}}</textarea>
        @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>



