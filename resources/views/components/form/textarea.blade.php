<div class="form-group">

    <label for="{{ $attributes['name'] }}">{{ $attributes['title'] }}</label>

    <textarea class="form-control {{ $attributes['class']??'' }} @error( $attributes['name'] )is-invalid @enderror"
              name="{{ $attributes['name'] }}" id="{{ $attributes['name'] }}" rows="{{ $attributes['rows']??3 }}"
              placeholder="{{ $attributes['placeholder'] }}"> {{ $slot }}</textarea>

    @error( $attributes['name'] )
    <strong class="invalid-feedback">{{ $message }}</strong>
    @enderror

</div>
