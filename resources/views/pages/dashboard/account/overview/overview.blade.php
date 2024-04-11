<x-base-layout>

{{ theme()->getView('pages/dashboard/account/_navbar', array('class' => 'mb-5 mb-xl-10')) }}

{{ theme()->getView('pages/dashboard/account/overview/_details', array('class' => 'mb-5 mb-xl-10', 'info' => auth()->user()->info)) }}

</x-base-layout>
