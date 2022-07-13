<div {{ $attributes->merge(['class' => 'form-group']) }}>
        <label for="{{ $name }}">{{ $label }}@if($require ?? '')<span>*</span> @endif </label>
        <div class="form-group input text required">
                <textarea id="{{ $id }}"  name="{{ $name }}" class="form-control" rows="10"  required autofocus placeholder="{{ __('Full Description') }}">{{$value}}</textarea>	
        </div>	
        @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
        @enderror						
</div>






