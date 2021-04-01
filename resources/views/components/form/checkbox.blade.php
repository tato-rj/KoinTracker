<div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" name="{{$name}}" class="custom-control-input" id="{{$name}}-checkbox" {{ old($name) ? 'checked' : '' }}>
      <label class="custom-control-label" for="{{$name}}-checkbox">{!! $text !!}</label>
    </div>
</div>