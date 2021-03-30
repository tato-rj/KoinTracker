<label class="mb-0 text-uppercase font-weight-bold text-{{$color ?? 'muted'}} mb-{{$mb ?? null}}" style="font-size: 80%">
@isset($icon)
@fa(['icon' => $icon])
@endisset
{{$text}}</label>