@component("components.lib.inputs.layouts.$type", [
    'type'          => 'date',
    'name'          => $input['name'],
    'label'         => $input['label'] ?? '',
    'model'         => $input['model'] ?? '',
    'value'         => $input['value'] ?? '',
    'placeholder'   => $input['placeholder'] ?? '',
    'classString'   => $classString ?? '',
    'override'      => $override ?? [],
    'id'            => $id ?? null,
]) @endcomponent

@error($input['name'])
    @include('components.lib.inputs.error-message', ['message' => $message])
@enderror
