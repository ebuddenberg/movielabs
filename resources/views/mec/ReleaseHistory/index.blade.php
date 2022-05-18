

@isset($data['BasicMetadata-type']['ReleaseYear'])
<md:ReleaseYear>{{$data['BasicMetadata-type']['ReleaseYear']}}</md:ReleaseYear>
@endisset

@isset($data['BasicMetadata-type']['ReleaseDate'])
<md:ReleaseDate>{{$data['BasicMetadata-type']['ReleaseDate']}}</md:ReleaseDate>
@endisset

@php
    $ReleaseHistory = $data['BasicMetadata-type']['ReleaseHistory'];
@endphp
<md:ReleaseHistory>
    <md:ReleaseType>{{$ReleaseHistory['ReleaseType']}}</md:ReleaseType>
    @isset($ReleaseHistory['DistrTerritory'])
    <md:DistrTerritory>
        <md:country>{{$ReleaseHistory['DistrTerritory']['country']}}</md:country>
    </md:DistrTerritory>
    @endisset
    @isset($ReleaseHistory['Date'])
    <md:Date>{{$ReleaseHistory['Date']}}</md:Date>
    @endisset
</md:ReleaseHistory>