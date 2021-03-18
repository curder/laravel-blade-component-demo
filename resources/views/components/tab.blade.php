@props(['name'])

<div x-data="{
        id: '',
        name: '{{ $name }}',
        show: false,
        showIfActive(activeTab) {
            this.show = this.name === activeTab
        }
    }"
     x-show="show"
     role="tabpanel"
     :aria-labelledby="`tab-${id}`"
     :id="`tab-panel-${id}`"
>
    {{ $slot }}
</div>
