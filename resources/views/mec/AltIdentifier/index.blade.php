<md:AltIdentifier>
    @foreach($data['BasicMetadata-type']['AltIdentifier'] as $AltIdentifier)
    <md:Namespace>{{$AltIdentifier['Namespace']}}</md:Namespace>
    <md:Identifier>{{$AltIdentifier['Identifier']}}</md:Identifier>
    @endforeach
</md:AltIdentifier>