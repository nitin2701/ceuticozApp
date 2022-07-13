<div {{ $attributes->merge(['class' => 'form-group']) }}>
        <label class="form-label">{{ $label }}@if($require)<span>*</span> @endif </label>
        
         <select name={{$name}} id={{$id}} class="form-control @error($name) is-invalid @enderror custom-select" @if($require)required @endif @if($readonly)readonly @endif @if($multiple)multiple @endif> 
                <option value="" >{{ $placeholder }}</option>
                @foreach($options as $value=>$option)
                        <option @if ($isSelected($value)) selected="selected" @endif value="{{ $value }}">{{ $option }}</option>
                @endforeach
        </select>
        @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
        @enderror    
</div>
