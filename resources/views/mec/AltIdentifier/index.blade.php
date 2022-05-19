<md:AltIdentifier>
@isset($People['BasicMetadata-type']['AltIdentifier'])
@foreach($data['BasicMetadata-type']['AltIdentifier'] as $AltIdentifier)
<md:Namespace>{{$AltIdentifier['Namespace']}}</md:Namespace>
<md:Identifier>{{$AltIdentifier['Identifier']}}</md:Identifier>
@endforeach
@endisset
</md:AltIdentifier>