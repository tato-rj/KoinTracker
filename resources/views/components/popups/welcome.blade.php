@component('components.modal', ['id' => 'welcome-modal', 'header' => 'Welcome to ' . config('app.name'), 'autoshow' => true])
@slot('body')
Hooray!
@endslot
@endcomponent