{{--Text components--}}
@component('components.lib.text.text') @slot('classString') @endslot @endcomponent

{{--Title  components--}}
@component('components.lib.titles.title')  @slot('classString') mb-8 @endslot @endcomponent

{{--Structure components--}}
@component('components.lib.structure.wrapper', ['background' => '']) @endcomponent

{{--Input components --}}
@component('components.lib.inputs.text', [
    'type' => 'thick-border',
    'input' => [
        'name' => 'full_name',
        'value' => '',
        'placeholder' => 'Typ hier',
    ]
])@endcomponent


@component('components.lib.inputs.checkbox', [
    'type' => 'checkbox-sm-rounded',
    'input' => [
        'name' => 'full_name',
        'label' => 'student'
    ],
])@endcomponent


{{--Button components--}}
@component('components.lib.buttons.button', [
    'type' => 'sm-rounded',
    'route' => '',
])
    editor zoeken
@endcomponent
