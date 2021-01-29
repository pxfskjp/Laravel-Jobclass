<!-- select2 multiple -->
<div @include('admin::panel.inc.field_wrapper_attributes')>
<?php $require_skills = $field['value']; $require_skills = json_decode($require_skills); ?>
<label>{!! $field['label'] !!}</label>
    <select
            id="{{ $field['name'] }}"
            name="{{ $field['name'] }}[]"
            style="width: 100%"
            multiple>
            @if($require_skills)
                @foreach($require_skills as $skill)
                    <option value="{{$skill->id}}" selected >
                        {{$skill->name}}
                    </option>
                @endforeach
            @endif
            
    </select>
    
    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>


{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($xPanel->checkIfFieldIsFirstOfItsType($field, $fields))
    
    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    <!-- include select2 css-->
    <link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    @endpush
    
    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
    <!-- include select2 js-->
    <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    <script>
        /// get skills 

        $('#require_skills').select2({
            placeholder: "Choose Require Skills...",
            minimumInputLength: 2,
            ajax: {
                url: siteUrl + '/ajax/countries/admins/skills',
                dataType: 'json',
                method:'get',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>
    <script>
		$("#require_skills").on('select2:unselect', function (event) {
			$selectedId = event.params.data.id;
			var $el = $(this);
			$selectedOptionClass = "form"+$selectedId;
			$($selectedOptionClass).remove();
			setTimeout(function () {
				$('.select2-search__field', $el.closest('form')).focus();
				$el.select2('open');
				$('.select2-search__field', $el.closest('form')).val('');
			}, 0)
		});
    </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}