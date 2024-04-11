<x-base-layout>

    {{ theme()->getView('pages/apps/user-manager/users/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'user' => $user, 'info' => $info)) }}

    {{ theme()->getView('pages/apps/user-manager/users/account/settings/_profile-details', array('class' => 'mb-5 mb-xl-10', 'user' => $user, 'info' => $info)) }}


</x-base-layout>
