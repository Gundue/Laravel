<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('form.'.$field.'.label')</label>
<input type="text" id="@lang($field)">@
<select id="domain">
    <option value="gmail.com">gmail.com</option>
    <option value="naver.com">naver.com</option>
    <option value="daum.net">daum.net</option>
</select>
</div>