<div class="form-group">
    <div class="custom-control custom-radio">
      <input type="radio" name="{{$name}}" class="custom-control-input" id="{{$name}}-checkbox" value="{{$value}}" {{ old($name) ? 'selected' : '' }}>
      <label class="custom-control-label" for="{{$value}}-checkbox">{!! $text !!}</label>
    </div>
</div>