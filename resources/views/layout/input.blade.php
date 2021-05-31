<label for="">
    @lang('form.'.$filed.'.label')
</label>
<input type="{{ $type ?? 'text' }}" id="@lang($filed)" name="@lang($filed)" {{ $focus ?? '' }}>
