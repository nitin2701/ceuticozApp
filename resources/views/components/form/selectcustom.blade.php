<div class="form-group">
        <label class="form-label">{{ $label }}@if($require ?? '')<span>*</span> @endif </label>
        
         <select name={{$name}} id={{$id}} class="form-control @error($name) is-invalid @enderror custom-select" @if($require ?? '')required @endif> 
                <option value="" >{{ $placeholder }}</option>
                @foreach($options as $option)
                @php
                $selectedVal = '';
                if($option['id'] == $selected){
                        $selectedVal = 'selected';
                }
                @endphp
                  @php $option_value = $option['id']; @endphp
                  <option {{ $selectedVal }} value="{{ $option['id'] }}">{{ $option['title'] }} - {{ $option['start_date'] }} - {{ $option['city'] }}</option>
                @endforeach
        </select>
        @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
        @enderror    
</div>
