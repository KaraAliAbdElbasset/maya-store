@component('mail::message')
# une nouvelle commande a été effectué
visitez le panneau d'administration pour effectuer une action



@component('mail::button', ['url' => 'https://www.sarl-cec.com/admin/orders/'])
VOIR LA COMMANDE
@endcomponent


@endcomponent
