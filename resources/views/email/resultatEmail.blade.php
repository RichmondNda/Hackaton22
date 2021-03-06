@component('mail::message')

# {{ $data['title'] }}

Bonjour {{ $data['nom'] }}  !

Le bureau du C2E tient à vous remercier pour votre participation au Technovore Hackathon.

Nous désirons par ce mail féliciter votre équipe {{ $data['equipe'] }} pour votre qualification.

Dans la même veine nous desirons vous donner le mot de passe par defaut de vos differents comptes

à savoir: TH@123456789


Aussi veillez  contacter le (+225 0769116467) pour recevoir les informations relative à la phase de vote.

Rendez-vous très bientôt ! 

Cordialement,<br>

Le Bureau du C2E


@component('mail::button', ['url' => 'https://technovore.c2e.ci/'])
Se connecter
@endcomponent


@endcomponent


