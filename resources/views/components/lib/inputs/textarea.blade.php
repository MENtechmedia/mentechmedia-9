@component("components.lib.inputs.layouts.textarea.$type", [
    'type'          => 'textarea',
    'name'          => $input['name'],
    'label'         => $input['label'] ?? '',
    'model'         => $input['model'] ?? '',
    'value'         => $input['value'] ?? '',
    'placeholder'   => $input['placeholder'] ?? '',
    'rows'          => $input['rows'] ?? 8,
    'classString'   => $classString ?? '',
    'override'      => $override ?? [],
    'id'            => $id ?? null,

]) @endcomponent
@error($input['name'])
    @include('components.lib.inputs.error-message', ['message' => $message])
@enderror
