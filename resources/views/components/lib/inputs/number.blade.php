@component("components.lib.inputs.layouts.$type", [
    'type'          => 'number',
    'name'          => $input['name'],
    'min'           => $input['min'] ?? null,
    'label'         => $input['label'] ?? '',
    'model'         => $input['model'] ?? '',
    'value'         => $input['value'] ?? '',
    'placeholder'   => $input['placeholder'] ?? '',
    'classString'   => $classString ?? '',
    'override'      => $override ?? [],
    'id'            => $id ?? null,
    'tabindex'      => $tabindex ?? null,
]) @endcomponent

@error($input['name'])
    @include('components.lib.inputs.error-message', ['message' => $message])
@enderror
