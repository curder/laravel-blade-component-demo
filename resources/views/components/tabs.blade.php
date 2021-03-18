@props(['active'])

<div x-data="{
        tabs: [],
        activeTab: '{{ $active }}',
        tabHeadings: [],
        toggleTab() {
            this.tabs.forEach(tab => tab.__x.$data.showIfActive(this.activeTab))
        }
     }"
     x-init="() => {
        tabs = [...$refs.tabs.children]
        tabHeadings = tabs.map((tab, index) => {
            tab.__x.$data.id = (index + 1);

            return tab.__x.$data.name;
        })
        toggleTab();
     }"
>
    <div>
        <template x-for="(tab, index) in tabHeadings" :key="index">
            <button x-text="tab"
                    @click="activeTab = tab; toggleTab();"
                    class="px-4 py-1 text-sm rounded hover:bg-blue-500 hover:text-white"
                    :class="tab === activeTab ? 'bg-blue-500 text-white' : ''"
                    :id="`tab-${index + 1}`"
                    role="tab"
                    :disabled="tab === activeTab"
                    :aria-selected="(tab === activeTab).toString()"
                    :aria-controls="`tab-panel-${index + 1}`"
            ></button>
        </template>
    </div>

    <div x-ref="tabs">
        {{ $slot }}
    </div>
</div>
