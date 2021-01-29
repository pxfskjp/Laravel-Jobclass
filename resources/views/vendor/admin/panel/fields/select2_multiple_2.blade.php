<!-- select2 multiple -->
<div @include('admin::panel.inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    <select
            id = "{{$field['name']}}"
            name="{{ $field['name'] }}[]"
            style="width: 100%"
            @include('admin::panel.inc.field_attributes', ['default_class' =>  'form-control select2_multiple'])
            multiple>
            @if ($skills!='')
                @foreach ($skills as $connected_entity_entry)
                    <option value="{{ $connected_entity_entry->id }}"
                        selected
                    >{{ $connected_entity_entry->name }}:[{{$connected_entity_entry->score}}]</option>
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
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color:#000;
        }
    </style>

    <link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
    <!-- include select2 js-->
    <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
    <script>
		jQuery(document).ready(function($) {
			// trigger select2 for each untriggered select2_multiple box
			$('.select2_multiple').each(function (i, obj) {
				if (!$(obj).hasClass("select2-hidden-accessible"))
				{
					$(obj).select2({
						theme: "bootstrap"
					});
				}
			});
		});
		$("#skills").on('select2:unselect', function (event) {
                console.log('sdsdf');
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
        $('#skills').select2({
            placeholder: "Choose Require Skills...",
            minimumInputLength: 2,
            ajax: {
                url: siteUrl + '/ajax/countries/admins/skills',
                dataType: 'json',
                method:'get',
                data: function (params) {
                console.log('sdfsf');
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
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}