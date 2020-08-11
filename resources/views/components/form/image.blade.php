<div class="form-group">

    <label for="{{ $attributes['name'] }}">{{ $attributes['title'] }}</label>

    <div class="{{ $attributes['class']??'' }} @error( $attributes['name'] )is-invalid @enderror">
        <image-single action="{{ $attributes['action'] }}" name="{{ $attributes['name'] }}"
                      image="{{ $attributes['image'] }}"></image-single>
    </div>

    @error( $attributes['name'] )
    <strong class=" invalid-feedback">{{ $message }}</strong>
    @enderror

</div>
