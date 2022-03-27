@php
    $ReleaseHistory = $data['BasicMetadata-type']['ReleaseHistory'];
@endphp

<md:ReleaseHistory>
    <md:ReleaseType>{{$ReleaseHistory['ReleaseType']}}</md:ReleaseType>
    <md:DistrTerritory>
        <md:country>{{$ReleaseHistory['DistrTerritory']['country']}}</md:country>
    </md:DistrTerritory>
    @isset($ReleaseHistory['Date'])
    <md:Date>{{$ReleaseHistory['Date']}}</md:Date>
    @endisset
</md:ReleaseHistory>