<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.'.$field.'.label')</label>

    <div class="col-md-6">
        <input id="@lang($field)" type="{{ $type ?? 'text' }}" class="form-control @error('@lang($field)') is-invalid @enderror" name="@lang($field)" required autocomplete="name" {{ $focus ?? '' }}>

        @error('@lang($field)')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>