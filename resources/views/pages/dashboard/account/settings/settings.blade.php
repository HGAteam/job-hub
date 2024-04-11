<x-base-layout>

    {{ theme()->getView('pages/dashboard/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/dashboard/account/settings/_profile-details', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

    {{ theme()->getView('pages/dashboard/account/settings/_signin-method', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}

</x-base-layout>
