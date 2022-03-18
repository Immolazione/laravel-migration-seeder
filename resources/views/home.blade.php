<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Migration Seeder</title>
</head>
<body>
    <h1>Treni</h1>
<div>
    @foreach($trains as $train)
    <ul>
        <li><strong>Azienda: </strong>{{ $train->azienda }}</li>
        <li><strong>Stazione di Partenza: </strong>{{ $train->stazione_di_partenza }}</li>
        <li><strong>Stazione di Arrivo: </strong>{{ $train->stazione_di_arrivo }}</li>
        <li><strong>Orario Partenza </strong>{{ $train->orario_partenza }}</li>
        <li><strong>Orario Arrivo </strong>{{ $train->orario_arrivo }}</li>
        <li><strong>Codice del treno </strong>{{ $train->codice_treno }}</li>
        <li><strong>Stato in Orario: </strong>{{ $train->treno_in_orario = 0 ? 'Treno in Ritardo' : 'Treno in Orario'}}</li>
        <li><strong>Stato Cancellazione: </strong>{{ $train->cancellato = 0 ? 'Treno in Transito' : 'Treno Cancellato'}}</li>
    </ul>
    @endforeach
</div>
</body>
</html>